@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-body">
      <div class="text-left">
        <h3 style="color: #2F2F2F;">Home</h3>
        <h5 style="color: #2F2F2F;">Top Playing</h5>          
      </div>
      <div class="text-right">
          {{-- <a class="btn btn-success" href="{{ route('riwayats.create') }}"> Create Post</a> --}}
      </div>  
      {{--@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
      @endif --}}
      <table class="table">
        <thead>
          <tr>
              <th scope="col" style="color: #9D9D9D; background: white;">No</th>
              <th scope="col" style="color: #9D9D9D; background: white;">Name</th>
          </tr>
        </thead>
        </tbody>
          @foreach ($riwayat as $a)
            <tr>
                <th class="text-center" scope="row">
                  {{-- <img src="{{ Storage::url($home->image) }}" height="15" width="15" alt="" />   --}}
                </th>
                <td style="font-size: 16px; color:#2F2F2F">{{ $a->name }}</td>
            </tr>
          @endforeach
        <tbody>
      </table>
      {!! $riwayat->links() !!}
      
    </div>
  </section>
@endsection