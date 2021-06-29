@extends('layouts.app')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2> Show Post</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('homes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>surat:</strong>
            {{ $home->surat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Qori:</strong>
            {{ $home->qori }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Rewayat:</strong>
            {{ $home->rewayat }}
        </div>
    </div>
</div>

@endsection