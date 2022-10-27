<a href="{{ url("/Adfaq/$row->id/edit") }}" class="btn btn-primary">Edit</a>
<form action="{{ url("/Adfaq/$row->id") }}" method="POST"
    onsubmit="return confirm('Do you really want to delete the task?');">
    @csrf
    @method("delete")
    <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm">
</form>
