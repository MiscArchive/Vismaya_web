</div>
<!-- End Page-content -->

<footer class="footer mt-5" style="position: absolute;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear())
                </script> © Cocoon. developed by <a href="www.miscarchive.com">MiscArchive</a>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    {{-- Design & Develop by Adwaith --}}
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->





<!--start back-to-top-->
<button class="btn btn-dark btn-icon" id="back-to-top">
    <i class="bi bi-caret-up fs-3xl"></i>
</button>
<!--end back-to-top-->

</div>
</div>

</div>

</div>
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/plugins.js') }}"></script> --}}
<!-- dropzone min -->
<script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/form-file-upload.init.js') }}"></script> --}}

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ asset('assets/libs/list.js/list.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

 <script src="{{ asset('assets/libs/gridjs/gridjs.umd.js') }}"></script>
 <!-- gridjs init -->
 <script src="{{ asset('assets/js/pages/gridjs.init.js') }}"></script>
 <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
 <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>


 <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    function submitForm() {
        document.getElementById("myForm").submit();
    }

</script>
@yield('script')
</body>


<!-- Mirrored from themesbrand.com/steex/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2023 07:46:55 GMT -->

</html>
