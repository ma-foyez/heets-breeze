<script src="{{asset('')}}assets/web/js/bootstrap5.3/js/popper.min.js"></script>

<script src="{{asset('')}}assets/web/js/bootstrap5.3/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}assets/web/js/semantic.js"></script>

<script src="{{asset('')}}assets/web/js/dist/js/bootstrap-select.js"></script>
<script src="{{asset('')}}assets/web/js/holder.min.js" type="text/javascript"></script>
{{-- <script src="{{asset('')}}assets/web/js/switcher.js"></script> --}}


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script src="https://cdn.jsdelivr.net/textillate/0.4.0/jquery.textillate.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.3/sweetalert2.all.js"
  integrity="sha512-5gz/at+6LT6tuaX/ritelLOHwVc0CoXsspPbUBPdoIrOLshcpguRTMBAKVZCdG//YdwyYP2c4n7NMaDqVXWTJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('')}}assets/web/js/organictheme.js"></script>
@stack('script')

@if ($massage = Session::get('success'))
<script>
    Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ $massage }}",
                showConfirmButton: !1,
                timer: 3000
            })
            Swal();
</script>
@endif
