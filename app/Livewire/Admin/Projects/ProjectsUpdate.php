<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ProjectsUpdate extends Component
{
    use WithFileUploads;

    protected $listeners = ['projectUpdate'];
    public $project;
    public $name;
    public $link;
    public $image;
    public $description;
    public $category_id;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
        // Initialize the project property to avoid undefined property errors
        $this->project = new Project();
    }

    public function projectUpdate($id)
    {
        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;
        $this->dispatch('showUpdateModal');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
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
        $data = [
            'name' => $this->name,
            'link' => $this->link,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ];

        if ($this->image) {
            // Delete old image if exists
            if ($this->project->image) {
                \Storage::delete('public/projects/' . $this->project->image);
            }
            // Store new image
            $imageName = time() . '.' . $this->image->extension();
            $this->image->storeAs('public/projects', $imageName);
            $data['image'] = $imageName;
        }

        $this->project->update($data);

        $this->dispatch('hideUpdateModal');
        $this->dispatch('refreshProjectsTable');
        $this->reset(['name', 'link', 'description', 'category_id', 'image']);
        $this->resetValidation();

        // Reset the file input
        $this->reset('image');
    }

    public function render()
    {
        return view('livewire.admin.projects.projects-update', [
            'categories' => Category::all()
        ]);
    }
}
