@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add a Vehicle</h4>
                @if(isset($vehicle->id))
                    <form class="form p-t-20" enctype="multipart/form-data" action="{{ route('vehicles.update',['id'=>$vehicle]) }}" method="POST">
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$vehicle->id}}">
                @else
                    <form class="form p-t-20" enctype="multipart/form-data" action="{{ route('vehicles.store') }}" method="POST">
                @endif
                @csrf
                    <div class="form-group">
                        <label for="brand">Brand Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-motorcycle"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="YAMAHA"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->brand }}"
                                @endif
                            >
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
                            <input type="text" class="form-control" id="model" name="model" placeholder="FZ 2019"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->model }}"
                                @endif
                            >
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
                            <input type="text" class="form-control" id="engine" name="engine" placeholder="150CC"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->engine }}"
                                @endif
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="power">Max Power</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="power" name="power" placeholder="13.00 bhp @8000 rpm"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->power }}"
                                @endif
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="milage">Fuel Consumption</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="milage" name="milage" placeholder="45Kmpl"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->milage }}"
                                @endif
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="smec">Starting Mechanism</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="smec" name="smec" placeholder="Self Start"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->smec }}"
                                @endif
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ignition">Ignition</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="ignition" name="ignition" placeholder="Fuel Injection"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->ignition }}"
                                @endif
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="transmission">Transmission</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="mdi mdi-engine"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="transmission" name="transmission" placeholder="5 Speeds Manual "
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->transmission }}"
                                @endif
                            >
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
                            <input type="text" class="form-control" id="price" name="price" placeholder="249999"
                                @if(isset($vehicle->id))
                                    value="{{ $vehicle->price }}"
                                @endif
                            >
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
                            <textarea class="form-control" name="description" id="description" rows="10">@if(isset($vehicle->id)){{$vehicle->description}} @endif</textarea>
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