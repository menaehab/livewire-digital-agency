<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesUpdate extends Component
{

    protected $listeners = ['categoryUpdate'];
    public $category;
    public $name;
    public function categoryUpdate($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
        $this->dispatch('showUpdateModal');
    }
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
        $this->category->update([
            'name' => $this->name,
        ]);
        $this->dispatch('hideUpdateModal');
        $this->dispatch('refreshCategoriesTable');
        $this->reset();
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.categories.categories-update', compact('categories'));
    }
}
