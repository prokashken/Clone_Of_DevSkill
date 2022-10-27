@extends('site.layouts.app')
@section('content')
        <!--content wrapper-->
        <div class="content-wrapper">
            <div>
                
<div class="container">
   <div class="row">
       <div class="col">
           <div class="row">
               <div class="col-lg-8 col-xl-7 pt-md-6">
                   <!--post list item-->
                   @foreach ($blogs as $blog)
                   <div class="mb-4">
                    <div class="post-meta-info d-flex justify-content-between">
                        <div class="post-item-tags mr-2 mb-2 d-none d-md-block">
                                <a class="badge badge-light" target="_blank" href="/Blog?tag=learn&amp;pageIndex=1">learn
                                </a>
                        </div>
                        <p class="mb-0 text-secondary my-2 my-sm-0 small">{{ $blog->created_at }}</p>
                    </div>
                    <a class="bn-font h4 d-block" href="/userBlogs/details/{{$blog->id}}">{{ $blog->title }}</a>
                    <p class="bn-font truncate-lines-4 text-justify">{{  \Illuminate\Support\Str::limit($blog->description, 250, '...')  }}</p>
                    <div><a href="/userBlogs/details/{{$blog->id}}">Read the Article</a></div>
                </div>
                   @endforeach
                   {{ $blogs->links() }}               
               </div>
               <div class="col col-lg-4 py-3 offset-xl-1 pt-md-6">
                   
                   
                   <!--/submit article ad-->
               </div>
           </div>
       </div>
   </div>
</div>


            </div>
        </div>
        <!--/content wrapper-->
       
    </div>
    <!--/wrapper-->
@endsection


@push('scripts')
      <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
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
    jQuery(function ($) {
        var path = location.href;
        $('#blog-pagination a').each(function () {
            if (this.href === path) {
                $(this).parent().addClass('active');
            }
        });
        $('#blog-pagination').children().first().removeClass('active');
        $('#blog-pagination').children().last().removeClass('active');
    });
</script>
@endpush
  