@extends('admin.app')
@section('dashboard')
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4>Form</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-box pd-20 height-100-p mb-30">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box pd-20 height-100-p mb-30">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="h4 text-blue mb-4">Add Services</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <h4 class="h4 text-blue mb-4">
                                <a href="{{ route('add.service') }}" class="btn btn-primary btn-sm scroll-click collapsed">Add</a>
                            </h4>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        @foreach($services as $key => $service)
                            <tbody>
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $service->service_title }}</td>
                                <td>{!! $service->service_description !!}</td>
                                <td>
                                    <a href="{{ route('admin.service.edit', $service->id) }}">
                                        <i class="micon dw dw-edit-1"></i>
                                    </a> |
                                    <form action="{{ route('admin.service.destroy', $service->id)}}" method="post">
                                        @csrf
                                        <button type="submit" class="micon dw dw-delete-3"></button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
