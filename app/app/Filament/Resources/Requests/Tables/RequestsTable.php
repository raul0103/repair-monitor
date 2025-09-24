<?php

namespace App\Filament\Resources\Requests\Tables;

use App\Models\Request;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(label: 'Название')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Статус')
                    ->formatStateUsing(fn(string $state) => Request::STATUSES[$state] ?? $state),

                TextColumn::make('priority')
                    ->label('Приоритет')
                    ->formatStateUsing(fn(string $state) => Request::PRIORITIES[$state] ?? $state),

                TextColumn::make('created_at')->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')->label('Дата обновления')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
