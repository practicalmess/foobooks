<?php

namespace Foobooks\Http\Controllers;

use Foobooks\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class BookController extends Controller {
	public function __construct() {
		//
	}

	public function getIndex() {
		return 'List all the books';
	}

	public function bar() {
		return 'You landed on bar';
	}

	//Responds to requests to GET /books/show/{id}

	public function getShow($name = null) {
		//return 'Show book: ' .$title;
		return view('books.show')->with('title', $name); //must pass variable 'title'
	}

	//Responds to requests to GET /books/create

	public function getCreate() {
		return view('books.create');
	}

	//Responds to requests to POST /books/create

	public function postCreate(Request $request) { //Creating variable called '$request' of type 'Request'
		//Code here to add book to database

		$this->validate(
			$request, 
			['title'=>'required|min:2']
			);


		return 'Process adding new book '.$request->input('title');
	}
}

?>