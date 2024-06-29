@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <form id="validate" action="{{route('store-specialoffers')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="card">
                <div class="card-header">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between ">
                        <h1 class="h3 mb-0 text-gray-800">Add Special Offers</h1>
                    </div>
                </div>

                <div class="card-body">
                
                <div class="mb-3">
                        <select class="form-select form-control" name="city_id" aria-label="Default select example">
                            <option value="">Select City</option>
                            <option value="1">Bali</option>
                            <option value="2">Banyuwangi</option>
                             
                        </select>

                    </div>
                            <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="title">
                        </div>
                        
                            <div class="mb-3">
                            <label for="title" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" id="title">
                        </div>
                       
                        <div class="mb-3">
                            <label for="detailsDescription" class="form-label">Keterangan</label>
                            <textarea class="form-control"  name="keterangan" id="name_specialoffer" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Promo</label>
                            <input type="text" class="form-control" name="promo" id="promo">
                        </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4 mb-4">Save</button>
                </div>
        </form>
    </div>
@endsection
