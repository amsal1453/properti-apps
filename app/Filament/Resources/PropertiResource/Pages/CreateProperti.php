<?php

namespace App\Filament\Resources\PropertiResource\Pages;

use App\Filament\Resources\PropertiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProperti extends CreateRecord
{
    protected static string $resource = PropertiResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
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
