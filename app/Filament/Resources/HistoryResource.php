<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Models\History;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box-arrow-down';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('content')
                    ->required()
                    ->label('Content'),
                FileUpload::make('image_one')
                    ->label('Image One')
                    ->directory('history-images')
                    ->storeFileNamesIn('original_filename')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
                FileUpload::make('image_two')
                    ->label('Image Two')
                    ->directory('history-images')
                    ->storeFileNamesIn('original_filename')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
                TextInput::make('order')
                    ->numeric()
                    ->required()
                    ->unique(History::class, 'order', ignoreRecord: true)
                    ->label('Order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('content')
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->words(10)
                    ->label('Content'),
                ImageColumn::make('image_one')
                    ->label('Image One')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->image_one))
                    ->size(100, 100)->openUrlInNewTab(),
                ImageColumn::make('image_two')
                    ->label('Image Two')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->image_two))
                    ->size(100, 100)->openUrlInNewTab(),
                TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created Date')
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
