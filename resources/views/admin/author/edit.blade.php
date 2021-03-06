@extends('admin.templates.default')

@section('content')
 
<div class='box'>
    <div class="box-header">
        <h3 class="box-title">Edit Data Penulis</h3>
    </div>
    <div class="box-body">
        <form action="{{ route('admin.author.update' , $author)}}" method="POST"> 
            @csrf
            @method("PUT")
            <div class="form-group @error ('name') has-error @enderror">
                <label for="">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama penulis" value="{{ old('name') ?? $author->name}}"></div>
            @error('name')
            <span class="help-block">{{ $message }}</span>
            @enderror
            
            <div class="form-group">
                <input type="submit" value="Edit" class="btn btn-warning">
            </div>
        </form>
    </div>
</div>

@endsection