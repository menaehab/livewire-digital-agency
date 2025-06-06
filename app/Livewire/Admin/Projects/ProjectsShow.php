<?php

namespace App\Livewire\Admin\Projects;

use Livewire\Component;
use App\Models\Project;

class ProjectsShow extends Component
{
    protected $listeners = ['projectShow'];
    public $project;
    public $name;
    public $link;
    public $image;
    public $description;
    public $categoryName;
    public $categories;
    public function projectShow($id)
    {
        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->image = $this->project->image;
        $this->description = $this->project->description;
        $this->categoryName = $this->project->category->name;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('livewire.admin.projects.projects-show');
    }
}