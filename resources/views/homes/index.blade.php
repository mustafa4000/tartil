@extends('layouts.app')

@section('content')
    <section class="section">
      <div class="section-body">
        <div class="text-left">
          <h3 style="color: #2F2F2F;">Home</h3>
          <h5 style="color: #2F2F2F;">Top Playing</h5>          
        </div>
        <div class="text-right">
            <a class="btn btn-success" href="{{ route('homes.create') }}"> Create Post</a>
        </div>  
        {{--@if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
        @endif --}}
        <table class="table">
          <thead>
            <tr>
                <th scope="col" style="color: #9D9D9D; background: white;"></th>
                <th scope="col" style="color: #9D9D9D; background: white;">Sura Name</th>
                <th scope="col" style="color: #9D9D9D; background: white;">Reciter</th>
                <th scope="col" style="color: #9D9D9D; background: white;">Rewayat</th>
                <th scope="col" style="color: #9D9D9D; background: white;">Duration</th>
            </tr>
          </thead>
          </tbody>
            @forelse ($homes as $home)
              <tr>
                  <th class="text-center" scope="row">
                    <img src="{{ Storage::url($home->image) }}" height="15" width="15" alt="" />  
                  </th>
                  <td style="font-size: 16px; color:#2F2F2F">{{ $home->surat }}</td>
                  <td style="font-size: 16px; color:#2F2F2F">{{ $home->qori }}</td>
                  <td style="font-size: 16px; color:#2F2F2F">{{ $home->rewayat }}</td>
                  <td class="text-center">
                      <form action="{{ route('homes.destroy',$home->id) }}" method="POST" class="text-left">
                        <div class="row">
                          <div class="col">
                            <a href="{{ route('homes.player',$home->id) }}"><i class="fas fa-align-justify" style="color: #2F2F2F;"></i></a>
                          </div>
                          <div class="col">
                            <a class="btn btn-sm" href="{{ route('homes.show',$home->id) }}"><i class="far fa-star" style="color: #2F2F2F;"></i></a>
                          </div>
                          
                          @csrf
                          @method('DELETE')
        
                          <div class="btn-group dropleft col">
                            <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-ellipsis-h" style="color: #2F2F2F;"></i>
                            </a>
                            <div class="dropdown-menu dropleft" x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                              <a class="dropdown-item" href="#" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <img src="{{ url('/assets/img/Share.png') }}" width="15" alt=""> Share
              
                                <div class="dropdown-menu dropleft " x-placement="left-start" style="position: absolute; transform: translate3d(-202px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                                  <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large">
                                    <a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                      <img src="{{ url('/assets/img/fb.png') }}" width="10" alt=""> Facebook
                                    </a>
                                  </div>
                                  <a class="dropdown-item" href="#">
                                    <img src="{{ url('/assets/img/instagram.png') }}" width="15" alt=""> Instagram
                                  </a>
                                  
                                  <a class="dropdown-item" href="#"> 
                                    <img src="{{ url('/assets/img/Telegram.png') }}" width="15" alt=""> Telegram
                                  </a>
                                  {{-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button dropdown-item" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
                                  <a class="dropdown-item" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button">
                                    <img src="{{ url('/assets/img/Twitter.png') }}" width="15" alt=""> Twitter
                                  </a>
                                  <a class="dropdown-item" href="whatsapp://send?text=<URL>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"> 
                                    <img src="{{ url('/assets/img/Whatsapp.png') }}" width="15" alt=""> Whatsapps
                                  </a>
                                </div>  
                              </a>
                              <a href="{{ url('/assets/audio/Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3') }}" class="dropdown-item" download="Surat Al Fatihah Oleh Syaikh Abdallah Kamel.mp3"> 
                                <img src="{{ url('/assets/img/Download.png') }}" width="15" alt=""> Download  
                              </a>
                              <button type="submit" class="dropdown-item" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> 
                                <img src="{{ url('/assets/img/Trash.png') }}" width="15" alt=""> Delete
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                  </td>
              </tr>
            @empty
              <div class="alert alert-danger">
                  Data Blog belum Tersedia.
              </div>
            @endforelse
          <tbody>
        </table>
        {!! $homes->links() !!}
        
      </div>
    </section>
@endsection

@push('before-sc  qript')
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