@include('site.layouts.header')
  
@yield('content')


@include('site.layouts.footer')

</div>
@stack('scripts')

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
