<?php

namespace App\Filament\Resources\Requests\Schemas;

use App\Models\Request;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Название заявки')
                    ->required(),

                Textarea::make('description')
                    ->label('Описание')
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Статус')
                    ->options(Request::STATUSES)
                    ->default('new')
                    ->required(),

                Select::make('priority')
                    ->label('Приоритет')
                    ->options(Request::PRIORITIES)
                    ->default('low')
                    ->required(),
            ]);
    }
}
