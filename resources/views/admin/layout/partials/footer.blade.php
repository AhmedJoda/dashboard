<!-- Footer start -->
<footer class="main-footer">© Wafi 2020</footer>
<!-- Footer end -->


</div>

<!-- *************
************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{asset('dashboard')}}/js/jquery.min.js"></script>
<script src="{{asset('dashboard')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('dashboard')}}/js/moment.js"></script>


<!-- *************
************ Vendor Js Files *************
************* -->
<!-- Slimscroll JS -->
<script src="{{asset('dashboard')}}/vendor/slimscroll/slimscroll.min.js"></script>
<script src="{{asset('dashboard')}}/vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Daterange -->
<script src="{{asset('dashboard')}}/vendor/daterange/daterange.js"></script>
<script src="{{asset('dashboard')}}/vendor/daterange/custom-daterange.js"></script>

<!-- Main Js Required -->
<script src="{{asset('dashboard')}}/js/main.js"></script>

{{-- craftable scripts --}}
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="{{ asset('public/js/admin.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>

</body>
</html>