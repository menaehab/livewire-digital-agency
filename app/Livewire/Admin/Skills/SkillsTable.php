<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshSkillsTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $skills = Skill::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.skills.skills-table',compact('skills'));
    }
}
