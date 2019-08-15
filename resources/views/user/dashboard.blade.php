@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Service Slot</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->slot }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection
