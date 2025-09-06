<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Home Page - DCodeMania")]



class HomePage extends Component
{
    public function render()
    {

        $brands = Brand::where("is_active", 1)->get();
        // dd($brand);     {To display the json type database data of "BRAND"}

        $categories = Category::where("is_active", 1)->get();
        // dd($categories);

        return view('livewire.home-page', [
            "brands" => $brands,
            "categories" => $categories,
        ]);
    }
}
