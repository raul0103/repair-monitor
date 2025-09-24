<?php

namespace App\Filament\Widgets;

use App\Filament\Tables\RequestColumns;
use App\Models\Request;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestRequestsWidget extends TableWidget
{
    protected int $limit = 5;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn(): Builder => Request::query()
                ->latest()
                ->limit($this->limit))
            ->columns(RequestColumns::get())
            ->paginated(false)
            ->poll('10s');
    }

    // protected function getHeading(): string
    // {
    //     return "Последние заявки ({$this->limit})";
    // }
}
