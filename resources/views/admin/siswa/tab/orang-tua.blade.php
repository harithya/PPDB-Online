<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div>
            <table class="table">
                <tr>
                    <th>Nama Orang Tua</th>
                    <td>{{ $siswa->orangTua->nama }}</td>
                </tr>
                <tr>
                    <th>Nomor Kontak</th>
                    <td>{{ $siswa->orangTua->no_kontak }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $siswa->orangTua->status == 1 ? 'Orang Tua' : 'Wali' }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>{{ $siswa->orangTua->pekerjaan }}</td>
                </tr>
                <tr>
                    <th>Penghasilan</th>
                    <td>{{ $siswa->orangTua->penghasilan }}</td>
                </tr>

            </table>
        </div>
    </div>
</div>
