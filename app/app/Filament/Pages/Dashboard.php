<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\LatestRequestsWidget;
use App\Filament\Widgets\RequestStatsWidget;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            RequestStatsWidget::class,
            LatestRequestsWidget::class
        ];
    }
}
