<?php
namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {   
        $category = DB::table('category')->get();
        return view('category.index', ['category' => $category ]);
    }

    public function show($category_id)
    {
        $category = DB::table('category')->where('id', $category_id)->first();
        
        if(!isset($category)){
            throw new ModelNotFoundException();
        }

        return view('category.show', ['category' => $category, 'category_id' => $category_id ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        $name = $request->post('name');

        DB::table('category')->insert(['name' => $name]);
        
        return redirect()->route('category.index');
    }

    public function update(int $category_id)
    {
        $category = DB::table('category')->where('id', $category_id)->first();

        if(!isset($category)){
            throw new ModelNotFoundException();
        }

        return view('category.update', ['category' => $category, 'category_id' => $category_id ]);
    }

    public function restore(CategoryCreateRequest $request, int $category_id)
    {
        $name=$request->post('name');
        DB::table('category')->where('id', $category_id)->update(['name' => $name]);
        return redirect()->route('category.index');
    }

    public function delete(int $category_id)
    {
        DB::table('category')->where('id', $category_id)->delete();
        return redirect()->route('category.index');
    }
}