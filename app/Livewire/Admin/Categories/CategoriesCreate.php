<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesCreate extends Component
{
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,
        ]);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshCategoriesTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.categories.categories-create');
    }
}
