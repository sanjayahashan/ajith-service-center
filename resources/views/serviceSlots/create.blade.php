@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add a Servic$serviceSlot</h4>
                @if(isset($serviceSlot->id))
                    <form class="form p-t-20" enctype="multipart/form-data" action="{{ route('serviceslots.update',['id'=>$serviceSlot]) }}" method="POST">
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$serviceSlot->id}}">
                @else
                    <form class="form p-t-20" enctype="multipart/form-data" action="{{ route('serviceslots.store') }}" method="POST">
                @endif
                @csrf
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-motorcycle"></i>
                                </span>
                            </div>
                            <select class="form-control" id="branch" name="branch" >
                                @if(isset($serviceSlot->id))
                                    value="{{ $serviceSlot->branch }}"
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="slots">Number of slots</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ti-email"></i>
                                </span>
                            </div>
                            <input type="number" class="form-control" id="slots" name="slots" placeholder="FZ 2019"
                                @if(isset($serviceSlot->id))
                                    value="{{ $serviceSlot->slots }}"
                                @endif
                            >
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