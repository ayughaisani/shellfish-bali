@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h3 mb-0 text-gray-800">List Transportation</h1>
                    <a href="{{ route('add-transportation') }}"><button type="button" class="btn btn-outline-primary"><i
                                class="bi bi-plus-circle"></i> Add </button></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name_transportation</th>
                            <th scope="col">Price</th>
                            <th scope="col">details_description</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item => $row)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                
                                <td>{{$row->name_transportation}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->details_description}}</td>
                                
                                    <!--<a href="{{ route('detail-transportation',$row->id) }}"><button type="button"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</button></a>
                                    <a id="delete"  href="{{ route('destroy-transportation',$row->id) }}" type="button" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>-->
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
