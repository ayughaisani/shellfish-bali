@extends('admin.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mb-2 text-gray-800 h3">Booking</h1>

        <!-- DataTales Example -->
        <div class="mb-4 shadow card">
            <div class="py-3 card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Booking</h6>
                    </div>

                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Destination</th>
                                <th>Transportation</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item => $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->firstname }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->destination }}</td>
                                    <td>{{ $row->transportation }}</td>
                                    <td>
                                        <a href="{{ route('booking-detail', $row->id) }}" id="...."><button
                                                type="button" class="btn btn-warning"><i
                                                    class="bi bi-pencil-square"></i>Detail</button></a>
                                        <a href="{{ route('booking-delete', $row->id) }}" id="delete"
                                            data-confirm-delete="true"><button type="button"
                                                class="btn btn-danger delete"><i class="bi bi-trash"></i>Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
