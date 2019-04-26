@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add a Vehicle</h4>
                <form class="form p-t-20" enctype="multipart/form-data" action="{{ route('vehicles.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="brand">Brand Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-motorcycle"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="YAMAHA">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="model">Model Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-email"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="model" name="model" placeholder="FZ 2019">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="engine">Engine Capacity</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="engine" name="engine" placeholder="150CC">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="price" name="price" placeholder="249999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                <i class="mdi mdi-library-books"></i>
                                </span>
                            </div>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="custom-file">
                            <input type="file" accept="image/" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label form-control" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection