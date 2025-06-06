<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $link;
    public $image;
    public $category_id;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $project = Project::create([
            'name' => $this->name,
            'description' => $this->description,
            'link' => $this->link,
            'category_id' => $this->category_id,
        ]);
        if ($this->image) {
            $imageName = now()->timestamp . '-' . $this->image->getClientOriginalName();
            $this->image->storeAs('projects', $imageName);
            $project->image = $imageName;
            $project->save();
        }
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshProjectsTable');
        $this->reset();
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.projects.projects-create', compact('categories'));
    }
}
