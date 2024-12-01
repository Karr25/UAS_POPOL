<header class="masthead pb-0 text-white text-center header2" style="background-color: #1a6988 ">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-5 text-center">Klinik 1/2 Sehat</h1>
        <div class="row">
            <div class="col-md-12" style="border: thin solid; ">
                <h3>NO ANTRIAN SAAT INI</h3>
                <h1 style="margin-top: 5px;">{{$antrian_sekarang}}</h1>
            </div>
        </div>

        <div class="row" style="margin-top: 60px">
            @foreach ($polis as $poli)
            <div class="col-md-2" style="border: thin solid; ">
                <h3>{{$poli->antrians->count()}}</h3>
                <H6>{{$poli->nama_poli}}</H6>
            </div>
            @endforeach
        </div>

        <!-- Masthead Subheading -->
        <div class="row mt-5" style="width: 60%;">
            <div class="col-md-5 text-right" >
                <h6><label>Nomor Antrian Anda :</label></h6>
            </div>
            <div class="col-md-2 text-justify">
                <h5>{{ $antrian_anda ? $antrian_anda->no_antrian : 0 }}</h5>
            </div>
            <div class="col-md-5">
                <a href="/print" style="color: #000; background: #fff; padding: 5px;" target="_blank">Print</a>
            </div>
            <div class="col-md-5 text-right">
                <h6><label>Poli :</label></h6>
            </div>
            <div class="col-md-5 mb-5 text-justify">
                <h6>{{ $antrian_anda ? $antrian_anda->poli->nama_poli : '-' }}</h6>
            </div>
        </div>

    </div>
</header>