<?php

namespace App\Filament\Resources\SpeakerResource\Pages;

use App\Filament\Resources\SpeakerResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewSpeaker extends ViewRecord
{
    protected static string $resource = SpeakerResource::class;

    protected function getHeaderWidgets(): array
    {
        // TODO when there are two different header widgets here, after 2 livewire calls there is an error that breaks the page
        return [
            SpeakerResource\Widgets\SampleWidget::class,
            SpeakerResource\Widgets\SpeakerOverview::class,
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->slideOver()
                ->form([
                    TextInput::make('name'),
                ]),
            Actions\Action::make('say-hi')
            ->action(function($action) {
                Notification::make()->title('Hi')->send();
            })
        ];
    }
}
