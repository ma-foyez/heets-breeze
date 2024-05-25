        <!-- JAVASCRIPT -->
        <script src="{{ asset('') }}assets/admin/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/node-waves/waves.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js" integrity="sha512-hJsxoiLoVRkwHNvA5alz/GVA+eWtVxdQ48iy4sFRQLpDrBPn6BFZeUcW4R4kU+Rj2ljM9wHwekwVtsb0RY/46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- apexcharts -->
        <script src="{{ asset('') }}assets/admin/libs/apexcharts/apexcharts.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <!-- dashboard init -->
        <script src="{{ asset('') }}assets/admin/js/pages/dashboard.init.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/tinymce/tinymce.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.umd.js" integrity="sha512-hTxPc7AKRjkXWaLJrpFNAaDg6k2dlcFr83GY/A6QCcG9frr2fLvZx/bc8rTnNkoOXTSQsW0EkFSb1KvHQMVksQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/thumbnail/lg-thumbnail.umd.min.js" integrity="sha512-hdzLQVAURjMzysJVkWaKWA2nD+V6CcBx6wH0aWytFnlmgIdTx/n5rDWoruSvK6ghnPaeIgwKuUESlpUhat2X+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/plugins/zoom/lg-zoom.umd.js" integrity="sha512-cG/6qcKX9JkbA8kJ7yZulIMXp3l2rQrwmr24BBLNo777SYcuDZUsIbkBNaCnoFr45hIPSfGXhwTn7bWyvNWmEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Required datatable js -->
        <script src="{{ asset('') }}assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                <!-- Buttons examples -->
                <script src="{{ asset('') }}assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/jszip/jszip.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/pdfmake/build/pdfmake.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/pdfmake/build/vfs_fonts.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
                <script src="{{ asset('') }}assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('') }}assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('') }}assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

                <script src="{{ asset('') }}assets/admin/js/pages/datatables.init.js"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('') }}assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

        <script src="{{ asset('') }}assets/admin/js/app.js"></script>


        @if ($massage = Session::get('success'))
        <script>
            Swal.fire({
          position: "top-end",
          icon: "success",
          title: "{{ $massage }}",
          showConfirmButton: !1,
          timer: 3000
          })
          Swal();
        </script>
        @endif


        @if ($massage = Session::get('error'))
        <script>
            Swal.fire({
        position: "top-end",
        icon: "Error",
        title: "{{ $massage }}",
        showConfirmButton: !1,
        timer: 3000
        })
        Swal();
        </script>
        @endif




<script>
$(document).ready(function() {
    // Initialize Dropify
    $('.dropify').dropify();
});
$(document).ready(function() {
    $('#summernote').summernote();
});
$(document).ready(function() {
    $('#summernote1').summernote();
});
$(document).ready(function() {
    $('#summernote2').summernote();
});
$(document).ready(function() {
    $('#summernote3').summernote();
});

</script>
