@extends('user.layouts.app')
@section('content')

<div class="content">
    <div class="bg-light mx-n3">
        <div class="container">
            <div class="row justify-content-center flex-column">
                <div class="col">
                    <!--dev coins promo-->
                    
<div class="card bg-secondary border-0 d-flex flex-row overflow-hidden my-3 text-left">
    <div class="col col-sm-4 d-none d-sm-flex p-0">
        <img class="ml-n1" src="/site/img/bg_earn_coin_widget.svg">
    </div>
    <div class="col ml-sm-n4 py-9">
        <h1 class="text-white">
            Earn Dev Coins and get rewards!
        </h1>
        <h3 class="user-select-all">www.devskill.com/r/{{Auth::user()->ref_own}}</h3>
        <p class="mb-0">Copy the link, share with your friends, and earn Dev Coins!</p>
        <p class="small">Your friend needs to register or enroll in a course.</p>
    </div>
</div>

                    

<div class="align-items-center bg-white border-bottom border-light d-sm-flex justify-content-between px-3 py-3">
    <div class="col-md-6 px-0">
        <h3>
            Dev Coins
        </h3>
        <div class="row mb-0">
            <div class="col-12 col-md-6 py-2">
                <div>
                    <span class="caption d-block text-uppercase text-muted">Balance</span>
                    <div class="d-block font-weight-bold">
                        @if (Auth::user()->devcoin)
                               <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20" alt="DevCoins" />
                        {{Auth::user()->devcoin->coin}} (0 Tk)
                        @else
                             <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20" alt="DevCoins" />
                                0(0 Tk)
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 py-2">
                <div>
                    <span class="caption d-block text-uppercase text-muted">Cash Out In Progress</span>
                    <div class="d-block font-weight-bold">
                           @if (Auth::user()->devcoin)
                               <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20" alt="DevCoins" />
                        {{Auth::user()->devcoin->coin}} Dev Coins (0 Tk)
                        @else
                             <img src="/site/img/ic_devcoin.svg" class="d-inline-block" width="20" alt="DevCoins" />
                                 0 Dev Coins (0 Tk)
                        @endif
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{-- <a class="btn btn-outline-primary" href="/Member/DevCoin/CashOut">
            Cash Out
        </a> --}}
    </div>
</div>
                    <!--/dev coins promo-->
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <div class="card bg-white border-0 overflow-hidden">
                        <nav>
                            <div class="nav nav-tabs ds-nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active"
                                   data-toggle="tab"
                                   href="#tabDevCoinUses"
                                   role="tab"
                                   aria-controls="devCoinUses"
                                   aria-selected="true">Dev Coin Uses</a>
                                <a class="nav-item nav-link"
                                   data-toggle="tab"
                                   href="#tabgetReferredMembers"
                                   role="tab"
                                   aria-controls="referredMembers"
                                   aria-selected="false">Persons I Referred</a>
                            </div>
                        </nav>
                        <div class="tab-content">
                            
<div class="py-3 tab-pane fade show active"
     id="tabDevCoinUses"
     role="tabpanel"
     aria-labelledby="tabDevCoinUses">

    <div class="card-body">
            <div class="align-items-center d-flex flex-column">
                <img class="my-4" src="/img/TransactionHistory.jpg" alt="Transaction History" />
                {{-- <h3 class="mb-4">There is no Dev Coin transaction history</h3> --}}
                <table class="table" id="devshopOderTable">
                    <thead>
                            <th>Expence Coin</th>
                            <th>Product</th>
                            <th>Date</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
    </div>
</div>
                            
<div class="py-3 tab-pane fade"
     id="tabgetReferredMembers"
     role="tabpanel"
     aria-labelledby="tabgetReferredMembers">
    <div class="card-body">
        <table id="myTable3" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Sign Up Date</th>
                </tr>
            </thead>
                <tbody>
                    
                </tbody>
        </table>
        {{-- <table class="table" id="myTable3">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Sign UP Date</td>
                                </tr>
                            </thead>
                            
                            <tbody>
                    
                            </tbody>
                        </table> --}}
    </div>
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
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"> --}}
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
        $('#myTable3').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/devs/list',
            columns: [                
                {
                    data: 'name'
                },
                {
                    data: 'created_at'
                },  
                {data: 'Get_Coin', orderable: false, searchable: false},           
            ]
        });
    });

 $(document).ready(function () {
        $('#devshopOderTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/Shop/list',
            columns: [                
                {
                    data: 'product_price'
                },
                {
                    data: 'product_name'
                },
                {
                    data: 'created_at'
                },
                // {
                //     data: 'product_status'
                // },
                //  {
                //     data: 'product_received'
                // }
             ]
        });
    });

</script>
@endpush