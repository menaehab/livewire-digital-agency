<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class CategoriesDelete extends Component
{
    public $category;
    protected $listeners = ['categoryDelete'];
    public function categoryDelete($id)
    {
        $this->category = Category::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->category->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshCategoriesTable');
    }
    public function render()
    {
        return view('livewire.admin.categories.categories-delete');
    }
}