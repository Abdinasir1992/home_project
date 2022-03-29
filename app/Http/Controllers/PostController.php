<?php
namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::select('select * from posts');
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(int $post_id)
    {
        $post = DB::select('select * from posts where id = :id', ['id' => $post_id]);
        if(count($post) === 0) {
            throw new NotFound();
        }
        return view('posts.show', ['post' => $post[0]]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostCreateRequest $request)
    {
        $title = $request->post('title');
        $text = $request->post('text');

        DB::insert('insert into posts (title, text) value (:title, :text)', ['title' => $title, 'text' => $text]);
        return redirect()->route('posts.index');
    }

    public function update(int $post_id)
    {
        $post = DB::select('select * from posts where id = :id', ['id' => $post_id]);
        if(count($post) === 0) {
            throw new NotFound();
        }
        return view('posts.update', ['post' => $post[0], 'post_id' => $post_id]);
    }

    public function restore(PostCreateRequest $request, int $post_id)
    {
        $title = $request->post('title');
        $text = $request->post('text');

        DB::insert('update posts set title = :title, text = :text where id = :id', ['title' => $title, 'text' => $text, 'id' => $post_id]);
        return redirect()->route('posts.index');
    }

    public function delete(int $post_id)
    {
        DB::delete('delete from posts where id = :id', ['id' => $post_id]);

        return redirect()->route('posts.index');
    }
    
}


?>