@include('user.layouts.header')
                            {{-- <i class="dropdown">
                              <button type="button" class="btn btn-link dropdown-toggle dropdown-menu-right"  data-toggle="dropdown">
                                
                              </button>
                              <div class="dropdown-menu ">
                                <a class="dropdown-item" href="#">Earn DevCoins</a>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item-text" href="#">Change Password</a>
                                <a class="dropdown-item-text text-danger" href="#">Sign Out</a>
                              </div>
                            </i>
                        </li>         
                </ul> 
            </nav> --}}
  
            
        <!-- /.navbar -->
@include('user.layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">       

@yield('content')
           
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer border-top border-light bg-white">
            <div class="d-flex flex-row">
                <div>© 2022 Dev Skill</div>
                <div class="text-right col">
                    <a href="https://www.facebook.com/groups/devskillbd">
                        <img width="100"
                             src="/img/FindUs-FB-RGB.svg"
                             alt="Facebook Page" />
                    </a>
                </div>
            </div>
        </footer>
    </div>
    @stack('scripts')
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    {{-- <script src="/plugins/jquery/jquery.min.js"></script> --}}
    <!-- Bootstrap 4 -->
    {{-- <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <!-- AdminLTE App -->
    {{-- <script src="/js/adminlte.min.js"></script> --}}
    <!-- InputMask -->
    <script src="/site/js/moment.min.js"></script>
    <script src="/site/js/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="/site/js/daterangepicker.js"></script>
    <!-- Select2 -->
    <script src="/site/js/select2.full.min.js"></script>
    <!-- Left menu activate -->
    <script src="/site/js/left-menu-activate.js"></script>
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
    
{{-- <script src="/site/js/popper.min.js"></script>
<script src="/site/js/tippy-bundle.umd.min.js"></script> --}}
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="/site/js/clipboard.min.js"></script>
<script>
    var clipboardItem = new ClipboardJS('.btn-copy');
    clipboardItem.on('success', function (e) {
        e.clearSelection();
        var tippyItem = tippy(e.trigger, {
            content: 'Copied!',
            arrow: true,
            animation: 'scale',
            delay: [500, 500],
        });
        tippyItem.show();
    });
    clipboardItem.on('error', function (e) {
        var tippyItem = tippy(e.trigger, {
            content: fallbackMessage(e.action),
            arrow: true,
            animation: 'scale',
            delay: [500, 500],
        });
        tippyItem.show();
    });
</script>
<script src="/js//printecertificate.js"></script>

</body>
</html>
