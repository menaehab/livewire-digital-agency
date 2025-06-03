<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id)
    {
        $this->skill = Skill::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->skill->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshSkillsTable');
    }
    public function render()
    {
        return view('livewire.admin.skills.skills-delete');
    }
}