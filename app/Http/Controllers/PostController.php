<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('posts.index')->with([
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    public function store(StorePostRequest $request)
    {
        if ($request->hasFile('photo')) {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }
        $post = Post::create([
            'user_id' => 1,
            'category_id' => $request->get('category_id'),
            'title' => $request -> get('title'),
            'short_content' => $request -> get('short_content'),
            'contents' => $request -> get('contents'),
            'photo' => $path ?? null
        ]);
        if(isset($request->tags)) {
            foreach ($request->tags as $tag) {
                $post->tags()->attach($tag);
            }
        }
//        if(isset($request->tags)) {
//            if (is_array($request->tags)) {
//                foreach ($request->tags as $tag) {
//                    $post->tag()->attach($tag);
//                }
//            } else {
//                $post->tag()->attach($request->tags);
//            }
//        }
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(3),
            'tags' => Tag::all(),
            'categories' => Category::all(),
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(StorePostRequest $request, Post $post)
    {
        if ($request->hasFile('photo')) {
            if (isset($post->photo)) {
                Storage::delete($post->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post-photos', $name);
        }

        $post->update([
            'title' => $request -> title,
            'short_content' => $request -> short_content,
            'contents' => $request -> contents,
            'photo' => $path ?? $post->photo
        ]);
        return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    public function destroy(Post $post)
    {
        if (isset($post->photo)) {
            Storage::delete($post->photo);
        }

        $post->delete();
        return redirect()->route('posts.index');
    }
}
