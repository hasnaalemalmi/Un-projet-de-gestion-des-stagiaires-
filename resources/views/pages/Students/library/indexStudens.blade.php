@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الكتب
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة الكتب
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                          
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> {{ trans('Students_trans.nomBook') }}  </th>
                                            <th>{{ trans('Students_trans.nomTeacher') }}  </th>
                                            <th> {{trans('Students_trans.Grade')}}</th>
                                            <th> {{trans('Students_trans.classrooms')}}</th>
                                            <th>{{trans('Students_trans.section')}}</th>
                                            <th>{{ trans('My_Classes_trans.Processes') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bookS as $boos)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$boos->title}}</td>
                                                <td>{{$boos->teacher->Name}}</td>
                                                <td>{{$boos->grade->Name}}</td>
                                                <td>{{$boos->classroom->Name_Class}}</td>
                                                <td>{{$boos->section->Name_Section}}</td>
                                                <td>
                                                <a href="{{route('downloadAttachmentS',$boos->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>

                                                </td>
                                            </tr>

                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
