<?php

namespace App\Filament\Tables;

use App\Models\Request;
use Filament\Tables\Columns\TextColumn;

class RequestColumns
{
    public static function get(): array
    {
        return [
            TextColumn::make('title')
                ->label('Название')
                ->searchable(),

            TextColumn::make('status')
                ->sortable()
                ->label('Статус')
                ->formatStateUsing(fn(string $state) => Request::STATUSES[$state] ?? $state),

            TextColumn::make('priority')
                ->sortable()
                ->label('Приоритет')
                ->formatStateUsing(fn(string $state) => Request::PRIORITIES[$state] ?? $state),

            TextColumn::make('created_at')
                ->label('Дата создания')
                ->date('H:i d-m-Y'),

            TextColumn::make('updated_at')
                ->label('Дата обновления')
                ->date('H:i d-m-Y'),
        ];
    }
}
