@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="text-left">
            <h5 style="color: #2F2F2F">Most Popular Reciter</h5> 
        </div>
        <a href="{{ route('pages.receiter') }}"> <p style="text-align: end; color:#169E53;">See all</p> </a>
        <a class="btn btn-success" href="{{ route('reciters.create') }}"> Create Post</a>
        <div class="card-deck">
            @foreach ($reciters as $reciter)
                <div class="card">
                    <img class="card-img-top" class="img-rounded" src="{{ Storage::url($reciter->image) }}" width="132px" height="132px" style="border-radius: 8px;" alt="Card image cap">
                    <div class="card-body">
                        <div class="mr-1">
                            <a href="" style="font-size: 14px; color:#2F2F2F;"><p class="text-center">{{  $reciter->name  }}</p> </a>      
                            {{-- {{ route('reciters.show', ['slug' => $reciter->slug] ) }} --}}
                            <form action="{{ route('reciters.destroy',$reciter->id) }}" method="POST">
    
                                {{-- <a class="btn btn-primary" href="{{ route('reciters.edit',$reciter->id) }}">Edit</a> --}}
               
                                @csrf
                                @method('DELETE')
                  
                                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- {!! $reciters->links() !!} --}}
    </div>
</section>
@endsection