<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    protected $listeners = ['skillUpdate'];
    public $skill;
    public $name;
    public $progress;
    public function skillUpdate($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->dispatch('showUpdateModal');
    }
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
        $this->skill->update([
            'name' => $this->name,
            'progress' => $this->progress,
        ]);
        $this->dispatch('hideUpdateModal');
        $this->dispatch('refreshSkillsTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.skills.skills-update');
    }
}