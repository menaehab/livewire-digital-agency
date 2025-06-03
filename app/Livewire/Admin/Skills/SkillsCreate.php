<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use App\Livewire\Admin\Skills\SkillsTable;

class SkillsCreate extends Component
{
    public $name;
    public $progress;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        Skill::create([
            'name' => $this->name,
            'progress' => $this->progress,
        ]);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshSkillsTable');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.skills.skills-create');
    }
}