<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div>
            <table class="table">
                <tr>
                    <th>Provinsi</th>
                    <td>{{ optional($siswa->alamat)->provinsi }}</td>
                </tr>
                <tr>
                    <th>Kota / Kabupaten</th>
                    <td>{{ optional($siswa->alamat)->kota }}</td>
                </tr>
                <tr>
                    <th>Kecamatan</th>
                    <td>{{ optional($siswa->alamat)->kecamatan }}</td>
                </tr>
                <tr>
                    <th>Alamat Lengkap</th>
                    <td>RT {{ optional($siswa->alamat)->rt }} RW {{ optional($siswa->alamat)->rw }},
                        {{ optional($siswa->alamat)->alamat }},
                        Kode Pos {{ optional($siswa->alamat)->kode_pos }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
