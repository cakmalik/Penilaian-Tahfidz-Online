@livewireScripts
<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#teacher").select2({
            placeholder: "Please Select"
        });

        $("#grade").select2({
            placeholder: "Please Select"
        });
    });
</script>
@stack('foot')
<script src="{{ asset('sbadmin2/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
{{-- <script src="{{ asset('sbadmin2/') }}/vendor/jquery-easing/jquery.easing.min.js"></script> --}}

<!-- Custom scripts for all pages-->
<script src="{{ asset('sbadmin2/') }}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
{{-- <script src="{{ asset('sbadmin2/') }}/vendor/chart.js/Chart.min.js"></script> --}}

<!-- Page level custom scripts -->
{{-- <script src="{{ asset('sbadmin2/') }}/js/demo/chart-area-demo.js"></script>
<script src="{{ asset('sbadmin2/') }}/js/demo/chart-pie-demo.js"></script> --}}

</body>

</html>
