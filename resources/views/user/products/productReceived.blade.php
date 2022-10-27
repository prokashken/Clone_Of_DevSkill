@if (App\Enums\PaymentStatus::getKey($row->status) == "Delivered")
    <form action="{{ url("/order/receive/$row->id") }}" method="POST"
    onsubmit="return confirm('Do you really want to delete the task?');">
    @csrf
    <input type="submit" name="" value="Click After Received" class="btn btn-warning">
    </form>

@endif
