<?php

namespace App\Filament\Admin\Resources\TryoutResource\Pages;

use App\Filament\Admin\Resources\TryoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTryout extends EditRecord
{
    protected static string $resource = TryoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
