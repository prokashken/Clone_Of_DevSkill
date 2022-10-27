@if ($row->status == "Pending")
    <button type='button' class='btn btn-danger'>{{$row->status}}</button>
@else
    <button type='button' class='btn btn-success'>{{$row->status}}</button>
@endif
