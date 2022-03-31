<h3>Orang Tua</h3>

<fieldset>
    <form id="form-orang-tua">
        <div class="row">
            <div class="row mt-3">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{ optional($orangTua)->nama }}"
                            name="nama_ortu">
                    </div>
                    <div class="form-group">
                        <label>No Kontak Ortu</label>
                        <input type="text" class="form-control" value="{{ optional($orangTua)->no_kontak }}"
                            name="no_kontak">
                    </div>
                    <div class="form-group">
                        <label>Status Hubungan</label>
                        <select class="form-control" name="status">
                            <option value="">Pilih</option>
                            <option {{ optional($orangTua)->status == 1 ? 'selected' : '' }} value="1">Orang Tua
                            </option>
                            <option {{ optional($orangTua)->status == 2 ? 'selected' : '' }} value="2">Wali</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <select class="form-control" name="pekerjaan_id">
                            <option value="">Pilih</option>
                            @foreach ($pekerjaan as $item)
                                <option {{ optional($orangTua)->pekerjaan_id == $item->id ? 'selected' : '' }}
                                    value={{ $item->id }}>
                                    {{ $item->pekerjaan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penghasilan</label>
                        <select class="form-control" name="penghasilan_id">
                            <option value="">Pilih</option>
                            @foreach ($penghasilan as $item)
                                <option {{ optional($orangTua)->penghasilan_id == $item->id ? 'selected' : '' }}
                                    value="{{ $item->id }}">{{ $item->penghasilan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
</fieldset>
