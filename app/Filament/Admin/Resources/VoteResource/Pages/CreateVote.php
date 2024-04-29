<?php

namespace App\Filament\Admin\Resources\VoteResource\Pages;

use App\Filament\Admin\Resources\VoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateVote extends CreateRecord
{
    protected static string $resource = VoteResource::class;
}
