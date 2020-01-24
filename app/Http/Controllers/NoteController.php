<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function show()
    {
        return Note::all();
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $note = Note::create([
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'note' => $data['note'],
        ]);
        return $note;
    }

    public function edit(Request $request)
    {
        $data = $request->all();

        $note = Note::findOrfail($data['id']);
        $note->update([
            'category_id' => $data['category_id'],
            'title' => $data['title'],
            'note' => $data['note'],
        ]);
        return $note;

    }

    public function delete(Request $request)
    {
        $data = $request->all();

        $note = Note::findOrfail($data['id']);
        $note->delete();

        return $note;
    }
}
