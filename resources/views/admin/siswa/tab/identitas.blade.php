<div class="row mt-5">
    <div class="col-md-6 offset-md-3">

        {{-- {{ $siswa->dokumen->ijazah? url('storage/' . $siswa->dokumen->ijazah): 'https://indonesiamengajar.org/images/placeholder.jpg' }} --}}
        <img src="https://indonesiamengajar.org/images/placeholder.jpg" class="avatar-lg mx-auto  rounded-circle">
        <div class="mt-3">
            <table class="table">
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $siswa->nama }}</td>
                </tr>
                <tr>
                    <th>Nomor Induk Kependudukan (NIK)</th>
                    <td>{{ $siswa->nik ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nomor Induk Siswa Nasional (NISN)</th>
                    <td>{{ $siswa->nisn ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Tempat Tanggal Lahir</th>
                    <td>{{ $siswa->tempat_lahir ?? '- ' }},
                        {{ $siswa->tanggal_lahir ? formatDate($siswa->tanggal_lahir) : '-' }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        @if ($siswa->jenis_kelamin)
                            {{ $siswa->jenis_kelamin === 1 ? 'Laki-Laki' : 'Perempuan' }}
                        @else
                            -
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $siswa->asal_sekolah ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nomor Handphone</th>
                    <td>{{ $siswa->no_hp ?? '-' }}</td>
                </tr>

            </table>
        </div>
    </div>
</div>
