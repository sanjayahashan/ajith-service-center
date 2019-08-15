@extends('layouts.admin')

@section('content')


<div class="card">
  <div class="card-body">
      <div class="row">
          
          <div class="col-md-4">
          <input type="date" name="date" id="date" class="form-control bootstrapMaterialDatePicker">
          </div>

          <div class="col-md-8">
          <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Timeslot</th>
          <th scope="col">Customer</th>
          <th scope="col">Customer Email</th>
          <th scope="col">Customer Phone</th>
          <th scope="col">Service Slot No.</th>
        </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
          </div>
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
          $('#tbody').append('<tr><td>' + value.appointment.time + '</td><td>' + 
            value.appointment.user.name + '</td><td>' + 
            value.appointment.user.email + '</td><td>' + 
            value.appointment.user.phone + '</td><td>' + 
            value.appointment.slot + '</td>'
          );

          var refundRow = jQuery('<a></a>', {
            "class": "btn btn-warning",
            "href": "appointments/refund/" + value.appointment._id,
            "html": "Refund",
            // "onClick": alert("Are you sure to refund" + value.appointment.user.name)
          })
          var r = jQuery('<td></td>').html(refundRow);
          jQuery('#tbody').append(r);
          jQuery('#tbody').append('</tr>');
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
      $('#tbody').html('');
      displayTimeSlots();
    })
  });
</script>

@endsection