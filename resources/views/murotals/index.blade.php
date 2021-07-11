@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-body">
    <div class="row mt-5 mb-5">
      <div class="col-lg-12 margin-tb">
          <div class="float-left">
              <h2>Murotals</h2>
          </div>
          <div class="float-right">
              <a class="btn btn-success" href="{{ route('murotals.create') }}"> Create Post</a>
          </div>
      </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th scope="col">Name Sura</th>
            <th scope="col">File</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @forelse ($murotals as $murotal)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $murotal->name }}</td>
                <td>{{ $murotal->file }}</td>
                <td class="text-center">
                    <form action="{{ route('murotals.destroy',$murotal->id) }}" method="POST">
                        {{-- <a class="btn btn-info btn-sm" href="{{ route('murotals.show', ['slug' => $murotal->slug] ) }}}">Show</a> --}}
                        <a class="btn btn-primary btn-sm" href="{{ route('murotals.edit',$murotal->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <div class="alert alert-danger">
                Data Blog belum Tersedia.
            </div>
        @endforelse
    </table>
    {{-- {!! $murotals->links() !!} --}}
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