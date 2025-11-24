<?php

namespace App\Filament\Resources\Epics\Pages;

use App\Filament\Resources\Epics\EpicResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEpic extends ViewRecord
{
    protected static string $resource = EpicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
