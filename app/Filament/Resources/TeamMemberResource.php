<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamMemberResource\Pages;
use App\Models\TeamMember;
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

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(200),
            Forms\Components\FileUpload::make('member_image')
                ->directory('team-members')
                ->storeFileNamesIn('original_filename')
                ->image()
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9', // You can define aspect ratios that are required
                    '4:3',
                    '1:1',
                ])->label("Member Image (1:1)")->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
            Forms\Components\TextInput::make('role')
                ->required()
                ->maxLength(100),
            Forms\Components\TextInput::make('order')
                ->numeric()
                ->required()
                ->unique(TeamMember::class, 'order', fn($record) => $record),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('member_image')
                    ->label('Image')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->member_image))
                    ->size(100, 100)->circular()->openUrlInNewTab(),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Name'),
                TextColumn::make('role')->sortable()
                    ->searchable()
                    ->label('Role'),
                TextColumn::make('order')->sortable()
                    ->searchable()
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeamMembers::route('/'),
            'create' => Pages\CreateTeamMember::route('/create'),
            'edit' => Pages\EditTeamMember::route('/{record}/edit'),
        ];
    }
}
