<a href="{{ route('admin.borrow.return', $model) }}" id="return" class="btn btn-app"><i class="fa fa-book"></i>Pengembalian</a>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
   $('a#return').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
        title: 'Yakin akan dikembalikan?',
        text: "Pastikan data & buku dikembalikan sudah sesuai!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Betul!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('retunForm').action = href;
            document.getElementById('retunForm').submit();

            Swal.fire(
            'Dikembalikan!',
            'Buku dikembalikan.',
            'success'
            )
        }
      })
   }) 
</script>

