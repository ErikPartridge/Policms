<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('cleancampaign.posts', ['posts' => Post::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cleancampaign.create-post');
	}

	public function showPostCreate(){
		if(! Auth::check()){
			return Redirect::to('/auth/login');
		}
		return view('cleancampaign.create-post');
	}

	public function createPost(Request $request){
		if(! Auth::check()){
			return Redirect::to('/auth/login');
		}
		$post = new Post(array(
			'title' => str_replace("style=text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;","", $request->input('title')),
			'content' => $request->input('content'),
			'author' => Auth::user()->id));
		$post->slug = Str::slug($post->title);
		$post->save();
		return Redirect::to('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('cleancampaign.post', ['post' => Post::where('slug', '=', $id)->firstOrFail(), 'posts' => Post::all()]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::user()->isAdmin()){
			return view('edit_post', Post::get($id));
		}else{
			return Redirect::to('/users/login');
		}

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(Auth::user()->isAdmin()){
			//Get the input passed to the function
			$input = Input::all();
			//Post to edit
			$post = Post::get($id);

			//Change the content, title can't be changed because encoded in url
			$post->content = $input['content'];
			$post->save();
			//Tell it was a success
			Session::flash('updated', true);
			return view('edit_post', Post::get($id));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
