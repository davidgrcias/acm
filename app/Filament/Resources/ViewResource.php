<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ViewResource\Pages;
use App\Models\View;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ViewResource extends Resource
{
    protected static ?string $model = View::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    // Define navigation label
    protected static ?string $navigationLabel = 'View Settings';

    // Define singular label for the resource
    protected static ?string $label = 'View Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('favicon_logo')
                    ->label('Favicon/Logo')
                    ->image()
                    ->disk('public')
                    ->avatar()
                    ->directory('view-assets')
                    ->required(),

                TextInput::make('title')->label('Title')->required(),

                TextInput::make('organization_name')->label('Organization Name')->required(),

                Textarea::make('greeting_message')->label('Greeting Message')->required(),

                Textarea::make('placeholder_text')->label('Placeholder Text'),

                FileUpload::make('introduction_banner_1')
                    ->label('Introduction Banner 1 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                FileUpload::make('introduction_banner_2')
                    ->label('Introduction Banner 2 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                FileUpload::make('introduction_banner_3')
                    ->label('Introduction Banner 3 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                FileUpload::make('introduction_banner_4')
                    ->label('Introduction Banner 4 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                TextInput::make('tagline')->label('Tagline'),

                TextInput::make('tagline_meaning')->label('Tagline Meaning'),

                Textarea::make('explanation')->label('Explanation'),

                TextInput::make('testimonial_title')->label('Testimonial Title'),

                FileUpload::make('testimonial_image_1')
                    ->label('Testimonial Image 1')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                FileUpload::make('testimonial_image_2')
                    ->label('Testimonial Image 2')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets'),

                TextInput::make('contact_title')->label('Contact Title'),

                TextInput::make('contact_name')->label('Contact Name'),

                TextInput::make('contact_phone_number')->label('Contact Phone Number'),

                TextInput::make('contact_email')->label('Contact Email'),

                TextInput::make('copyright_text')->label('Copyright Text'),

                TextInput::make('instagram_link')->label('Instagram Link'),

                TextInput::make('whatsapp_link')->label('WhatsApp Link'),

                TextInput::make('linktree_link')->label('Linktree Link'),

                TextInput::make('gmail_link')->label('Gmail/Email Link'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('favicon_logo')
                    ->label('Favicon/Logo')
                    ->disk('public')
                    ->size(50, 50),
                TextColumn::make('title')
                    ->sortable()
                    ->label('Title'),
                TextColumn::make('organization_name')
                    ->sortable()
                    ->label('Organization Name'),
                TextColumn::make('greeting_message')
                    ->sortable()
                    ->label('Greeting Message')
                    ->words(10)
                    ->wrap(),
                TextColumn::make('tagline')
                    ->sortable()
                    ->label('Tagline'),
                TextColumn::make('contact_email')
                    ->sortable()
                    ->label('Contact Email'),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListViews::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disable creating new records
    }
}
