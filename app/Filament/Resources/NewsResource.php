<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Forms\Components\Select;


class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('text')
                ->required()
                ->columnSpan(2),
            Forms\Components\FileUpload::make('cover_image')
                ->directory('cover_image_news')
                ->storeFileNamesIn('original_filename')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ])->label("Cover Image (16x9)")->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
            Forms\Components\TextInput::make('author')
                ->required()
                ->maxLength(255),
            Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'reviewing' => 'Reviewing',
                    'published' => 'Published',
                ])
                ->required()
                ->label('Status'),
        ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Cover Image')
                    ->disk('public')  // Confirm this is correctly set in filesystems config
                    ->url(fn($record) => asset('storage/' . $record->cover_image))
                    ->size(100, 100)->openUrlInNewTab(),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('author')
                    ->sortable()
                    ->searchable()
                    ->label('Author'),
                TextColumn::make('text')
                    ->words(25)
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->label('Content'),
                TextColumn::make('created_at')
                    ->dateTime() // Format as a date-time column
                    ->label('Created Date')
                    ->sortable(),
                SelectColumn::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ])
                    ->sortable()
                    ->searchable()
                    ->label('Status')
                    ->default('draft'),
            ])
            ->filters([
                // Add any filters if necessary
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    protected function redirectAfterCreate(): string
    {
        return $this->getResource()::getUrl('index');  // Redirects to the index page
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
