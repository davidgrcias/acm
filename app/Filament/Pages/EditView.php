<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use App\Models\View;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

class EditView extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.edit-view';

    public function mount(): void
    {
        // Load the data from the first record in the View model
        $viewRecord = View::firstOrFail();
        $this->data = $viewRecord->toArray();

        $this->form->fill($this->data);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('favicon_logo')
                    ->label('Favicon/Logo')
                    ->image()
                    ->disk('public')
                    ->avatar()
                    ->directory('view-assets')
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                TextInput::make('title')->label('Title'),

                // TextInput::make('organization_name')->label('Organization Name'),

                Textarea::make('greeting_message')->label('Greeting Message'),

                // Textarea::make('placeholder_text')->label('Placeholder Text'),

                TextInput::make('tagline')->label('Tagline'),

                FileUpload::make('introduction_banner_1')
                    ->label('Introduction Banner 1 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                FileUpload::make('introduction_banner_2')
                    ->label('Introduction Banner 2 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                FileUpload::make('introduction_banner_3')
                    ->label('Introduction Banner 3 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                FileUpload::make('introduction_banner_4')
                    ->label('Introduction Banner 4 (16:9)')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                TextInput::make('quotes')->label('Quotes'),

                TextInput::make('quotesby')->label('Quotes By'),

                Textarea::make('explanation')->label('Explanation'),

                TextInput::make('testimonial_title')->label('Testimonial Title'),

                FileUpload::make('testimonial_image_1')
                    ->label('Testimonial Image 1')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                FileUpload::make('testimonial_image_2')
                    ->label('Testimonial Image 2')
                    ->image()
                    ->disk('public')
                    ->directory('view-assets')->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9', // You can define aspect ratios that are required
                        '4:3',
                        '1:1',
                    ])->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                TextInput::make('contact_title')->label('Contact Title'),

                TextInput::make('contact_name')->label('Contact Name'),

                TextInput::make('contact_phone_number')->label('Contact Phone Number'),

                TextInput::make('contact_email')->label('Contact Email'),

                TextInput::make('copyright_text')->label('Copyright Text'),

                TextInput::make('instagram_link')->label('Instagram Link'),

                TextInput::make('whatsapp_link')->label('WhatsApp Link'),

                TextInput::make('linktree_link')->label('Linktree Link'),

                TextInput::make('gmail_link')->label('Gmail/Email Link'),
            ])
            ->statePath('data');  // Ensure the form state is bound to $data
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('Save'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $viewRecord = View::firstOrFail(); // Get the record to be updated

        try {
            $data = $this->form->getState(); // Get the form state

            // Update the View model instance with new data
            $viewRecord->update($data);
        } catch (\Exception $exception) {
            Notification::make()
                ->danger()
                ->title('Failed to save settings.')
                ->send();
            return;
        }

        Notification::make()
            ->success()
            ->title('Settings saved successfully.')
            ->send();
    }
}
