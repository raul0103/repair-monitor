<?php

namespace App\Livewire\Tables;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Request;

class RequestsTable extends Component
{
    use WithPagination;

    public $sortField = 'status';
    public $sortDirection = 'asc';

    // Livewire слушает событие 'requestCreated' и вызывает $refresh
    protected $listeners = ['requestCreated' => '$refresh'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $requests = Request::orderBy($this->sortField, $this->sortDirection)->paginate(10);

        return view('livewire.tables.requests-table', [
            'requests' => $requests
        ]);
    }
}
