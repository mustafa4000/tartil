@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('reciters.index') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('reciters.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Name">
            </div>

            <!-- error message untuk surat -->
            @error('name')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Gambar :</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            </div>

            <!-- error message untuk icon -->
            @error('image')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Country:</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" placeholder="Masukkan country">
            </div>

            <!-- error message untuk surat -->
            @error('country')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Description:</label>
                {{-- <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" placeholder="Masukkan Description"> --}}
                <textarea class="form-control @error('description') is-invalid @enderror" style="height:150px" name="description" value="{{ old('description') }}" placeholder="Masukkan Description"></textarea>
            </div>

            <!-- error message untuk surat -->
            @error('description')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </div>
    </div>
@endsection