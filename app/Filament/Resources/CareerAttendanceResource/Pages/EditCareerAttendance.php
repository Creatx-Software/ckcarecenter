<?php

namespace App\Filament\Resources\CareerAttendanceResource\Pages;

use App\Filament\Resources\CareerAttendanceResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCareerAttendance extends EditRecord
{
    protected static string $resource = CareerAttendanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (empty($data['branch_id']) && !empty($data['user_id'])) {
            $data['branch_id'] = User::find($data['user_id'])?->branch_id;
        }

        return $data;
    }
}
