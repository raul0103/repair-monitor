<?php

namespace App\Filament\Tables;

use App\Models\Request;
use Filament\Tables\Columns\TextColumn;

class RequestColumns
{
    /**
     * @param array $sortable - Массив ключей по которым будет сортировка
     * example - ['status','priority']
     */
    public static function get(array $sortable = []): array
    {
        return [
            TextColumn::make('title')
                ->label('Название')
                ->searchable(),

            TextColumn::make('status')
                ->sortable(in_array('status', $sortable))
                ->label('Статус')
                ->formatStateUsing(fn(string $state) => Request::STATUSES[$state] ?? $state),

            TextColumn::make('priority')
                ->sortable(in_array('priority', $sortable))
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
