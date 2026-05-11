<?php

namespace App\Filament\Admin\Resources\BookingTransactionsResource\Pages;

use App\Filament\Admin\Resources\BookingTransactionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingTransactions extends ListRecords
{
    protected static string $resource = BookingTransactionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
