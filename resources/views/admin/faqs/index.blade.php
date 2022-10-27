@extends('admin.layouts.main')
@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Blogs</h3>
      
            <a href="{{ url('/Adfaq/create') }}" class="btn btn-info float-right">Create New Faq</a>
         
        </div>  
    </div>

    {{-- <div class="container"> 
        <div class="row">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-4"> --}}
<div class="container">
    <div class="row">
        <div class="col">
            {{-- <div class="row"> --}}
                {{-- <div class="col-lg-8 col-xl-7 pt-md-6"> --}}
                <!--post list item-->       
                  {{-- @foreach ($blogs as $blog)
                    <div class="mb-4">     
                            <a class="bn-font h4 d-block" href="/Blog/Details/siem-technology-splunk">{{ $blog->title }}</a>
                            <p class="bn-font truncate-lines-4 text-justify">{{ \Illuminate\Support\Str::limit($blog->description, 250, '...') }}</p>
                            <div><a href="/Blog/Details/siem-technology-splunk">Read the Article</a></div>
                    </div>
                  @endforeach --}}
                        <table class="table" id="myTable2">
                            <thead>
                                <tr>
                                    <td>Question</td>
                                    <td>Answer</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            
                            <tbody>
                    
                            </tbody>
                        </table>
                {{-- </div> --}}
            {{-- </div> --}}
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
        $('#myTable2').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/adfaq/list',
            columns: [                   
                {
                    data: 'question'
                },
                {
                    data: 'answer'
                },
                {data: 'action', orderable: false, searchable: false}
                 
                            
            ]
        });
    });

</script>
@endpush