@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="text-left">
            <h5 style="color: #2F2F2F">Murotal</h5> 
        </div>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('murotal.create') }}"> Create Post</a>
        </div>  

        <div class="card-deck">
            @foreach ($murotals as $murotal)
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Path</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $murotal->name }}</td>
                    <td>  <iframe src="{{ Storage::url($murotal->path) }}" width="600" height="400"></iframe>  </td>
                  </tr>
                    <form action="{{ route('murotals.destroy',$murotal->id) }}" method="POST">
    
                        {{-- <a class="btn btn-primary" href="{{ route('reciters.edit',$reciter->id) }}">Edit</a> --}}
    
                        @csrf
                        @method('DELETE')
        
                        {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                    </form>
                </tbody>
              </table>
            @endforeach
        </div>

        {{-- {!! $reciters->links() !!} --}}
    </div>
</section>
@endsection