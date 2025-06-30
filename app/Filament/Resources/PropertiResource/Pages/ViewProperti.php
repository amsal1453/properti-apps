<?php

namespace App\Filament\Resources\PropertiResource\Pages;

use App\Filament\Resources\PropertiResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProperti extends ViewRecord
{
    protected static string $resource = PropertiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
