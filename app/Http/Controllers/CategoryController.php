<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     public function index()
     {
         $categories = Category::all();
     return view('categories.index', compact('categories'));
     }
     public function create()
 {
     $category = new Category;
     return view('categories.create-category', compact('category'));
 }
 
 
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required|max:255',
         ]);
 
         $category = new Category;
         $category->name = $validatedData['name'];
         $category->save();
 
         return redirect('categories')->with('success', 'Category created successfully!');
     }
 }