<?php
namespace App\Http\Controllers\Students;

use App\Repository\LibraryRepositoryInterfaceW;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class libraryWEb extends Controller
{
 
    protected $libraryW;

    public function __construct(LibraryRepositoryInterfaceW $libraryW)
    {
        $this->libraryW = $libraryW;
    }

    public function index()
    {
      return $this->libraryW->index();
    }

    public function create()
    {
        return $this->libraryW->create();
    }

    public function store(Request $request)
    {
        return $this->libraryW->store($request);
    }

    public function edit($id)
    {
        return $this->libraryW->edit($id);
    }


    public function update(Request $request)
    {
        return $this->libraryW->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->libraryW->destroy($request);
    }

    public function downloadAttachmentW($filename)
    {
        return $this->libraryW->download($filename);
    }
}
