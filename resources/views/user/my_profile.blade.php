@extends('user.layouts.app')
@section('content')
    <!-- Main content -->
<div class="content">
    <div class="bg-light mx-n3">
        <div class="container">
            <div class="row justify-content-center flex-column">
                <div class="col">
                    
<div class="card mt-12 rounded-0">
    <div class="card-body">
        <div class="d-sm-flex justify-content-center">
            <img src="{{asset("storage/".Auth::user()->image_path)}}"
                 width="96"
                 class="mt-sm-n9 my-2 rounded-circle"
                 alt="" />
        </div>
        <div class="d-sm-flex justify-content-between">
            <div>
                <h2>{{ Auth::user()->name != null ? Auth::user()->name:""}}</h2>
                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a href="tel:"></a>
                        <span class="text-muted">⸽</span>
                        <a href="mailto:prokashbiswas35@gmail.com">{{ Auth::user()->email }}</a>
                    </li>

                        <li class="mb-1">
                            {{Auth::user()->company != null ? Auth::user()->company:""}}
                        </li>


                </ul>


            </div>
            <div class="text-sm-right">
                <form action="{{url("/userprofileedit/".Auth::id())}}" method="post">
                    @csrf
                    <div class="d-none d-sm-flex justify-content-end mb-2">
                        {{-- <a class="btn btn-outline-primary" outline href="{{url("/userprofileedit/".Auth::id())}}">
                            <i class="fas fa-edit"></i>
                            Edit Profile
                        </a> --}}
                        <button class="btn btn-primary " type="submit">Edit Profile</button>
                        
                    </div>
                </form>
                
                <p class="h2">
                     @if (Auth::user()->devcoin)
                        
                        <img src="/site/img/ic_devcoin.svg" class="d-inline-block mr-1" width="40" alt="DevCoins" />
                        {{Auth::user()->devcoin->coin}}
                        
                        @else
                               <img src="/site/img/ic_devcoin.svg" class="d-inline-block mr-1" width="40" alt="DevCoins" />
                                0
                        @endif
                    
                </p>
                <p class="text-nowrap">
                    Referral Code:
                    <span class="font-weight-bold">{{Auth::user()->ref_own}}</span>
                    <nb-icon alt="Copy Referral Code"
                             class="ml-2 text-light"
                             icon="copy-outline"></nb-icon>
                </p>
            </div>
        </div>
      <br />
        <div>
                <p class="subtitle-2 mb-0">Linked Account</p>
                <p>
                    Signed Up Using Email.
                    <b>{{ Auth::user()->email }}</b>
                </p>
        </div>
      
    </div>
</div>
                    
<div id="sectionBankAndMobileMoney" class="card my-5 rounded-0">
    <div class="align-items-center bg-white border-bottom border-light d-sm-flex justify-content-between px-3 py-3">
        <h3 class="mb-sm-0">
            Bank & Mobile Money Accounts
        </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Account Type</th>
                        <th>Account Number</th>
                        <th>Details</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Bank Account</td>
                            <td> <span class="text-muted">-</span> </td>
                            <td> <span class="text-muted">-</span> </td>
                            <td><a class="btn btn-outline-primary" href="/Member/PaymentMethod/AddBankAccount">Add</a></td>
                    </tr>
                    <tr>
                        <td scope="row">bKash</td>
                            <td> <span class="text-muted">-</span> </td>
                            <td> <span class="text-muted">-</span> </td>
                            <td><a class="btn btn-outline-primary" href="/Member/PaymentMethod/AddBkashAccount">Add</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
                    
<div class="card my-5 rounded-0">
    <div class="align-items-center bg-white border-bottom border-light d-sm-flex justify-content-between px-3 py-3">
        <h3 class="mb-sm-0">
            Payments to Dev Skill
        </h3>
        <button class="btn btn-outline-primary" size="small">
            Make a Payment
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
             <table id="paymenthistory" class="table table-bordered" style="width:100%">
                <thead style="background-color: #e7e6f0; color: #696969">
                    <tr>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
                    
<div class="card my-5 rounded-0">
    <div class="align-items-center bg-white border-bottom border-light d-sm-flex justify-content-between px-3 py-3">
        <div>
            <h3>
                Shopping
            </h3>
            <h5 class="mb-sm-0">
                You have
                @if (Auth::user()->devcoin) 
                <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20px" alt="DevCoins" />
                    {{Auth::user()->devcoin->coin}} DevCoins
                @else
                    <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20px" alt="DevCoins" />
                      0 DevCoins
                @endif
            </h5>
        </div>
        <div>
            <a class="btn btn-outline-primary" size="small" href="/member/shop">
                Visit Shop
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="devshopOderTable" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <td>{{ $order->created_at }}</td>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->product->price }}</td>
                    <td>{{ $order->status }}</td> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection
 
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> --}}
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#devshopOderTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/Shop/list',
            columns: [                
                {
                    data: 'created_at'
                },
                {
                    data: 'product_name'
                },
                {
                    data: 'product_price'
                },
                {
                    data: 'product_status'
                },
                 {
                    data: 'product_received'
                }
                // {
                //     data: 'status_name',
                //     name: 'status'
                // },
                // {data: 'details', orderable: false, searchable: false},
                // {data: 'action', orderable: false, searchable: false}
                 
                            
            ]
        });
    });

</script>
@endpush