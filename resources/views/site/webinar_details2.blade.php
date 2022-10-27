@extends('site.layouts.app')
@section('content')
        <div class="content-wrapper">
            <div>
                

<div class="container-xxxl p-0 pt-4 pl-3">
        <div class="row align-items-center mb-3 mb-lg-6 d-flex">

            @if ($video->link == null)
                <div class="d-none d-lg-flex col-lg-6 align-self-stretch">
                    <img alt="img"
                class="img-fluid"
                src="{{asset("/storage/".$video->image_path)}}" />
                </div>
            @else
                <div class="d-lg-flex col-12 col-lg-6 align-self-stretch">
                    <iframe width="840" height="460" src="{{$video->link}}" title="Dev Skill video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endif

            <div class="col-12 col-lg-6 p-4 ">
                <h2 class="text-primary">{{ $video->title }}</h2>
                <p class="card-text text-muted">{{ $video->descrip }}</p>
                <p>
                    <small class="text-uppercase">Schedule</small>
                    <b class="d-block">{{ $video->schedule }}</b>
                </p>
                <a class="btn btn-outline-primary showShareModalButton"
                    data-facebooksharelink='https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevskill.com%2FWebinar%2FDetails%2Fdata-structure-algorithm?referralCode=PROD001563'
                    data-linkedinsharelink='https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Fdevskill.com%2FWebinar%2FDetails%2Fdata-structure-algorithm?referralCode=PROD001563'
                    data-twittersharelink='https://twitter.com/intent/tweet?url=https%3A%2F%2Fdevskill.com%2FWebinar%2FDetails%2Fdata-structure-algorithm?referralCode=PROD001563'>
                    <i class="fas fa-share-alt"> Share</i></a>
            </div>
        </div>
</div>

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

    </div>
    @endsection
   @push('scripts')
        <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.min.js"></script>
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
    
    <script>
        $(document).ready(function() {
            $('.register-button').on('click', function(event) {
                var btn = $(this);
                var webinarId = btn.data("webinarid");
                var selectedWebinarUrlFriendlyName = btn.data("webinarurlfriendlyname");
                btn.addClass('disabled');
                $.ajax({
                    url: `/Webinar/Register`,
                    method: "POST",
                    data: ({
                        webinarId: webinarId,
                        __RequestVerificationToken: $('<input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9upMXOv31ylitaGVftsVujzvBiB0OBnm0MTDOzSTnm-PDYl09v975ieImXTXbUDwhpBuCCazqpSxP27fGRugcx_ar2oKm9Wf4sfgBOcXN2wgwKMdnAhhq7khb2hUpCOWAF0oypa50rJVtLd5X5D_eJl0PCjAkoOxOizv_CUtPtZw2g" />').val()
                    }),
                    success: function(data) {
                        $('.register-info').removeClass('d-none').addClass('d-flex');
                    },
                    error: function(err) {
                        if (err.status == 401) {
                            window.location.href = `/Account/Signin?returnUrl=/Webinar/Details/${selectedWebinarUrlFriendlyName}/`;
                        }
                        else {
                            $('.register-info').html(
                                `<span class="fa fa-info-circle mr-2"></span>
                                <small>Something went wrong! Please try again later.</small>`
                            ).addClass('text-danger').removeClass('d-none').addClass('d-flex');
                        }
                    }
                });
            });

            $(".showShareModalButton").click(function() {
                var btn = $(this);
                $(".fb-sh").attr("href", btn.data("facebooksharelink"));
                $(".linked-sh").attr("href", btn.data("linkedinsharelink"));
                $(".twitt-sh").attr("href", btn.data("twittersharelink"));
                $("#shareModal").modal('show');
            });
        });
    </script>
   @endpush