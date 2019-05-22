@extends('layouts.admin')

@section('content')

<table>
<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Current Ads</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Contact No.</th>
                                                <!-- <th>Remaining Time</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ads as $ad)
                                            <tr>
                                                <td>{{ $ad->description }}</td>
                                                <td>{{ $ad->tel }}</td>
                                               <td>
                                                    <a href="{{route('ads.edit', ['id'=>$ad])}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</table>

@endsection