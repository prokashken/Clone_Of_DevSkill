@include('site.layouts.header')

        <!--/main header-->
        <!--content wrapper-->
        <div class="content-wrapper">
            <div>
                

    <!--webinar list content-->
    <div>
        <div class="p-5 page-cover page-cover-courses-page mb-md-4 mb-2">
            <div class="col-md-7">
                <h1 class="text-white">LEARN FROM PROFESSIONALS</h1>
                <p class="text-white font-weight-light">
                    Webinars are arranged by Dev Skill where industry professionals discuss latest technologies and technic to build modern scaleable softwares.
                </p>
            </div>
        </div>
        <div class="container">
            <!--coursedeck-->
            <div class="row">
                <div class="col">
                        <div class="row">
                        <div class="col-lg-8 col-xl-7">
                            <!-- Webinars -->
                            <input type="hidden" id="is-logged-in" data-val="true" data-val-required="The IsLoggedIn field is required." name="IsLoggedIn" value="False">
                                <h2 id="past-webinars-section" class="border-bottom mt-5 mb-4 pb-2">Past Webinars</h2>
                                <table id="past-webinars-table" class="table" style="width:100%">
                                </table>
                            <!-- /Webinars -->
                        </div>
                        <div class="col col-lg-4 py-3 offset-xl-1">
                            <!--earn coin ad-->
                            <div class="card bg-secondary border-0 d-flex flex-row overflow-hidden">
    <div class="col col-sm-4 d-none d-sm-flex p-0">
        <img class="ml-n1"
             src="/img/bg_earn_coin_widget.svg" />
    </div>
    <div class="col ml-sm-n4 py-9">
        <h4 class="text-white">
            Earn DevCoins and buy SSD, Graphics Card, etc.
        </h4>
       <a class="btn btn-primary" href="/Member/Home/DevCoinGuide">How to Earn DevCoins?</a>
    </div>
</div>
                            <!--/earn coin ad-->
                            <!--become instructor ad-->
                            <div class="card border-0 overflow-hidden my-3 bg-light-gradient">
    <div class="d-none d-md-block py-10"
         style="
        background-image: url(/img/img_become_mentor.png);
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
    </div>
<!--/webinar list content-->
<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog"
     aria-labelledby="shareModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div><h5>Do you want to share this with your friends?</h5></div>
                <div id="share">
                    <a href="#" target="_blank" class="btn rounded-circle fb-sh">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="btn rounded-circle twitt-sh">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" target="_blank" class="btn rounded-circle linked-sh">
                        <i class="fab fa-linkedin-in fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->


            </div>
        </div>
        <!--/content wrapper-->
        <!--footer-->
        <div class="main-footer">
            <div class="container-fluid py-12">
                <div class="container">
                    <div class="row flex-wrap">
                        <div class="col-12 col-md">
                            <small class="text-muted">STUDENTS</small>
                            <ul class="list-unstyled">
                                <li><a class="py-2 my-2 d-block" href="/Course">Courses</a></li>
                                <li><a class="py-2 my-2 d-block" href="/Blog">Blog</a></li>
                                <li>
                                    <a class="py-2 my-2 d-block" href="/Member/Home/DevCoinGuide">Earn Dev Coins</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md">
                            <small class="text-muted">MENTORS</small>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="py-2 my-2 d-block" href="/Instructor">Become an Instructor</a>
                                </li>
                                <li>
                                    <a class="py-2 my-2 d-block" href="/Member/Home/DevCoinGuide">Earn Dev Coins</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md">
                            <small class="text-muted">Terms</small>
                            <ul class="list-unstyled">
                                <li class="py-2 my-2 d-block">
                                    <a class="" href="/Terms/Details/terms-and-conditions">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a class="py-2 my-2 d-block" href="/Terms/Details/privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="py-2 my-2 d-block" href="/Terms/Details/refund-policy">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md">
                            <small class="text-muted d-block mb-4">CONTACT</small>
                            <p class="h4">Dev Skill</p>
                            <address>
                                House # 184 (8th Floor),<br/> Senpara Parbata<br />
                                Begum Rokeya Sarani, Mirpur-10<br />
                                Dhaka 1216, Bangladesh<br />
                            </address>
                            <a class="mb-3 d-block" data-toggle="modal" data-target="#devskill-map-modal" href="#">Open in Google Maps</a>
                            <a class="mb-3 d-block h5" href="tel:&#x2B;880258050442">&#x2B;88 02 58050442-3</a>
                            <a class="d-block h5" href="mailto:info@devskill.com">info@devskill.com</a>
                            <a class="d-block h5" href="/Home/Contact">Contact Us</a>
                        </div>
                    </div>
                    <div>
                        <hr />
                        <div class="d-flex flex-row">
                            <div>© 2022 Dev Skill</div>
                            <div class="text-right col">
                                <a href="https://www.facebook.com/groups/devskillbd">
                                    <img width="100"
                                         src="/site/img/FindUs-FB-RGB.svg"
                                         alt="Facebook Page" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/footer-->
    </div>
    <!--/wrapper-->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/site/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/site/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/site/js/adminlte.min.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1400808416648408', {
            em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=1400808416648408&ev=PageView&noscript=1" />
    </noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script type="text/javascript">
        // Google analytics code
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-23675202-5', 'auto');
        ga('send', 'pageview');
        // End of Google analytics code
    </script>
    
    <script src="/site/js/jquery.dataTables.js"></script>
    <script src="/site/js/dataTables.bootstrap4.js"></script>
    <script>
        var isLoggedIn = $('#is-logged-in').val();
        $(document).ready(function() {
            $('#past-webinars-table').DataTable({
                "processing": true,
                "serverSide": true,
                "lengthMenu": [ 10, 25, 50 ],
                "ordering": false,
                "bInfo" : false,
                "oLanguage": {
                  "sLengthMenu": "Show _MENU_ webinars",
                },
                "ajax": "/webinar/list",
                "columnDefs": [
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

            $('#past-webinars-table').on( 'page.dt', function ( e, settings, len ) {
                window.location = "#past-webinars-section";
            });

            $('.user-action').on('click', '.register-button', function(event) {
                var btn = $(this);
                var webinarId = btn.data("webinarid");
                var selectedWebinarUrlFriendlyName = btn.data("webinarurlfriendlyname");
                btn.addClass('disabled');
                $.ajax({
                    url: `/Webinar/Register`,
                    method: "POST",
                    data: ({
                        webinarId: webinarId,
                        __RequestVerificationToken: $('<input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9uprxFfULP5XJ_RMFGRO1QCqVMLMOMuP5Hfe15UcRRLP5Id6PcagoLDRpRQ10DazSKto1L6HpXNSLlHJ69-Qwb9EX0f-gZLA3KQIYKm4UoGEYUiizcETrE-9uuhiHE_YIVY" />').val()
                    }),
                    success: function(data) {
                        btn.prev('.register-info').removeClass('d-none').addClass('d-flex');
                        btn.addClass('d-none');
                    },
                    error: function(err) {
                        if (err.status == 401) {
                            window.location.href = `/Account/Signin?returnUrl=/Webinar/Details/${selectedWebinarUrlFriendlyName}/`;
                        }
                        else {
                            btn.prev('.register-info').html(
                                `<span class="fa fa-info-circle mr-2"></span>
                                <small>Something went wrong!<br/>Please try again later.</small>`
                            ).addClass('text-danger').removeClass('d-none').addClass('d-flex');
                        }
                    }
                });
            });

            $(".showShareModalButton").click(function()
            {
                var btn = $(this);
                $(".fb-sh").attr("href", btn.data("facebooksharelink"));
                $(".linked-sh").attr("href", btn.data("linkedinsharelink"));
                $(".twitt-sh").attr("href", btn.data("twittersharelink"));
                $("#shareModal").modal('show');
            });

            $('#past-webinars-table').on('click', '.showShareModalButton', function(event) {
                var btn = $(this);
                $(".fb-sh").attr("href", btn.data("facebooksharelink"));
                $(".linked-sh").attr("href", btn.data("linkedinsharelink"));
                $(".twitt-sh").attr("href", btn.data("twittersharelink"));
                $("#shareModal").modal('show');
            });

            $('#past-webinars-table').on('click', '.showShareModalButton', function(event) {
                var btn = $(this);
                $(".fb-sh").attr("href", btn.data("facebooksharelink"));
                $(".linked-sh").attr("href", btn.data("linkedinsharelink"));
                $(".twitt-sh").attr("href", btn.data("twittersharelink"));
                $("#shareModal").modal('show');
            });

            $("#past-webinars-table th").addClass('border-0 m-0 p-0');
            $(".dataTables_wrapper ").addClass('pb-3');
        });
    </script>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="devskill-map-modal" tabindex="-1" role="dialog" aria-labelledby="Dev Skill in google map" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3999347274016!2d90.36786831496865!3d23.804373492629257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c796bbbcadcf%3A0xc14e0a242f03896!2z4Kam4KeH4KasIOCmuOCnjeCmleCmv-Cmsg!5e0!3m2!1sbn!2sbd!4v1632221816300!5m2!1sbn!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
