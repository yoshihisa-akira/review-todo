<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $cats = $request->only(['name']);
        Category::create($cats);

        return redirect('/categories')->with('message', 'カテゴリを作成しました');
    }
}
