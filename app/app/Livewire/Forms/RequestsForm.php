<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\Request;

class RequestsForm extends Component
{
    public $title;
    public $description;
    public $status = 'new';
    public $priority = 'low';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|in:new,in_progress,done',
        'priority' => 'required|in:low,medium,high',
    ];

    public function submit()
    {
        $this->validate();

        Request::create([
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
        ]);

        // Очистка формы после создания
        $this->reset(['title', 'description', 'status', 'priority']);

        // событие для обновления таблицы Livewire
        $this->dispatch('requestCreated');
    }

    public function render()
    {
        return view('livewire.forms.requests-form');
    }
}
