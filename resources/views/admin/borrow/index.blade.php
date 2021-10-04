@extends('admin.templates.default')

@section('content')

<div class="box">
    <div class="box-header">
    <h3 class="box-title">Data Peminjaman Buku</h3>
    <!-- <a href="{{ route('admin.author.create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a> -->
    </div>

    <div class="box-body">
    <table id="datatable" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Book Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- <tbody>
            <tr>
                <td>1</td>
                <td>Seseorang</td>
            </tr>
        </tbody> -->
        </table>
</div> 

<form action="" method="post" id="retunForm">
    @csrf
    @method("PUT")
    <input type="submit" value="Return"  style="display: none">
</form>


@endsection

@push('datatable')
    <link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush

@push('scripts')
<script src="{{ asset('assets/plugins/bs-notify.min.js') }}"> </script>
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@include('admin.templates.partial.alerts')
<script>
    $(function () {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.borrow.data') }}',
            columns: [
                { data: 'DT_RowIndex', orderable:false, searchable: false },
                { data: 'user'},
                { data: 'book_title'},
                { data: 'action'}
            ]
        })
    });
</script>
@endpush