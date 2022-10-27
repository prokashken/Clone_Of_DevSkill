{{-- <button class="btn btn-warning">Click After Delivered</button> --}}
<form action="{{ url("/adorder/deliver/$row->id") }}" method="POST"
    onsubmit="return confirm('Do you really want to delete the task?');">
    @csrf
    <input type="submit" name="" value="Click After Delivered" class="btn btn-warning">
</form>
