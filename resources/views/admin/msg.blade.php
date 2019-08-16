@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-body">
      <div class="row">
          

          <div class="col-md-8">
          <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Title</th>
          <th scope="col">Phone</th>
          <th scope="col">Message</th>
        </tr>
      </thead>
      <tbody id="tbody">
          @foreach($messages as $msg)
          <tr>
              <td> {{$msg->name}} </td>
              <td> {{$msg->email}} </td>
              <td> {{$msg->subject}} </td>
              <td> {{$msg->phone}} </td>
              <td> {{$msg->mes}} </td>
          </tr>
         @endforeach
      </tbody>
    </table>
          </div>
      </div>
  </div>
</div>
@endsection