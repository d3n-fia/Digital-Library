<a href="{{ route('admin.book.edit', $model) }}"><span class="fa fa-edit"></span></i></a>
<!-- <a href="{{ route('admin.book.edit', $model) }}" class="btn btn-warning">Edit</a> -->
<a href="{{ route('admin.book.destroy', $model) }}" id="delete"><span class="fa fa-trash"></span></a>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
   $('a#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
        title: 'Yakin akan dihapus?',
        text: "Data tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus aja!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();

            Swal.fire(
            'Terhapus!',
            'Data berhasil dihapus.',
            'success'
            )
        }
      })
   })  
</script>
