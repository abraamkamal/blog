<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
	public function index(){
		$posts = Post::latest()->get();
		return view('posts.posts',compact('posts'));
	}
	public function show(Post $post){
		
		return view('posts.show',compact('post'));
	}
	public function create(){
		return view('posts.create');
	}
	public function store(){
		$this->validate(request(),[
			'title' => 'required',
			'body' => 'required'
			]);
			// Create a post using the request data
			//$post = new Post;
			//$post->title = request('title');
			//$post->body = request('body');
			Post::create(request(['title','body']));
			// Save it to the database
			//$post->save();
			// And then redirect to the home page
			return redirect('/'); 
		}
	}