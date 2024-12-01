@extends('layouts.main')
@section('styles')
<style>
  .carousel-item .card{
    height: 450px;
  }

  .header{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('http://news.propanraya.com/upload/2018_april/Klinik_Darma_Nusantara_7.jpeg');
    background-repeat: no-repeat;
    background-position: center;
    background-size : cover;
    background-attachment: fixed;
  }

  .header2{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://picklinik.id/storage/2021/10/header.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size : cover;
    background-attachment: fixed;
  }

  header{
    min-height: 100vh;
  }
</style>
@endsection

@section('content')

{{-- Udh Login --}}
@auth('web')
  {{-- Header --}}
  @include('partials.hero-login')
  {{-- Ambil Antrian --}}
  <livewire:ambil-antrian>

{{-- Belom Login --}}
@else
  {{-- Header --}}
  @include('partials.hero')
  {{-- Jenis Layanan --}}
  @include('partials.jenis-layanan')
@endauth

<!-- Help Section -->
<section class="page-section text-white mb-0" id="bantuan" style="background-color: #1a6988 ">
  <div class="container">

    <!-- Help Section Heading -->
    <h2 class="page-section-heading text-uppercase text-white text-left mb-5" >Bagaimana cara mengambil nomor antrian ?</h2>

    <!-- Help Section Content -->
      
    <div class="wpb-timeline-block">

        <div class="wpb-timeline-content">
        
        <h3>1. Klik Tombol Login </h3>
        <ul>
          <li>Jika belum memiliki akun, silahkan <strong>Daftar</strong> Dahulu.</li>
          <li>Silahkan mengisi dan melengkapi isi form.</li>     
        </ul>

      </div>
    </div>

    
    <div class="wpb-timeline-block">

      <div class="wpb-timeline-content">
      
      <h3>2. Pilih Poliklinik</h3>
      <ul>
        <li>Jika sudah memilih <strong>Poliklinik</strong></li>
        <li>Silahkan ambil nomor antrian.</li>     
      </ul>

    </div>
  </div>

    
  <div class="wpb-timeline-block">

    <div class="wpb-timeline-content">
    
      <h3>3. Cetak Nomor Antrian</h3>
      <ul>
        <li>Klik tombol <strong>Cetak</strong> jika ingin mencetak nomor antrian.</li>
        <li>Silahkan tunggu sampai dipanggil sesuai dengan nomor antrian.</li>     
      </ul>

    </div>
  </div>




</section>

<!-- Modal Daftar -->
<livewire:daftar-modal />

<!-- Modal Login-->
<livewire:login-modal />
@endsection

@section('scripts')
@if(request()->session()->has('daftarSukses'))
<script type="text/javascript">
  new Noty({
      
      text: "{{session('daftarSukses')}}",
      timeout: 3000,
      theme: "metroui",
      type: "success",
  }).show();
</script>
@endif

@if(request()->session()->has('loginSuccess'))
<script type="text/javascript">
  new Noty({
      
    text: "{{session('loginSuccess')}}",
    timeout: 3000,
    theme: "metroui",
    type: "success",
  }).show();
</script>
@endif

@if(request()->session()->has('loggedOut'))
<script type="text/javascript">
  new Noty({
      
    text: "{{session('loggedOut')}}",
    timeout: 3000,
    theme: "metroui",
    type: "success",
  }).show();
</script>
@endif

@if(request()->session()->has('antrianAdded'))
<script type="text/javascript">
  new Noty({
    text: "{{session('antrianAdded')}}",
    timeout: 3000,
    theme: "metroui",
    type: "success",
  }).show();
</script>
@endif

@endsection