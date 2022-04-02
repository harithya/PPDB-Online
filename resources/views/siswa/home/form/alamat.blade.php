<h3>Alamat</h3>
<fieldset>
    <form id="form-alamat">
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label>Provisi</label>
                    <select class="form-control select2 provinsi" name="provinsi_id">
                        <option value="">Pilih</option>
                        @foreach ($provinsi as $item)
                            <option {{ optional($alamat)->provinsi_id == $item->id ? 'selected' : '' }}
                                value="{{ $item->id }}">
                                {{ $item->provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Kota</label>
                    <select class="form-control select2 kota" name="kota_id">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kecamatan</label>
                    <select class="form-control select2 kecamatan" name="kecamatan_id">
                        <option value="">Pilih</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>RT / RW</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" type="number" value="{{ optional($alamat)->rt }}" name="rt">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" name="rw" type="number" value="{{ optional($alamat)->rw }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input class="form-control" name="kode_pos" type="number"
                        value="{{ optional($alamat)->kode_pos }}">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" rows="5">{{ optional($alamat)->alamat }}</textarea>
                </div>
            </div>
        </div>
    </form>
</fieldset>
