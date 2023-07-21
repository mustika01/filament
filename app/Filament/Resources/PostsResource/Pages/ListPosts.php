<?php

namespace App\Filament\Resources\PostsResource\Pages;

use App\Filament\Resources\PostsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
