<div>
    @include('partials.admin-message')
    
    <form wire:submit.prevent="submitHandle" method="POST">
        <div class="row">
            <div class="col-md-2">
                <label>Pilih Poli</label>
            </div>
    
            <div class="col-md-5">
                <select wire:model="poli" id="id_poli" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($polis as $_poli)
                    <option value="{{$_poli->kode_poli}}">{{$_poli->kode_poli}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-2">
                <label>No antrian poli</label>
            </div>
    
            <div class="col-md-5">
                <input type="text" id="no_antrian" value="{{$poli . $no_antrian}}" disabled class="form-control">
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-2">
                <label>Pilih Pasien</label>
            </div>
    
            <div class="col-md-5">
                <select wire:model="pasien" name="id_pasien" id="id_pasien" class="form-control">
                    <option value="">Pilih</option>
                    @foreach ($pasiens as $_pasien)
                    <option value="{{ $_pasien->username }}">{{ $_pasien->username }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row text-right">
            <div class="col-md-7">
                <button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>