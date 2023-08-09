<?php

namespace App\Filament\Resources\SubNavbarResource\Pages;

use App\Filament\Resources\SubNavbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubNavbar extends EditRecord
{
    protected static string $resource = SubNavbarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
