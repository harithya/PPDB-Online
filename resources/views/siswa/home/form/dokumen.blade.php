<h3>Dokumen</h3>
<fieldset>
    <form id="form-dokumen">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label>Pas Foto</label>
                    <input type="file" name="pas_foto" class="form-control file-input" id="pas_foto">
                    <div class="img-preview">

                        <img src="{{ $dokumen->pas_foto? url('storage/' . $dokumen->pas_foto): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                            id="preview_pas_foto" class="{{ optional($dokumen)->pas_foto ? 'img-thumbnail' : '' }}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Ijazah</label>
                    <input type="file" name="ijazah" class="form-control file-input" id="ijazah">
                    <div class="img-preview">
                        <img src="{{ $dokumen->ijazah? url('storage/' . $dokumen->ijazah): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                            id="preview_ijazah" class="{{ optional($dokumen)->ijazah ? 'img-thumbnail' : '' }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
</fieldset>
