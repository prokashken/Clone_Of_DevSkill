<form action="{{ url("/Dev/$row->id") }}" method="POST">
    @csrf
    <input type="submit" name="" value="Get Coin" class="btn btn-success btn-sm">
</form>
