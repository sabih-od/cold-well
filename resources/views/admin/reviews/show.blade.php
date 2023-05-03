@extends('admin.app')
@section('dashboard')
    <style>
        th{
            background-color: #f7f7f7;
        }
    </style>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Review</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Review Detail</h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <td colspan="4">{{$reviews->name ?? ''}}</td>
                                    </tr>
                                    {{--<tr>--}}
                                    {{--<th>Customer</th>--}}
                                    {{--<td colspan="4">{{$reviews->customer->first_name ??''}} {{$reviews->customer->last_name ??''}}</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <th>Email</th>
                                        <td colspan="4">{{$reviews->email ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Reviews</th>
                                        <td colspan="4">{{$reviews->review ?? ''}}</td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <th>Rating</th>--}}
{{--                                        <td>{{$reviews->rating ?? ''}}</td>--}}

{{--                                    </tr>--}}
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if($reviews->status == 1)
                                                <span class="badge badge-success">Enabled</span>
                                            @else
                                                <span class="badge badge-warning">Disabled</span>
                                            @endif
                                        </td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
@endsection
