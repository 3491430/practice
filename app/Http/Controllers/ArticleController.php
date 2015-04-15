<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

	public function show(){
		$articles = \App\Article::all();
		return view('article.show', compact('articles'));
	}

}
