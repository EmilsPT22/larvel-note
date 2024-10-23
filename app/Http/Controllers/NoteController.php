<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $posts = Note::all();
        return viwe('note.index', ['allNotes' => $notes]);
    }
}
