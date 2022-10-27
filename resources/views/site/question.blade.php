@extends('site.layouts.app')
@section('content')
        <div class="content-wrapper">
            <div>
                
<div class="p-5 page-cover page-cover-faq-page mb-md-4 mb-2"
     style="background-image: url(/img/bg_cover_faq.png);">
    <div class="col-md-7">
        <h1 class="text-white">FAQ</h1>
        <p class="text-white font-weight-light">
            Frequently Asked Questions by Students
        </p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--faq group-->
                    <div class="mb-4">
                        <h3 class="mb-2 pl-3">Course Related</h3>
                        @foreach ($faqs as $faq)
                            <div class="card collapsed-card">
                                <div class="card-header curs-pointer" data-card-widget="collapse">
                                    <h3 class="card-title">{{ $faq->question }}</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <p>{{ $faq->answer }}</p>

                                </div>
                                <!-- /.card-body -->
                            </div>
                        @endforeach
                          
                  
                    </div>
        </div>
    </div>
</div>

            </div>
        </div>
        <!--/content wrapper-->
     
    </div>
    @endsection
@push('scripts')
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
    
@endpush
  
   