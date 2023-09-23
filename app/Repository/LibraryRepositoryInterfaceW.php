<?php

namespace App\Repository;

interface LibraryRepositoryInterfaceW
{
    public function index();

    public function create();

    public function store($request);

    public function edit($id);

    public function update($request);

    public function destroy($request);

    public function download($filename);
}
