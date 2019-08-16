@extends('layouts.app')

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
                @php($count=1)
                @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->slot }}</td>
                </tr>
                @php($count++)
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>
@endsection
