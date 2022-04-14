<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <div>
            <table class="table">
                <tr>
                    <th>Nama Pengirim</th>
                    <td>{{ optional($siswa->buktiPembayaran)->nama_pengirim }}</td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <td>{{ rupiah(optional($siswa->buktiPembayaran)->jumlah) }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ formatDate(optional($siswa->buktiPembayaran)->tanggal) }}</td>
                </tr>
                <tr>
                    <th>Nomor Rekening</th>
                    <td>{{ optional($siswa->buktiPembayaran)->no_rekening }} /
                        {{ optional($siswa->buktiPembayaran)->bank_pengirim }}
                    </td>
                </tr>
                <tr>
                    <th>Nomor Rekening</th>
                    <td>
                        <div class="form-group">
                            <div class="img-preview">
                                <img src="{{ optional($siswa->buktiPembayaran)->img_bukti? url('storage/' . optional($siswa->buktiPembayaran)->img_bukti): 'https://indonesiamengajar.org/images/placeholder.jpg' }}"
                                    id="preview_bukti_pembayaran"
                                    class="{{ optional($siswa->buktiPembayaran)->img_bukti ? 'img-thumbnail' : '' }}">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
