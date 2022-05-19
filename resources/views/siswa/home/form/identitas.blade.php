<h3>Identitas Pendaftaran</h3>
<fieldset>
    <form id="form-identitas" method="POST" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label>Nik</label>
                    <input type="text" value="{{ optional($siswa)->nik }}" name="nik" class="form-control">
                </div>
                <div class="form-group">
                    <label>NISN</label>
                    <input type="text" value="{{ optional($siswa)->nisn }}" name="nisn" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" value="{{ optional($siswa)->nama }}" name="nama" class="form-control">
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label>Tempat Tanggal Lahir</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="tempat_lahir" value="{{ optional($siswa)->tempat_lahir }}"
                            class="form-control">
                    </div>
                    <div class="col-md-5">
                        <input type="date" name="tanggal_lahir" value="{{ optional($siswa)->tanggal_lahir }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" value="{{ optional($siswa)->no_hp }}" class="form-control">
                </div>
                <div class="form-group">
                    <label class="mb-4">Jenis Kelamin</label>
                    <div class="d-flex">
                        <div class="form-check mb-2 me-5">
                            <input class="form-check-input" value="1" type="radio"
                                {{ optional($siswa)->jenis_kelamin == null ? 'checked' : '' }}
                                {{ optional($siswa)->jenis_kelamin === 1 ? 'checked' : '' }} name="jenis_kelamin"
                                id="radio-laki">
                            <label class="form-check-label" for="radio-laki">
                                Laki Laki
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" value="0"
                                {{ optional($siswa)->jenis_kelamin === 2 ? 'checked' : '' }} name="jenis_kelamin"
                                id="radio-perempuan">
                            <label class="form-check-label" for="radio-perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Asal sekolah</label>
                    <input type="text" name="asal_sekolah" value="{{ optional($siswa)->asal_sekolah }}"
                        class="form-control">
                </div>
            </div>
        </div>
    </form>
</fieldset>
