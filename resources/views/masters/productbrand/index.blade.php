@extends('layouts.app')
@section('title', 'Brand Master')

@section('css')
<link href="{{ URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">

@stop

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Brand Master</h3>
            </div>

            <div class="title_right">
                
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Brands</h2>  
                        <ul class="nav navbar-right panel_toolbox">
                            <li class="btn-link">
                            <button class="btn btn-dark"><i class="fa fa-plus-square"></i> Add New</button>
                               
                            </li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                    
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Short Code</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>


                            <tbody>
                                
                                @foreach($brands as $brandData)
                                <tr>
                                    <td>{{$brandData->name}}</td>
                                    <td>{{$brandData->shortcode}}</td>
                                    <td>{{$brandData->status}}</td>
                                    <td>{{$brandData->created_at}}</td>
                                    <td>{{$brandData->updated_at}}</td>
                                    <td><i class="fa fa-edit"></i></td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->

@stop

@section('scripts')
 
    
    <script src="{{ URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('build/js/custom.min.js')}}"></script>
@stop