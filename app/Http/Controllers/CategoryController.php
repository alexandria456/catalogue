<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::defaultOrder()->get()->linkNodes();// получение всего дерева со всеми связями
        $descendants = Category::descendantsOf(1); //получение всех потомков по id родителя(без самого родителя)



        return view('categories.index', compact('categories'));
    }

    public function show()
    {
        //получение плоского списка
        $categories = Category::all()->toFlatTree();
        return view('categories.show', compact('categories'));
    }

}
