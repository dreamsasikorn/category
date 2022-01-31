<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\IndexCategoryResource;
use GrahamCampbell\ResultType\Success;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function store(Request $request)
    {
        if ($request) {
            $addCategory = new Category();
            $addCategory->name = $request->name;
            $addCategory->save();
            return redirect()->route('index_categories');
        }
    }
}
