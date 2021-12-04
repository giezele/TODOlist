<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TasksTable extends Component
{
    public $checklist;

    public function render()
    {
        $tasks = $this->checklist->tasks()->orderBy('position')->get();

        return view('livewire.tasks-table', compact('tasks'));
    }

    public function updateTaskOrder($task)
    {
        foreach ($task as $task) {
            Task::find($task['value'])->update(['position' => $task['order']]);
        }
    }
}
