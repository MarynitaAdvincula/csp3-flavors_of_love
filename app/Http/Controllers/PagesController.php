<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Category;
use App\Post_type;
use App\Post;
use App\User;

class PagesController extends Controller
{
    /**
	* Front page
	*/
	public function getIndex() {
		
		$post_home = Post::join('users','posts.author_ID','users.id')->whereCategory_idAndPost_type('1','1')->get();
		$pages_home = Post::whereCategory_idAndPost_type('1','2')->get();
		return view('pages.index',compact('pages_home','post_home'));
	}

	/**
	* Show case page
	*/
	public function getFeatures() {
		return view('pages.features');
	}

	/**
	* Services page
	*/
	public function getServices() {
		return view('pages.services');
	}

	/**
	* Contact page
	*/
	public function getContact() {
		return view('pages.contact');
	}

   /**
   * New Post page
   */
    public function getNewPost(){
    	//get all Categories
    	$cats = Category::all();
    	$posts = Post_type::all();
    	return view('pages.new_post',compact('cats','posts'));
    }

    /**
   * Create new post page
   */
    public function postNewPost(Request $request){
    	// $cat = Category::where('id', $request->postCat )->first();
    	// $post_type = Post_type::where('id', $request->postType )->first();
    	$cats = Category::all();
    	$posts = Post_type::all();


    	$post_new = new Post();
    	$post_new->post_title = $request->postTitle;
    	$post_new->post_type = $request->postType;
    	$post_new->category_ID = $request->postCat;
        $post_new->travel_food = $request->travel_food === '1' ? true: false;
    	$post_new->author_ID = '2';

    	// $dateValue = date('YmdHis');
    	// Storage::disk('local')->put("/psts/pf" . $dateValue . ".html", $request->postContent);
    	// $post_new->post_content = "pf" . $dateValue . ".html";
    	$post_new->post_content = $request->postContent;
    	$post_new->save();

    	return view('pages.new_post',compact('cats','posts'));

    }

    /**
   * Edit post page
   */
    public function getEditPost(Request $request, $id){
        
        //get all Categories
        $cats = Category::all();
        $post_types = Post_type::all();
        $post = Post::find($id);
        return view('pages.edit_post',compact('cats','post_types','post'));

    }
}
