<?php

namespace App\Filament\Widgets;

use App\Models\Request;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RequestStatsWidget extends StatsOverviewWidget
{
    protected ?string $pollingInterval = '10s';

    protected function getStats(): array
    {
        return [
            Stat::make('Новые', Request::where('status', 'new')->count()),
            Stat::make('В работе', Request::where('status', 'in_progress')->count()),
            Stat::make('Завершённые', Request::where('status', 'done')->count()),
        ];
    }
}
