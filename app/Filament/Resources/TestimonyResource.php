<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonyResource\Pages;
use App\Models\Testimony;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class TestimonyResource extends Resource
{
    protected static ?string $model = Testimony::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center';
    protected static ?string $label = 'Testimony';
    protected static ?string $navigationLabel = 'Testimonies';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('image')
                ->label('Image')
                ->image()
                ->disk('public')
                ->directory('testimony-images')
                ->required()
                ->visibility('public')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '1:1', // Ensure it's a square (e.g., for profile pictures)
                ])
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

            Textarea::make('text')
                ->label('Quote')
                ->required(),

            TextInput::make('status')
                ->label('Status (e.g., YouTuber, Student)')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image')
                ->label('Image')
                ->disk('public')
                ->size(100, 100)
                ->circular()
                ->openUrlInNewTab(),

            TextColumn::make('text')
                ->label('Quote')
                ->words(15)
                ->wrap()
                ->searchable(),

            TextColumn::make('status')
                ->label('Status')
                ->sortable()
                ->searchable(),

            TextColumn::make('created_at')
                ->label('Created Date')
                ->dateTime()
                ->sortable(),
        ])
            ->filters([
                // Add any filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonies::route('/'),
            'create' => Pages\CreateTestimony::route('/create'),
            'edit' => Pages\EditTestimony::route('/{record}/edit'),
        ];
    }
}
