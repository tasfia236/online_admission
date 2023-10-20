@extends('admin.layouts.default')
@section('main')

<div>
    <h1 style="text-align:center">All Department</h1>
</div>
<div>
    <form action="{{ url('department/add') }}" method="post">
        @csrf
        <p> <b>
                <br>
                Session ::
                <input type="text" class="form-control-sm" name="session_name">
                <button type="submit" class="btn btn-sm btn-info">OK</button>
            </b></p>
    </form>
</div>
<div><br>@foreach($mxvalue as $m)
    <p><b>Session :: {{ $m->session }}
            @endforeach
        </b>
        @foreach($mxvalue as $m)
        @if($m->status==0)
        <a href="javascript:void(0)" id="status{{$m->id}}" title="off"
            onclick="status('{{$m->id}}','{{$m->status}}')"><button type="button"
                class="btn btn-sm btn-success">ON</button>
        </a>
        @else
        <!--     <a href="javascript:void(0)" id="status{{$m->id}}" title="on" onclick="status('{{$m->id}}','{{$m->status}}')"-->
        <button type="button" class="btn btn-sm btn-light">OFF</button>
        <!--/a-->
        @endif
        @endforeach
    </p>
</div>
<table class="table table-striped">
    <thead>
        <th><b>Department Name</b></th>
        <th><b>Department Code</b></th>
        <th><b>Established Date</b></th>
        <th><b>Session</b></th>
        <th colspan="2"><b>Action</b></th>
    </thead>
    <tbody>
        @foreach($departments as $d)
        <tr>
            <td>{{ $d->dept_name }}</td>
            <td>{{ $d->dept_code }}</td>
            <td>{{ $d->established_date }}</td>

            <td>
                @foreach($mxvalue as $s)
                @if($s->status==0)
                <p>{{ $s->session }} Session Admission Going On</p>
                @else

                <p>Admission Off</p>
                @endif
                @endforeach
            </td>

            <td>
                <a href="{{ url('department/edit/'.$d->id) }}" class="btn btn-secondary"> Edit<a>
                        <a href="{{ url('department/delete/'.$d->id) }}" class="btn btn-danger" data-toggle="modal"
                            data-target="#myModal{{ $d->id }}"> Delete<a>
                                <div class="modal" id="myModal{{ $d->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete <b>{{ $d->dept_name }}</b> ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close</button>
                                                <a href="{{ url('department/delete/'.$d->id) }}"
                                                    class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
function status(id, status) {

    var stp = document.getElementById('status' + id).title;
    alert(stp);

    if (stp == 'off') {
        stf = 1;
    }
    if (stp == 'on') {
        stf = 0;
    }
    $(document).ready(function() {
        $.ajax({
            url: "/department/status/" + id + "/" + stf,
            datatype: "json",
            type: 'GET',
            success: function(response) {
                if (response.status == "1") {
                    document.getElementById('status' + id).title = "on";
                    document.getElementById('status' + id).innerHTML =
                        '<button type="button" class = "btn btn-sm btn-warning" > OFF </button>';
                    //    '<img src="http://127.0.0.1:8000/assets/images/off.png" weight="30cm">';
                }
                if (response.status == "0") {
                    document.getElementById('status' + id).title = "off";
                    document.getElementById('status' + id).innerHTML =
                        '<button type="button" class = "btn btn-sm btn-success" > ON </button>';
                    //    '<img src="http://127.0.0.1:8000/assets/images/on.png" weight="30cm">';

                }
            }
        })
    })
}
</script>
@endsection