@extends('site.layouts.app')
@section('content')

        <div class="content-wrapper">
            <div>     
                <div class="p-5 page-cover page-cover-courses-page mb-md-4 mb-2">
                    <div class="col-md-7">
                        <h1 class="text-white">LEARN FROM PROFESSIONALS</h1>
                        <p class="text-white font-weight-light">
                            Online courses are planned by industry professionals to make sure that you have the knowledge to build professional software
                        </p>
                    </div>
                </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-8 col-xl-7">
                            <input type="hidden" id="is-logged-in" data-val="true" data-val-required="The IsLoggedIn field is required." name="IsLoggedIn" value="False">
                            <h2 id="past-webinars-section" class="border-bottom mt-5 mb-4 pb-2">Past Webinars</h2>
                                <table class="table" id="myTable">
                                    <thead>
                                    
                                    </thead>
                                    
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                        </div>   
 {{-- Cut --}}
                        <div class="col col-lg-4 py-3 offset-xl-1">
                            <!--earn coin ad-->
                            <div class="card bg-secondary border-0 d-flex flex-row overflow-hidden">
            <div class="col col-sm-4 d-none d-sm-flex p-0">
                <img class="ml-n1"
                     src="/site/img/bg_earn_coin_widget.svg" />
            </div>
            <div class="col ml-sm-n4 py-9">
                <h4 class="text-white">
                    Earn DevCoins and buy SSD, Graphics Card, etc.
                </h4>
               <a class="btn btn-primary" href="/earncoin">How to Earn DevCoins?</a>
            </div>
        </div>
                            <!--/earn coin ad-->
                            <!--become instructor ad-->
                            <div class="card border-0 overflow-hidden my-3 bg-light-gradient">
            <div class="d-none d-md-block py-10"
                 style="
                background-image: url(/site/img/img_become_mentor.png);
                background-size: cover;
                background-position: center center;
            "></div>
            <div class="p-3">
                <strong><a href="#">Enlighten young hearts!</a></strong>
                <p class="small-2">
                    Become an instructor and share your knowledge. Help us
                    to build a better Bangladesh!
                </p>
                <a class="btn btn-brand-red" href="/Instructor">Become an Instructor</a>
            </div>
        </div>
                            <!--/become instructor ad-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/coursedeck-->
        </div>
 {{-- Cut finished  --}}
                    </div>            
                </div>    
            </div>        
        </div>            
    </div>
</div>
@endsection
@push('css')
     <!-- Font Awesome -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
          <!-- Theme style -->
          {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css"> --}}
       
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
       var isLoggedIn = $('#is-logged-in').val();
    $(document).ready(function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
        ajax: '/webinar/list',
        columns: [
            // {
            //         render: function (data, type, row, meta) { 
            //           var html =
            //           '<div class="card shadow">'+
			// 								'  <img src="'+row.link+'" class="card-img-top">'+
			// 								'  <div class="card-body">'+
            //           '    <div class="card-text"><h4>'+row.title+'</h4></div>'+
            //           '    <div class="card-text"><p class="card-text text-muted text-justify">'+row.descrip+'</p></div>'+
			// 								'  </div>'+
			// 								'</div>';
            //           return html;
            //         }
            //     },
            // {
            //             "targets": '_all',
            //             "createdCell": function (td, cellData, rowData, row, col) {
            //             $(td).css('padding', '0');
            //             $(td).css('margin', '0');
            //             $(td).css('border', '0');
            //         }
            //         },
            {
                        "targets": '_all',
                        "createdCell": function (td, cellData, rowData, row, col) {
                        $(td).css('padding', '0');
                        $(td).css('margin', '0');
                        $(td).css('border', '0');
                    }
                    },
                    {
                        "targets": 0,
                        "render": function (data, type, row) {
                                    if(isLoggedIn === "False"){
                                        return `<div class="card shadow border-0 my-3 no-gutters d-flex flex-row overflow-hidden rounded-lg">
                                                    <div class="d-flex flex-column">
                                                        <img alt="img" class="w-100" src="{{asset('storage/${row.image_path}')}}" height="300"/>
                                                        <div class="card-body">
                                                            <h3><a href="/webinar/details1/${row.id}">${row.title}</a></h3>
                                                        <div class="mb-2">
                                                            <span class="bg-warning px-2 py-1 rounded-sm text-white mr-2">
                                                                Webinar
                                                            </span>
                                                            <a class="text-primary curs-pointer showShareModalButton" data-facebooksharelink='${row[5]}' data-linkedinsharelink='${row[6]}' data-twittersharelink='${row[7]}'><i class="fas fa-share-alt"> Share</i></a>
                                                        </div>
                                                        <p class="card-text text-muted">
                                                            ${row.descrip}
                                                        </p>
                                                    </div>
                                                    <div class="text-right">
                                                        <a href="/webinar/details2/${row.id}" class="mx-3 mb-3 btn btn-outline-danger"><i class="fab fa-youtube"></i> See Recordings</a>
                                                    </div>
                                                </div>
                                            </div>`;
                                    }
                                    else if(row.link === null || row.link.match(/^ *$/) !== null){
                                        return `<div class="card shadow border-0 my-3 no-gutters d-flex flex-row overflow-hidden rounded-lg">
                                            <div class="d-flex flex-column">
                                                <img alt="" class="w-100" src="{{asset('storage/${row.image_path}')}}" height="300"/>
                                                <div class="card-body">
                                                    <h3><a href="/webinar/details/${row.id}">${row.title}</a></h3>
                                                    <div class="mb-2">
                                                        <span class="bg-warning px-2 py-1 rounded-sm text-white mr-2">
                                                            Webinar
                                                        </span>
                                                        <a class="text-primary curs-pointer showShareModalButton" data-facebooksharelink='${row[5]}' data-linkedinsharelink='${row[6]}' data-twittersharelink='${row[7]}'><i class="fas fa-share-alt"> Share</i></a>
                                                    </div>
                                                    <p class="card-text text-muted">
                                                        ${row.descrip}
                                                    </p>
                                                    <div class="row pb-3">
                                                        <div class="col-12 col-md-6">
                                                            <small class="text-uppercase">Schedule</small>
                                                            <b class="d-block">${row[4]}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bg-light text-right p-3">
                                                    <button onclick="location.href='/webinar/details1/${row.id}'" class="btn btn-outline-primary ml-2 see-cetails-button">See Details</a>
                                                </div>
                                            </div>
                                        </div>`;
                                    }
                                    else{
                                        var youtubeUrl = "https://www.youtube.com/embed/" + `${row.link}?rel=0`;
                                        return `<div class="card shadow border-0 my-3 no-gutters d-flex flex-row overflow-hidden rounded-lg">
                                                    <div class="d-flex flex-column">
                                                    <iframe width="100%" height="315" src="${youtubeUrl}" title="Dev Skill video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        <div class="card-body">
                                                            <h3><a href="/Webinar/Details/${row[3]}">${row.title}</a></h3>
                                                        <div class="mb-2">
                                                            <span class="bg-warning px-2 py-1 rounded-sm text-white mr-2">
                                                                Webinar
                                                            </span>
                                                            <a class="text-primary curs-pointer showShareModalButton" data-facebooksharelink='${row[5]}' data-linkedinsharelink='${row[6]}' data-twittersharelink='${row[7]}'><i class="fas fa-share-alt"> Share</i></a>
                                                        </div>
                                                        <p class="card-text text-muted">
                                                            ${row.descrip}
                                                        </p>
                                                    </div>
                                                    <div class="bg-light text-right p-3">
                                                    <button onclick="location.href='/webinar/details2/${row.id}'" class="btn btn-outline-primary ml-2 see-cetails-button">See Details</a>
                                                </div>
                                                </div>
                                            </div>`;
                                        }
                                    }
                                },
            {data: 'title', visible: false},         
        ]
        });
    });
//     $(document).ready( function () {
//     $('#myTable').DataTable();
// } );
</script>
@endpush
