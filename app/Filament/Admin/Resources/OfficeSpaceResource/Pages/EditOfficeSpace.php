<?php

namespace App\Filament\Admin\Resources\OfficeSpaceResource\Pages;

use App\Filament\Admin\Resources\OfficeSpaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOfficeSpace extends EditRecord
{
    protected static string $resource = OfficeSpaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
