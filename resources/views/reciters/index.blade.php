@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="text-left">
            <h5 style="color: #2F2F2F">Most Popular Reciter</h5> 
        </div>
        <div class="text-right">
            {{-- <a href="{{ route('pages.receiter') }}"> <p style="text-align: end; color:#169E53;">See all</p> </a> --}}
            <a class="btn btn-success" href="{{ route('reciters.create') }}"> Create Post</a>
        </div>

        <table class="table table-bordered">
            <tr class="text-center">
                <th scope="col" style="color: #9D9D9D; background: white;">No</th>
                <th scope="col" style="color: #9D9D9D; background: white;">Image</th>
                <th scope="col" style="color: #9D9D9D; background: white;">Name</th>
                <th scope="col" style="color: #9D9D9D; background: white;">country</th>
                <th scope="col" style="color: #9D9D9D; background: white;">description</th>
                <th scope="col" style="color: #9D9D9D; background: white;" width="110px">Action</th>
            </tr>
            @forelse ($reciters as $reciter)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="{{ $reciter->image_url }}" width="100px"></td>
                    <td><a href="{{ route('reciters.show', ['slug' => $reciter->slug] ) }}" style="font-size: 14px; color:#2F2F2F;"><p class="text-center">{{  $reciter->name  }}</p> </a></td>
                    <td>  
                        <a href="" style="font-size: 14px; color:#2F2F2F;"><p class="text-center">{{ $reciter->country }}</p> </a>
                    </td>
                    <td>
                        <a href="" style="font-size: 14px; color:#2F2F2F;"><p class="text-center">{{ $reciter->description }}</p> </a>
                    </td>
                    <td>
                        <form action="{{ route('reciters.destroy',$reciter->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('reciters.show',$reciter->id) }}">Show</a> --}}
                            {{-- <a class="btn btn-primary" href="{{ route('reciters.edit',$reciter->id) }}">Edit</a> --}}
            
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger">
                    Data Blog belum Tersedia.
                </div>
            @endforelse
        </table>
        {{-- {!! $reciters->links() !!} --}}
    </div>
</section>
@endsection

@push('before-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  //message with toastr
    @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
    @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
    @endif
</script>
@endpush