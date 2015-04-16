<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class ArticleController extends Controller {

	public function index(){
		$articles = \App\Article::all();
		return view('article.index', compact('articles'));
	}

	public function show($id){
		$article = \App\Article::findOrFail($id);
		//dd($article);
		return view('article.show', compact('article'));
	}

	public function create(){
		return view('article.create');
	}

}
