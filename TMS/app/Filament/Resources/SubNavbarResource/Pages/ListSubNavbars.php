<?php

namespace App\Filament\Resources\SubNavbarResource\Pages;

use App\Filament\Resources\SubNavbarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubNavbars extends ListRecords
{
    protected static string $resource = SubNavbarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
