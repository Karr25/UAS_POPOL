<section class="page-section portfolio" id="registrasi">
    <div class="container">

        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-3">Ambil Antrian</h2>

        <!-- Portfolio Grid Items -->
        <div class="row">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-12" style="margin-top: 20px">
                        <!-- <h1 align="center">Login </h1> -->
                        <form wire:submit.prevent="submitHandle" method="POST">
                            @csrf
                            <div class="row mt-5">
                                <div class ="col-lg-2">
                                    <h6><label for="poli">Pilih Poli</label></h6>   
                                </div>

                                <div class="col-lg-5">
                                    <select id="poli" class="form-control" wire:model="poli">
                                        <option value="">Pilih</option>
                                        @foreach ($polis as $_poli)
                                        <option value="{{$_poli->kode_poli}}">{{$_poli->nama_poli}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class ="row mb-2">
                                <div class ="col-lg-2">
                                    <h6><label>No Antrian Poli</label></h6>    
                                </div>

                                <div class="col-lg-5">
                                    <input type="text" id="no_antrian" value="{{$poli . $no_antrian}}" disabled class="form-control">
                                </div>
                            </div>

                            
                            <div class="row text-right">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn btn-primary">Ambil Antrian</button>
                                </div>
                            </div>
                        </form>

                        <div class="row text-justify" >
                            <div class="col-lg-2">
                                <h6>Keterangan :</h6>
                            </div>
                            <div class="col-lg-5">
                                <ul class="pl-3">
                                    @foreach ($polis as $_poli)
                                        <li>{{$_poli->nama_poli}} ({{$_poli->kode_poli}})</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>

    @error('poli')
        <script>
            new Noty({
                text: '{{$message}}',
                timeout: 3000,
                theme: "metroui",
                type: "warning",
            }).show();
        </script>
    @enderror
</section>