<script>
    $(document).ready(function() {

        BaseUrl = BaseUrl + '/siswa';
        //render datatable
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: BaseUrl,
                data: {
                    status: "{{ request()->status }}",
                    penghasilan: "{{ request()->penghasilan }}",
                    pekerjaan: "{{ request()->pekerjaan }}",
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    "mData": "nisn",
                    render: function(data, type, row) {
                        return data ?? '-';
                    }
                },
                {
                    data: "nama"
                },
                {
                    "mData": "jenis_kelamin",
                    render: function(data, type, row) {
                        if (data == 1) {
                            return "Laki Laki"
                        } else if (data == 2) {
                            return "Perempuan"
                        } else {
                            return "-"
                        }
                    }
                },
                {
                    "mData": "status",
                    render: function(data, type, row) {
                        if (data == "{{ BARU }}") {
                            return `<div class='badge bg-secondary'>Pendaftar Baru</div>`
                        } else if (data == "{{ MENUNGGU }}") {
                            return "<div class='badge bg-info'>Belum Melakukan Pembayaran</div>"
                        } else if (data == "{{ PENGECEKAN }}") {
                            return "<div class='badge bg-warning'>Menunggu Pengecekan</div>"
                        } else if (data == "{{ DITERIMA }}") {
                            return "<div class='badge bg-success'>Diterima</div>"
                        } else if (data == "{{ DITOLAK }}") {
                            return "<div class='badge bg-danger'>Ditolak</div>"
                        } else {
                            return "-"
                        }
                    }
                },
                {
                    "mData": "kecamatan",
                    render: function(data, type, row) {
                        if (data != null) {
                            return data + ' / ' + row.kota
                        } else {
                            return "-"
                        }
                    }
                },
                {
                    "mData": "id",
                    render: function(data, type, row) {
                        return `<div class="dropdown crud-dropdown">
                            <a href="${BaseUrl}/${data}" class="btn btn-transparent dropdown-toggle" type="button">
                            <i class="fas fa-search"></i>
                            </a>
                        </div>`;
                    }
                },
            ]
        });
    })
</script>
