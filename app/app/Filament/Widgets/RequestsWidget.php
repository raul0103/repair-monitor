<?php

namespace App\Filament\Widgets;

use App\Filament\Tables\RequestColumns;
use App\Models\Request;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class RequestsWidget extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(fn(): Builder => Request::query())
            ->columns(RequestColumns::get(['status']));
    }
}
