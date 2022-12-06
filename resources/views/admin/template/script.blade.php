<!-- jQuery -->
<script src="{{asset('')}}admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('')}}admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('')}}admin/dist/js/adminlte.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
<script src="{{asset('')}}assets/js/sweetalert2.min.js"></script>
<script>
    var flash = $('#flash').data(flash);
    if(flash){
        Swal.fire({
            icon: 'succes',
            title: 'Succes',
            text: flash
        })
    }
</script>