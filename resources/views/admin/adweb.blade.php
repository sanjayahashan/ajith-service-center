@extends('layouts.admin')

@section('content')

<div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">324</h2>
                                    <h6 class="text-muted">New Clients</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">2376</h2>
                                    <h6 class="text-muted">Total Visits</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">1795</h2>
                                    <h6 class="text-muted">New Leads</h6></div>
                                <!-- Column -->
                                <div class="col text-right ">
                                    <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">36870</h2>
                                    <h6 class="text-muted">Page Views</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div class="card">
    <div class="card-body">
        <h4>Disable Appointment Dates</h4>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('appointments.disabledates', ['id' => $configs['_id']]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <input class="form-control" name="disabled" id="date" placeholder="Select Date">
                
                    <input class="btn btn-primary" type="submit" value="submit">
                </form>
            </div>

            <div class="col-md-6">
            <h5>Currently disabled dates</h4>
                <ul class="list-group">
                    @foreach($configs['disabled'] as $key=>$date)
                        <li class="list-group-item">
                            {{ $date }}
                            <a href="{{ route('appointments.deletedisabled', ['id'=>$configs['_id'], 'date'=>$date]) }}" class="btn btn-danger float-right">Enable</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3>Service Slots</h3>
        <form action="{{ route('admin.update', $configs) }}" method="post">
        @method('PUT')
        @csrf
        <input type="number" name="slots" id="slots" value="{{ $configs['slots'] }}" min="1" max="9">
        <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>

function disableDates() {
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: '{{ route('appointments.disableddates') }}',
                type: 'post',
                data: {
                },
                success: function (data) {
                    var array = data;

                jQuery('#date').datepicker({
                    dateFormat: "yy-mm-dd",
                    minDate: 1,

                    beforeShowDay: function(date){
                        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                        return [ array.indexOf(string) == -1 ]
                    }
            });
                    console.log(data);
                },
                complete: function () {

                }
            });
        }

        jQuery(document).ready(function() {
            disableDates();
        });

</script>

@endsection