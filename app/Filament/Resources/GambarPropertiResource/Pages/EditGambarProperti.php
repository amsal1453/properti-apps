<?php

namespace App\Filament\Resources\GambarPropertiResource\Pages;

use App\Filament\Resources\GambarPropertiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGambarProperti extends EditRecord
{
    protected static string $resource = GambarPropertiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
