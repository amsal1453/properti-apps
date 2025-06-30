<?php

namespace App\Filament\Resources\PropertiResource\Pages;

use App\Filament\Resources\PropertiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProperti extends EditRecord
{
    protected static string $resource = PropertiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle the map data
        if (isset($data['peta'])) {
            $data['latitude'] = $data['peta']['lat'] ?? null;
            $data['longitude'] = $data['peta']['lng'] ?? null;
            unset($data['peta']);
        }

        return $data;
    }
}
