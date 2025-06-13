<?php

namespace App\Filament\Resources\OrderCatalogsResource\Pages;

use App\Filament\Resources\OrderCatalogsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderCatalogs extends EditRecord
{
    protected static string $resource = OrderCatalogsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
