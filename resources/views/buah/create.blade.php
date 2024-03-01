@extends('admin.parent')
@section('content')
    <div class="container">
        <div class="card bg-white ml-4 text-center mt-4 shadow-lg">
            <div class="card-header bg-cyan mt-4">
                <h3 class="card-title">Request Buah</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="card-body">
                    <div class="form-group mt-4 bg-cyan">
                        <label for="inputName" class="ml-4">Input Nama Buah</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Vehicle Name/Model"
                            name="name">
                    </div>
                    <div class="form-group mt-4 bg-cyan">
                        <label for="inputColor" class="ml-4">Input Warna Buah</label>
                        <input type="text" class="form-control" id="inputColor" placeholder="Vehicle Color"
                            name="color">
                    </div>
                    <div class="form-group mt-4 bg-cyan">
                        <label for="inputColor" class="ml-4">Input Gambar Buah</label>
                        <input type="text" class="form-control" id="inputColor" placeholder="Tire Amount"
                            name="tire_wheel">
                    </div>
                    <div class="form-group mt-4 bg-cyan">
                        <label for="inputMachine" class="ml-4">Input Nama Latin-nya</label>
                        <input type="text" class="form-control" id="inputMachine" placeholder="Machine Model/Type"
                            name="machine">
                    </div>
                    <div class="form-group mt-4 bg-cyan">
                        <label for="inputPrice" class="ml-4">Masukkan Harga</label>
                        <input type="text" class="form-control" id="inputPrice" placeholder="Vehicle Price"
                            name="price">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-dark">Create Vehicle</button>
                    <a href="{{ route('vehicle.index') }}" class="btn btn-outline-dark">Back To index</a>
                </div>
            </form>
        </div>
    </div>
@endsection
