<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->paginate(5);
        return view('categories.index',compact('category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);

        Category::create($request->all());
        return redirect('categories')
        ->with('success','Category created successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('categories')
        ->with('success','Category deleted successfully');
    }

    public function show(Category $category)
    {
        return view('categories.show',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);

        $category->update($request->all());
        return redirect('categories')
        ->with('success','Category updated successfully');
    }
}
