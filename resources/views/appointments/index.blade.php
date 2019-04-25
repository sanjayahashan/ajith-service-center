@extends('layouts.admin')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-6">
  <input type="date" name="date" id="date">
  </div>

  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Timeslot</th>
          <th scope="col">Customer</th>
          <th scope="col">Customer Email</th>
        </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
  </div>
</div>
</div>


@endsection

@section('scripts')

<script>
  function daysInMonth (month, year) { // Use 1 for January, 2 for February, etc.
    return new Date(year, month, 0).getDate();
  }

  function populateDays() {
    $("#day").empty();
    var year = $("#year").val();
    var month = $("#month").val();
    var days = daysInMonth(month, year);
    for(var i=1; i<=days; i++) {
      var opt = new Option(i, i);
      var dt = new Date();
      if(i==dt.getDate() && dt.getFullYear()==year && dt.getMonth()+1==month) {
        opt.setAttribute('selected', true);
      }
      $("#day").append(opt);
    }
  }

  function displayTimeSlots() {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '{{ route('appointments.times') }}',
      type: 'post',
      data: {
          date: $('#date').val(),
      },
      success: function(data) {
        console.log(data);
        data.forEach(function(value) {
          $('#tbody').append('<tr><td>' + value.appointment.time + '</td><td>' + value.appointment.user.name + '</td><td>' + value.appointment.user.email + '</td></tr>');
        });
      }
    });
  }

  $(document).ready(function() {
    populateDays();

    $("#year").change(function() {
      populateDays();
    });

    $("#month").change(function() {
      populateDays();
    });

    $('#date').change(function() {
      displayTimeSlots();
    })
  });
</script>

@endsection