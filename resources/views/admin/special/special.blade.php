@extends('admin.master')

@section('content')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="h3 mb-0 text-gray-800">List Special Offers</h1>
              <a href="{{ route('add-specialoffers') }}"><button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i> Add </button></a>
            </div>
          </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">City_id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Promo</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($data as $item =>$row)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $row->city_id }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->lokasi }}</td>
                            <td>{{ $row->keterangan }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->promo }}</td>
                           
                            <td>
                        
                        <td><img src="{{asset('storage/'.$row->picture)}}" width="100px" alt=""></td>
                        <!--<td>
                            <a href="{{ route('edit-specialoffers',$row->id) }}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Detail</button></a>
                            <a id="delete" type="button" href="{{route('destroy-specialoffers',$row->id)}}" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                        </td>-->
                        @endforeach
                       
                      </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
@endsection