<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\FileUpload;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('image')
                ->directory('gallery-images')
                ->storeFileNamesIn('original_filename')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9', // You can define aspect ratios that are required
                    '4:3',
                    '1:1',
                ])
                ->label("Gallery Image (16x9)")
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
            Forms\Components\TextInput::make('label')
                ->required()
                ->maxLength(255)
                ->label("Label"),
            Forms\Components\TextInput::make('order')
                ->numeric()
                ->required()
                ->unique(Gallery::class, 'order', fn($record) => $record)
                ->label("Order")
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->image))
                    ->width(320)->height(180),
                TextColumn::make('label')
                    ->sortable()
                    ->searchable()
                    ->label('Label'),
                TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
