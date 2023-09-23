<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;


class NotesController extends Controller
{

    public function index()
    {
        $notes = Notes::all();
        return view('pages.notesAdmin.index' , ['notes'=>$notes]);
    }
    public function show()
    {
        $notes = Notes::all();
        return view('pages.Students.Notes' , ['notes'=>$notes]);
    }


    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notesForm = $request->all();
        Notes::create($notesForm);
        toastr()->success(trans('messages.success'));
        return redirect()->route('Notes.index');
    }

    public function destroy(Request $request)
    {
        
        
        $notes = Notes::findOrFail($request->id)->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Notes.index');
  
    }

}
