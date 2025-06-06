<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshCategoriesTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.categories.categories-table', compact('categories'));
    }
}
