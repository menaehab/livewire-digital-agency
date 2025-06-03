<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    protected $listeners = ['skillShow'];
    public $skill;
    public $name;
    public $progress;
    public function skillShow($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('livewire.admin.skills.skills-show');
    }
}