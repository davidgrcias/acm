<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionMissionResource\Pages;
use App\Models\VisionMission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Illuminate\Validation\Rule;

class VisionMissionResource extends Resource
{
    protected static ?string $model = VisionMission::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category')
                    ->options([
                        'vision' => 'Vision',
                        'mission' => 'Mission',
                    ])
                    ->required()
                    ->label('Category'),

                TextInput::make('number')
                    ->required()
                    ->numeric()
                    ->label('Number')
                    ->rules([
                        'required',
                        'numeric',
                        Rule::unique('vision_missions', 'number')
                            ->where(function ($query) {
                                $query->where('category', request()->input('category'));
                            })
                            ->ignore(request()->route('record'))
                    ]),

                Textarea::make('content')
                    ->required()
                    ->label('Content'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category')
                    ->sortable()
                    ->label('Category')
                    ->searchable(),
                TextColumn::make('number')
                    ->sortable()
                    ->label('Number'),
                TextColumn::make('content')
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->words(10)
                    ->label('Content'),
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
            'index' => Pages\ListVisionMissions::route('/'),
            'create' => Pages\CreateVisionMission::route('/create'),
            'edit' => Pages\EditVisionMission::route('/{record}/edit'),
        ];
    }
}
