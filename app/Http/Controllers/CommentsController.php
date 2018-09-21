<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CommentsController extends Controller {

    public function store($id)
    {
        dd('Store comment for ticket: ' . $id);
	}

}
