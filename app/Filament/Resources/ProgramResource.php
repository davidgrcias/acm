<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramResource\Pages;
use App\Filament\Resources\ProgramResource\RelationManagers;
use App\Models\Program;
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

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon =
    'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpan(2),
            FileUpload::make('image')
                ->directory('program-images')
                ->storeFileNamesIn('original_filename')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9', // You can define aspect ratios that are required
                    '4:3',
                    '1:1',
                ])->label("Program Image")->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Program Image')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->image))
                    ->size(200, 200),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('description')
                    ->words(50)
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->label('Description'),
            ])
            ->filters([
                // Add any filters if necessary
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    protected function redirectAfterCreate(): string
    {
        return $this->getResource()::getUrl('index');  // Redirects to the index page after create
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}
