<?php

namespace App\Filament\Imelda\Resources\TransaksiResource\Pages;

use App\Filament\Imelda\Resources\TransaksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransaksi extends EditRecord
{
    protected static string $resource = TransaksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}