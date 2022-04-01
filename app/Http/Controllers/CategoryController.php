<?php
namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {   
        // $category = DB::table('category')->get();

        $category = Category::get();
        return view('category.index', ['category' => $category ]);
    }

    public function show($category_id)
    {   
        /*
        $category = DB::table('category')->where('id', $category_id)->first();
        
        if(!isset($category)){
            throw new ModelNotFoundException();
        }
        */
        $category = Category::findOrFail($category_id);
        return view('category.show', ['category' => $category, 'category_id' => $category_id ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryCreateRequest $request)
    {
        
        $name = $request->post('name');

        // DB::table('category')->insert(['name' => $name]);
        
        // 1-й метод:
        /*
        $category = new Category();
        $category->name = $name;
        $category->save();
        */
        //2-й метод:
        $category = $request->all();
        Category::create($category);
        return redirect()->route('category.index');
    }

    public function update(int $category_id)
    {   
        /*
        $category = DB::table('category')->where('id', $category_id)->first();

        if(!isset($category)){
            throw new ModelNotFoundException();
        }
        */
        $category = Category::findorFail($category_id);
        return view('category.update', ['category' => $category, 'category_id' => $category_id ]);
    }

    public function restore(CategoryCreateRequest $request, int $category_id)
    {
        $name=$request->post('name');
        // DB::table('category')->where('id', $category_id)->update(['name' => $name]);
        
        //1-й метод:
        /*
        $category = new Category();
        $category->name = $name;
        $category->save();
        */
        $category = $request->all('name');
        Category::where('id', $category_id)->update($category);
        return redirect()->route('category.index');
    }

    public function delete(int $category_id)
    {
        // DB::table('category')->where('id', $category_id)->delete();
        //1-й метод:
        /*
        $category = Category::findOrFail($category_id);
        $category->delete();*/
        Category::destroy($category_id);
        return redirect()->route('category.index');
    }
}