@include('site.layouts.header')
        <!--/main header-->
        <!--content wrapper-->
        <div class="content-wrapper">
            <div>
                
<!-- Facebook Social Share and Comment Plugin Dependencies-->
<div id="fb-root"></div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-lg-8 col-xl-7 pt-md-6">
                    <!--post-->
                    <div class="mb-4">
                        <a class="btn btn-sm btn-outline-primary my-4" href="/Blog">Go Back to All Articles</a>
                        <div class="post-meta-info d-flex justify-content-between">
                            <div class="post-item-tags mr-2 mb-2 d-none d-md-block">

                                    <a class="badge badge-light" target="_blank" href="/Blog?tag=learn&amp;pageIndex=1">learn </a>

                            </div><p class="mb-0 text-secondary my-2 my-sm-0 small">April 10, 2022</p>
                        </div>

                        <a href="#" class="bn-font h3 d-block my-3">SIEM Technology &amp; Splunk</a>

                        <div class="bn-font text-justify">
                            <p>{{ $blog->title }}</p>
                            <p><pre>{{ $blog->description }}</pre></p>

                        </div>
                    </div>
 <!--/post-->

                <!--Comment-->
                    <div>
                        <hr>
                        <form action="{{ url("/post-comment/$blog->id") }}" method="post">
                            @csrf
                            <input type="text" name="CourseFeedback" value="">
                            <input type="hidden" name="post_id" value="{{  $blog->id }}" >
                            <input type="submit" name="" value="Save">
                          </form>
                       <br>
                        <h3>Comments</h3>
                        @forelse ($blog->comments as $cmt)
                        <div class="media mb-3">
                            <img alt="Photo"
                             class="mr-3 rounded-circle square"
                             style="width: 40px;"
                             src="{{asset("storage/".$cmt->user->image_path)}}" />
                            <div class="media-body">
                                {{-- <b style="color:darkcyan">{{ App\Models\User::find($cmt->user_id)->name}}</b> --}}
                                <b style="color:darkcyan">{{ $cmt->user->name}}</b>
                                <p>{{ $cmt->details }}</p>
                            </div>
                        </div>
                            {{-- <p>{{ $cmt->details }}</p> --}}
                        @empty
                            <p>No Comment Found</p>
                        @endforelse
            
                    </div>

                <!--/Comment-->

                    <div>
                        <br><br><br> <hr>
                    </div>

                   
                    <!-- FB Comment Plugin-->
                    <!--https://developers.facebook.com/docs/plugins/comments/-->
                    {{-- <div id="trigger1" class="my-4">
                        <div class="fb-comments" data-width="" data-numposts="10"></div>
                    </div> --}}
                    <!-- /FB Comment Plugin-->
                </div>
                <div class="col col-lg-4 py-3 offset-xl-1 pt-md-6">
                    <div class="position-sticky" style="top:80px">
                        <!--share-->
                        <div class="p-3">
                            <h3>Share with Your Friends</h3>
                            <!--fb share-->
                            <!--https://developers.facebook.com/docs/plugins/share-button/-->
                            <div class="my-3">
                                <div class="fb-share-button" data-layout="button_count" data-size="large" data-href =""></div>
                            </div>
                            <!--/fb share-->
                            <!--linkedin share-->
                            <div class="my-3">
                                <!--https://docs.microsoft.com/en-gb/linkedin/consumer/integrations/self-serve/plugins/share-plugin-->
                                <script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
                                <script type="IN/Share" data-url=""></script>
                            </div>
                            <!--/linkedin share-->
                            <!--copy blog post link-->
                            <div class="my-3">
                                <button class="btn btn-outline-primary copylink-popover" onclick="copyUrl()" data-container="body" data-toggle="popover" data-placement="top" data-content="Link Copied to Clipboard!"><i class="far fa-copy"></i> Copy Link</button>
                            </div>
                            <!--/copy blog post link-->

                        </div>
                        <!--/share-->
                        <!--topics-->
                            <div class="card d-flex p-3 border-0">
                                <h3>Related</h3>
                                <ul class="list-unstyled">
                                        <li class="mb-2">
                                                <a class="text-dark py-2 d-block" href="/Course/Detail/professional-cyber-security-career">Professional Cyber Security Career</a>
                                            <p class="mb-0 text-muted"><i class="fa fa-graduation-cap mr-1" aria-hidden="true"></i>DevSkill Course</p>
                                        </li>
                                </ul>
                            </div>
                        <!--/topics-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                         src="/img/FindUs-FB-RGB.svg"
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
    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0" nonce="z6T8uLNK"></script>

    <script>
        function copyUrl() {
            var tempElement = document.createElement('input'),
                text = window.location.href;

            document.body.appendChild(tempElement);
            tempElement.value = text;
            tempElement.select();
            document.execCommand('copy');
            document.body.removeChild(tempElement);
        }
    </script>

    <script>
        //copy button popOver
        $(function () {
            $('.copylink-popover').popover({
                container: 'body'
            })

            $('.copylink-popover').popover().click(function () {
                setTimeout(function () {
                    $('.copylink-popover').popover('hide');
                }, 2000);
            });
        })
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
