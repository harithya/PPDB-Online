<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div>
            <table class="table">
                <tr>
                    <th>Provinsi</th>
                    <td>{{ $siswa->alamat->provinsi }}</td>
                </tr>
                <tr>
                    <th>Kota / Kabupaten</th>
                    <td>{{ $siswa->alamat->kota }}</td>
                </tr>
                <tr>
                    <th>Kecamatan</th>
                    <td>{{ $siswa->alamat->kecamatan }}</td>
                </tr>
                <tr>
                    <th>Alamat Lengkap</th>
                    <td>RT {{ $siswa->alamat->rt }} RW {{ $siswa->alamat->rw }}, {{ $siswa->alamat->alamat }},
                        Kode Pos {{ $siswa->alamat->kode_pos }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
