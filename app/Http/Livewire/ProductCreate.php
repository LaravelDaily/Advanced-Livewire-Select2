<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $categories = [];
    public $product = [
        'name' => '',
        'categories' => []
    ];

    protected $rules = [
        'product.name' => 'required|min:3',
        'product.categories' => 'array',
        'product.categories.*' => 'required|integer',
    ];

    public $designTemplate = 'tailwind';

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.product-create');
    }

    public function submitForm()
    {
        $this->validate();

        $product = Product::create($this->product);
        $product->categories()->sync($this->product['categories']);

        $this->reset('product');
        $this->emit('setCategoriesSelect', []);

        session()->flash('message', 'Product successfully created!');
    }
}
