@extends('layouts.admin')

@section('content')

<h2>Add an Advertisement</h2>

@if(isset($ad->id))
<form method="POST" action="{{ route('ads.update',['id'=>$ad]) }}" enctype="multipart/form-data">
    @method('PUT')
    @else
    <form method="POST" action="{{ route('ads.store') }}" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <!-- <div class="form-group">
    <label for="company">Company Name</label>
    <input type="text" name="company" class="form-control" id="company" placeholder="Sri Lanka Insurance"
        @if(isset($ad->id))
            value="{{ $ad->company }}"
        @endif
    >
  </div>
  <div class="form-group">
    <label for="agent">Agent Name</label>
    <input type="text" name="agent" class="form-control" id="agent" placeholder="Mr. John Doe"
    @if(isset($ad->id))
            value="{{ $ad->agent }}"
        @endif
    >
  </div> -->
        <div class="form-group">
            <label for="tel">Contact No.</label>
            <input type="text" name="tel" class="form-control" id="tel" placeholder="071XXXXXXX" @if(isset($ad->id))
            value="{{ $ad->tel }}"
            @endif
            >
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(isset($ad->id))
    <form method="POST" action="{{ route('ads.destroy',['id'=>$ad]) }}" style="display: inline">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @endif

    @endsection
