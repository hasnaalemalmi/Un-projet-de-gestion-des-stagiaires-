@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{ trans('Grades_trans.Notes') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{ trans('Grades_trans.Notes') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<p class="alert-warning  text-center" >{{trans('Students_trans.info8')}}  </p>

<div class="row">

<h2></h2>
<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

    

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                    <tr>
                            <th>#</th>
                            <th >{{ trans('Grades_trans.Notes') }}</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($notes as $note)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <th>{{ $note->title }}</th>
                         
                        
                            </tr>

  
                            @endforeach
                </table>
            </div>
        </div>
    </div>
</div>



</div>

<!-- row closed -->

@endsection
