<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
class NotesController extends Controller
{
	public function store(Request $request, Card $card){

		$note = new Note;
		$note->body = $request->body;
		$card->notes()->save($note);

		//Other method
		//$note = new Note(['body' => $request->body]);
		//$card->notes()->save($note);

		//$card->notes()->create([
		//	'body' => $request->body;
		//	]);


		return back();

	}
}
