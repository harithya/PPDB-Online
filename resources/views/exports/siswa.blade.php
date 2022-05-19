<table>
    <thead>
        <tr>
            <th align="center" style="font-weight: bold;" colspan="13">Data Siswa Pendaftar SMAN 10 Ciamis</th>
        </tr>
        <tr>
            <th align="center" style="font-weight: bold;" colspan="13">Penerimaan Peserta Didik Baru 2022</th>
        </tr>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Status</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Pendapatan Orang Tua</th>
            <th>Alamat</th>
            <th>Tanggal Pendaftaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $key => $val)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $val->nik }}</td>
                <td>{{ $val->nisn }}</td>
                <td>{{ $val->nama }}</td>
                <td>{{ $val->tempat_lahir . ' ' . formatDate($val->tanggal_lahir) }}</td>
                <td>{{ $val->jenis_kelamin === 1 ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $val->asal_sekolah }}</td>
                <td>
                    @if ($val->status == BARU)
                        Pendaftar Baru
                    @elseif ($val->status == MENUNGGU)
                        Belum Melakukan Pembayaran
                    @elseif ($val->status == PENGECEKAN)
                        Menunggu Pengecekan
                    @elseif ($val->status == DITERIMA)
                        Diterima
                    @elseif ($val->status == DITOLAK)
                        Ditolak
                    @else
                        -
                    @endif
                </td>
                <td>{{ $val->pekerjaan }}</td>
                <td>{{ $val->penghasilan }}</td>
                <td>{{ $val->kecamatan . ' ' . $val->kota }}</td>
                <td>{{ formatDate($val->tanggal) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
