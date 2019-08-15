@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <form action="{{ route('appointments.disabledates', ['id' => $configs['_id']]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <input class="form-control" type="date" name="disabled" id="disabled">

                
                    <input type="submit" value="submit" class="form-control">
                </form>
            </div>

            <div class="col-md-8">
                <ul class="list-group">
                    @foreach($configs['disabled'] as $key=>$date)
                        <li class="list-group-item">
                            {{ $date }}
                            <button class="btn btn-danger" type=""></button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection