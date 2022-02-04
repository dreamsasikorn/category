<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\IndexCategoryResource;
use GrahamCampbell\ResultType\Success;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        // return view('categories', compact('categories'));
        return [
            'categories' => IndexCategoryResource::collection($categories)
        ];
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

    public function show(Request $request)
    {
        $id = $request->id;
        $data = Category::where('id', $id)->first();
        // return CategoryResource::collection($data);
        return new CategoryResource($data);
        // return $id;
    }
}
