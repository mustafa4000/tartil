@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('homes.index') }}"> Back</a>
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
 
<form action="{{ route('homes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold"></label>
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
                <label class="font-weight-bold">Sura Name:</label>
                <input type="text" class="form-control @error('surat') is-invalid @enderror" name="surat" value="{{ old('surat') }}" placeholder="Masukkan Name Surat">
            </div>

            <!-- error message untuk surat -->
            @error('surat')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{-- <strong>Reciter:</strong>
                <input type="text" name="qori" class="form-control" placeholder="qori"> --}}
                <label class="font-weight-bold">Reciter:</label>
                <input type="text" class="form-control @error('qori') is-invalid @enderror" name="qori" value="{{ old('qori') }}" placeholder="Masukkan Qori">
            </div>

            <!-- error message untuk Reciter -->
            @error('qori')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label class="font-weight-bold">Rewayat:</label>
                <input type="text" class="form-control @error('rewayat') is-invalid @enderror" name="rewayat" value="{{ old('rewayat') }}" placeholder="Masukkan rewayat">
                {{-- <strong>Rewayat:</strong>
                <input type="text" name="rewayat" class="form-control" placeholder="rewayat"> --}}
            </div>

            <!-- error message untuk Reciter -->
            @error('rewayat')
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