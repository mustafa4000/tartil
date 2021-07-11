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
                <a class="btn btn-success" href="{{ route('riwayats.create') }}"> Create Post</a>
            </div>
        </div>
    </div>
 
    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th scope="col">Name Riwayat</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($riwayats as $riwayat)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $riwayat->name }}</td>
            <td class="text-center">
                <form action="{{ route('riwayats.destroy',$riwayat->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('riwayats.show', ['slug' => $riwayat->slug] ) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('riwayats.edit',$riwayat->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $riwayats->links() !!}
    </div>
  </section>
@endsection