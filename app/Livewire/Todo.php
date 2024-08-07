<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos = [];
    public $todo = '';

    public function add()
    {
        $this->todos[] = ['text' => $this->todo, 'done' => false];
        $this->todo = '';
    }
    public function toggleDone($index)
    {
        $this->todos[$index]['done'] = !$this->todos[$index]['done'];
    }

    public function delete($index)
{
    unset($this->todos[$index]);
    $this->todos = array_values($this->todos); // Re-index the array
}

    public function render()
    {
        return view('livewire.todo');
    }
}
