<?php

namespace App\Repository;

use App\Http\Traits\AttachFilesTrait;
use App\Models\Grade;
use App\Models\Library;

class LibraryRepositoryW implements LibraryRepositoryInterfaceW
{

    use AttachFilesTrait;

    public function index()
    {
        $bookW = Library::all();
        return view('pages.Students.library.library',compact('bookW'));
    }

    public function create()
    {
        $gradeW = Grade::all();
        return view('pages.Students.library.create' ,compact('gradeW'));
    }

    public function store($request)
    {
        try {
            $books = new Library();
            $books->title = $request->title;
            $books->file_name =  $request->file('file_name')->getClientOriginalName();
            $books->Grade_id = $request->Grade_id;
            $books->classroom_id = $request->Classroom_id;
            $books->section_id = $request->section_id;
            $books->teacher_id = 2;
            $books->save();
            $this->uploadFile($request,'file_name');

            toastr()->success(trans('messages.success'));
            return redirect()->route('libraryW.create');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
       
    }

    public function update($request)
    {
     
           
    }

    public function destroy(  $request)
    {
        $this->deleteFile($request->file_name);
        library::destroy($request->id);
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('libraryW.index');
        return $this->library->destroy($request);
    }

    public function download($filename)
    {
        return response()->download(public_path('attachments/library/'.$filename));
    }
}
