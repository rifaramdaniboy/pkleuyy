 <div>
     <div class="row justify-content-center ">
         <div class="col-md-10">
             <label for="provinsi">Provinsi</label>
             <select wire:model="selectedProvinsi" class="form-control">
                 <option value="" selected>Pilih Provinsi</option>
                 @foreach ($provinsi as $provinsis)
                     <option value="{{ $provinsis->id }}">{{ $provinsis->nama_provinsi }}</option>
                 @endforeach
             </select>
         </div>
     </div>
     <div class="row justify-content-center ">
         <div class="col-md-10">
             @if (!is_null($selectedProvinsi))
                 <label for="Kota">Kota</label>
                 <select wire:model="selectedKota" class="form-control">
                     <option value="" selected>Pilih Kota</option>
                     @foreach ($kota as $kotas)
                         <option value="{{ $kotas->id }}">{{ $kotas->nama_kota }}</option>
                     @endforeach
                 </select>
             @endif
         </div>
     </div>
     <div class="row justify-content-center ">
         <div class="col-md-10">
             @if (!is_null($selectedKota))
                 <label for="kecamatan">Kecamatan</label>
                 <select wire:model="selectedKecamatan" class="form-control">
                     <option value="" selected>Pilih Kecamatan</option>
                     @foreach ($kecamatan as $kecamatans)
                         <option value="{{ $kecamatans->id }}">{{ $kecamatans->nama_kecamatan }}</option>
                     @endforeach
                 </select>
             @endif
         </div>
     </div>
     <div class="row justify-content-center ">
         <div class="col-md-10">
             @if (!is_null($selectedKecamatan))
                 <label for="kelurahan">Kelurahan</label>
                 <select wire:model="selectedKelurahan" class="form-control">
                     <option value="" selected>Pilih Kelurahan</option>
                     @foreach ($kelurahan as $kelurahans)
                         <option value="{{ $kelurahans->id }}">{{ $kelurahans->nama_kelurahan }}</option>
                     @endforeach
                 </select>
             @endif
         </div>
     </div>
     <div class="row justify-content-center ">
         <div class="col-md-10">
             @if (!is_null($selectedKelurahan))
                 <label for="rw">Rw</label>
                 <select wire:model="selectedRw" class="form-control" name="id_rw">
                     <option value="" selected>Pilih Rw</option>
                     @foreach ($rw as $rws)
                         <option value="{{ $rws->id }}">{{ $rws->nama_rw }}</option>
                     @endforeach
                 </select>
             @endif
         </div>
     </div>
     <h3 class="row justify-content-center">
         <---------------------------------Data Kasus---------------------------------->
     </h3>
     <div class="row justify-content-center">
         <div class="col-md-10">
             <label for="positif">Jumlah Positif</label>
             <input type="text" value="@if (isset($tracking1)) {{ $tracking1->jumlah_positif }} @endif" class="form-control"
                 name="jumlah_positif">
         </div>
         <div class="col-md-10">
             <label for="sembuh">Jumlah Sembuh</label>
             <input type="text" class="form-control" value="@if (isset($tracking1)) {{ $tracking1->jumlah_sembuh }} @endif" name="jumlah_sembuh">
         </div>
         <div class="col-md-10">
             <label for="meninggal">Jumlah Meninggal</label>
             <input type="text" class="form-control" value="@if (isset($tracking1)) {{ $tracking1->jumlah_meninggal }} @endif" name="jumlah_meninggal">

         </div>
         <div class="col-md-10">
             <label for="tanggal">Tanggal</label>
             <input type="date" class="form-control" value="@if (isset($tracking1)) {{ $tracking1->tanggal }} @endif" name="tanggal">
         </div>
     </div>
 </div>
