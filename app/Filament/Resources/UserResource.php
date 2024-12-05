<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';
    protected static ?string $label = 'Edit Admin';
    protected static ?string $pluralLabel = 'Edit Admin';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->label('Name'),
            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255)
                ->label('Email')
                ->unique(User::class, 'email', fn($record) => $record), // Unique validation for email
            Forms\Components\FileUpload::make('picture')
                ->avatar()
                ->disk('public')
                ->directory('profile')
                ->image()
                ->visibility('public')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    '1:1', // Define 1:1 ratio for profile pictures
                ])
                ->label("Profile Image")
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
            Forms\Components\TextInput::make('password')
                ->password()
                ->maxLength(255)
                ->label('Password')
                ->dehydrateStateUsing(fn($state) => filled($state) ? bcrypt($state) : null) // Hash password if it's provided
                ->required(fn($record) => $record === null) // Required only when creating a new user
                ->dehydrated(fn($state) => filled($state)) // Only update if there's a value
                ->visible(fn($record) => Auth::id() !== optional($record)->id), // Hide the password field when editing your own profile
        ]);
    }

    public static function canCreate(): bool
    {
        return false; // This will disable the "Create New" button
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('picture')
                    ->label('Profile Image')
                    ->disk('public')
                    ->url(fn($record) => asset('storage/' . $record->picture))
                    ->size(100, 100)
                    ->circular()
                    ->openUrlInNewTab(),
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Name'),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label('Email'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created Date')
                    ->sortable(),
            ])
            ->filters([
                // Add any filters if necessary
            ])
            ->actions([
                Tables\Actions\EditAction::make()
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
            'index' => Pages\ListUsers::route('/'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
