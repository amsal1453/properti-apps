<?php

namespace App\Filament\Resources\PermintaanInfoResource\Pages;

use App\Filament\Resources\PermintaanInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermintaanInfo extends EditRecord
{
    protected static string $resource = PermintaanInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
