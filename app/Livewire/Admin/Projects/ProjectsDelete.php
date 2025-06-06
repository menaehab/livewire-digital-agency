<?php

namespace App\Livewire\Admin\Projects;

use Livewire\Component;
use App\Models\Project;

class ProjectsDelete extends Component
{
    public $project;
    protected $listeners = ['projectDelete'];
    public function projectDelete($id)
    {
        $this->project = Project::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        if ($this->project->image) {
            \Storage::delete('public/projects/' . $this->project->image);
        }
        $this->project->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshProjectsTable');
    }
    public function render()
    {
        return view('livewire.admin.projects.projects-delete');
    }
}