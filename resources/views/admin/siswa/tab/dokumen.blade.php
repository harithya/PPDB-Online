<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <label>Pas Foto</label>
            <div class="img-preview">
                <img src="{{ $siswa->dokumen->pas_foto? url('storage/' . $siswa->dokumen->pas_foto): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                    id="preview_pas_foto" class="{{ optional($siswa)->dokumen->pas_foto ? 'img-thumbnail' : '' }}">
            </div>
        </div>
        <div class="form-group">
            <label>Ijazah</label>
            <div class="img-preview">
                <img src="{{ $siswa->dokumen->ijazah? url('storage/' . $siswa->dokumen->ijazah): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                    id="preview_ijazah" class="{{ optional($siswa)->dokumen->ijazah ? 'img-thumbnail' : '' }}">
            </div>
        </div>
    </div>
</div>
