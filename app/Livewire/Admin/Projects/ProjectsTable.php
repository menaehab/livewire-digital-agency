<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshProjectsTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $projects = Project::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.projects.projects-table', compact('projects'));
    }
}