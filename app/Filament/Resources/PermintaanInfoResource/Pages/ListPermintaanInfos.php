<?php

namespace App\Filament\Resources\PermintaanInfoResource\Pages;

use App\Filament\Resources\PermintaanInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPermintaanInfos extends ListRecords
{
    protected static string $resource = PermintaanInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
