<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        //return 'List all the books';

    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($title) {
      return view('books.show')->with('title', $title);
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return 'Form to create a new book';
    }

    /**
     * Responds to requests to POST /books/create
     */

    public function postCreate(Request $request) {
        $this ->validate(
          ['title' => 'required|min:2',
          ]
        );
        return 'Processing book title' . 
    }
}
