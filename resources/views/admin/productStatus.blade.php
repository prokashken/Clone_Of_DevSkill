@if (App\Enums\PaymentStatus::getKey($row->status) == "Pending")
    <button class="btn btn-danger btn-sm">{{ App\Enums\PaymentStatus::getKey($row->status) }}</button>
@endif

@if (App\Enums\PaymentStatus::getKey($row->status) == "Delivered")
    <button class="btn btn-primary">{{ App\Enums\PaymentStatus::getKey($row->status) }}</button>
@endif

@if (App\Enums\PaymentStatus::getKey($row->status) == "Received")
    <button class="btn btn-success">{{ App\Enums\PaymentStatus::getKey($row->status) }}</button>
@endif
    

