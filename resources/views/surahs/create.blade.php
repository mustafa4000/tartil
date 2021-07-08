@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('surahs.index') }}"> Back</a>
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
 
<form action="{{ route('surahs.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Surah :</strong>
                <input type="text" class="form-control @error('no') is-invalid @enderror" name="no" value="{{ old('no') }}" placeholder="Masukkan nomor surah">

                <!-- error message untuk surat -->
                @error('no')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surah :</strong>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Name name">

                <!-- error message untuk surat -->
                @error('name')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Terjemah :</strong>
                <input type="text" class="form-control @error('translate') is-invalid @enderror" name="translate" value="{{ old('translate') }}" placeholder="Masukkan Name translate">

                <!-- error message untuk surat -->
                @error('translate')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Arab :</strong>
                <input type="text" class="form-control @error('arab') is-invalid @enderror" name="arab" value="{{ old('arab') }}" placeholder="Masukkan Name arab">
                
                <!-- error message untuk surat -->
                @error('arab')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection