@extends('layouts.app')

@section('content')
<section class="section">
    <div class="text-left">
        <h5 style="color: #2F2F2F">All Surah</h5>
    </div>
    <div class="text-right">
        <a class="btn btn-success" href="{{ route('surahs.create') }}"> Create Post</a>
    </div>
    <div class="row">
        @foreach ($surahs as $surah)
            <div class="column">
                <div class="card w3-white w3-hover-shadow">
                <div class="row">
                    <div class="col">
                        <h6 class="card-title">
                            <a href="{{ route('surah.show', ['slug' => $surah->slug] ) }}" style="color: #2F2F2F">{{ $surah->no }}. {{ $surah->name }}</a>
                        </h6>
                        <p class="card-text" style="color: #ADADAD;">
                            {{ $surah->translate }}
                        </p>
                    </div>
                    <div class="mr-3">
                        <p style="font-size: 25px; color:#169E53;">{{ $surah->arab }}</p>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
        
    {{-- {!! $surahs->links() !!} --}}
</section>
@endsection