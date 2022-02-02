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
        /* Creating a view called categories.blade.php and passing in the categories variable. */
        /* This code is retrieving all the categories from the database and storing them in the
         variable. */
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function store(Request $request)
    {
        /* We create a new Category object, and set the name property to the value of the name input
        field. Then we save the new Category object to the database. */
        if ($request) {
            $addCategory = new Category();
            $addCategory->name = $request->name;
            $addCategory->save();
            return redirect()->route('index_categories');
        }
    }
}
