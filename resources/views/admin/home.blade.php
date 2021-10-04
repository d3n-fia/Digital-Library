@extends('admin.templates.default')

@section('content')
<h1>e-Library</h1>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">{{ $user }}<small> Person</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Authors</span>
            <span class="info-box-number">{{ $penulis }}<small>Person</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-book"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Books</span>
            <span class="info-box-number">{{ $buku }}<small>Pieces</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-pencil-square-o"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Borrow History</span>
            <span class="info-box-number">{{ $pinjam }}<small>Pieces</small></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
@endsection