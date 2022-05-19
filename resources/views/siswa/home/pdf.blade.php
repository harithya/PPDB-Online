<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="generator" content="Aspose.Words for .NET 17.1.0.0" />
    <title></title>
</head>

<body>
    <div>
        <div style="-aw-headerfooter-type:header-primary">
            <p style="margin-top:0pt; margin-left:0.65pt; margin-bottom:0pt; text-align:center; font-size:14pt">
                <img src="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Tut-Wuri-Handayani-PNG-Warna.png"
                    width="121" height="121" alt=""
                    style="margin-right:9pt; margin-left:9pt; -aw-left-pos:0pt; -aw-rel-hpos:margin; -aw-rel-vpos:paragraph; -aw-top-pos:0.6pt; -aw-wrap-type:through; float:left" /><span
                    style="font-family:'Times New Roman'">PEMERINTAH KABUPATEN CIAMIS</span>
            </p>
            <p style="margin-top:0pt; margin-left:49.65pt; margin-bottom:0pt; text-align:center; font-size:14pt"><span
                    style="font-family:'Times New Roman'">DINAS PENDIDIKAN</span></p>
            <p style="margin-top:0pt; margin-left:49.65pt; margin-bottom:0pt; text-align:center; font-size:18pt"><span
                    style="font-family:'Times New Roman'; font-weight:bold">SEKOLAH MENENGAH NEGERI 10 CIAMIS</span></p>
            <p style="margin-top:0pt; margin-left:49.65pt; margin-bottom:0pt; text-align:center; font-size:12pt"><span
                    style="font-family:'Times New Roman'">Jl. Ir. H Juanda Blk. No. 272 Telp. (0265) 774763 Ciamis
                    46211</span></p>
            <p style="margin-top:0pt; margin-left:49.65pt; margin-bottom:0pt; text-align:center; font-size:12pt"><span
                    style="font-family:'Times New Roman'">E-mail : </span><a href="mailto:sdnegeri10ciamis@gmail.com"
                    style="text-decoration:none"><span
                        style="font-family:'Times New Roman'; text-decoration:underline; color:#0563c1">smpnegri10ciamis@gmail.com</span></a><span
                    style="font-family:'Times New Roman'"> Terakreditasi </span><span
                    style="font-family:'Times New Roman'">“A</span><span style="font-family:'Times New Roman'">”</span>
            </p>
            <p style="margin-top:0pt; margin-left:49.65pt; margin-bottom:0pt; text-align:center; font-size:12pt"><span
                    style="font-family:'Times New Roman'">&#xa0;</span></p>
            <p
                style="margin-top:0pt; margin-bottom:0pt; border-top:4.5pt solid #000000; padding-top:1pt; font-size:12pt">
                <span style="font-family:'Times New Roman'">&#xa0;</span>
            </p>
        </div>
        <p style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">SURAT KETERANGAN</span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Yang bertanda tangan dibawah ini Kepala SMPN 10 Ciamis menerangkan
                dibawah ini sebagai berikut :</span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Kode Peserta</span><span
                style="width:49.76pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:113.4pt">&#xa0;</span><span
                style="font-family:'Times New Roman'">: <span
                    style="margin-left: 20px;">{{ $siswa->nisn }}</span></span></p>

        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Nama </span><span
                style="width:81.75pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:113.4pt">&#xa0;</span><span
                style="font-family:'Times New Roman'">: <span
                    style="margin-left: 20px;">{{ $siswa->nama }}</span></span>
        </p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Tempat/ Tgl Lahir</span><span
                style="width:24.77pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:113.4pt">&#xa0;</span><span
                style="font-family:'Times New Roman'">: <span style="margin-left: 20px;">{{ $siswa->tempat_lahir }},
                    {{ formatDate($siswa->tanggal_lahir) }}</span></span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Jenis Kelamin</span><span
                style="width:45.08pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:113.4pt">&#xa0;</span><span
                style="font-family:'Times New Roman'">: <span style="margin-left: 20px;">
                    {{ $siswa->jenis_kelamin === 1 ? 'Laki-Laki' : 'Perempuan' }}</span></span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">Asal Sekolah</span><span
                style="width:49.74pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:113.4pt">&#xa0;</span><span
                style="font-family:'Times New Roman'">: <span
                    style="margin-left: 20px;">{{ $siswa->asal_sekolah }}</span></span>
        </p>
        <div class="berkas">
            <img src="{{ asset('pdf') }}/afmoi-ec7v3.002.png" width="319" height="70" alt="" />
        </div>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p style="margin-top:0pt; margin-left:311.85pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p
            style="margin-top:0pt; margin-left:311.85pt; text-align: right; margin-bottom:8pt; line-height:108%; font-size:12pt">
            <span style="font-family:'Times New Roman'; text-align: right;">Ciamis, 24 Januari 2022</span>
        </p>
        <p
            style="margin-top:0pt; margin-left:311.85pt; text-align: right; margin-bottom:8pt; line-height:108%; font-size:12pt">
            <span style="font-family:'Times New Roman'">Kepala SMPN 10 Ciamis</span>
        </p>
        <p style="margin-top:0pt; margin-left:311.85pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p style="margin-top:0pt; margin-left:311.85pt; margin-bottom:8pt; line-height:108%; font-size:12pt"><span
                style="font-family:'Times New Roman'">&#xa0;</span></p>
        <p
            style="margin-top:0pt; text-align: right; margin-left:311.85pt; margin-bottom:8pt; line-height:108%; font-size:12pt">
            <span style="font-family:'Times New Roman'; font-weight:bold; text-decoration:underline">Iis Rohayati,
                S.Pd.,SD.</span>
        </p>
        <p
            style="margin-top:0pt; text-align: right; margin-left:311.85pt; margin-bottom:8pt; line-height:108%; font-size:12pt">
            <span style="font-family:'Times New Roman'">NIP 196307031983052002</span>
        </p>
        <div style="-aw-headerfooter-type:footer-primary">
            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt"><span style="font-family:'µÈÏß'">&#xa0;</span>
            </p>
            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt"><span style="font-family:'µÈÏß'">&#xa0;</span>
            </p>
        </div>
    </div>
    <style>
        .berkas {
            width: "100%";
            margin-top: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</body>

</html>
