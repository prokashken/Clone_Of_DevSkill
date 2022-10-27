@extends('admin.layouts.main')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Blogs</h3>
      
            <a href="{{ url('/Blogs/create') }}" class="btn btn-info float-right">Create New Blog</a>
         
        </div>  
    </div>
<div class="container">
    <div class="row">
        <div class="col">
                        <table class="table" id="devTable">
                            <thead>
                                <tr>
                                    <th>Order_BY</th>
                                    <th>Created_date</th>
                                    <th>Product Name</th>
                                     <th>Shiping Address</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Delivered</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                    
                            </tbody>
                        </table>
        </div>    
    </div>   
    </div> 
@endsection


@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
 
<script>
    $(document).ready(function () {
        $('#devTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/adorder/list',
            columns: [
                {
                    data: 'created_by'
                },                
                {
                    data: 'created_at'
                },
                {
                    data: 'product_name'
                },
                {
                    data: 'shipment_address'
                },
                {
                    data: 'product_price'
                },
                {
                    data: 'product_status',
                    searchable: true
                },
                 {
                    data: 'product_delivered'
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