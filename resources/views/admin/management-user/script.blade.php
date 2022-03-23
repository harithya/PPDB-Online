<script>
    $(document).ready(function() {

        BaseUrl = BaseUrl + '/management-user';
        //render datatable
        $('#table').DataTable({
            lengthChange: false,
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: BaseUrl,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                },
                {
                    data: 'username',
                },
                {
                    "mData": "no_hp",
                    render: function(data, type, row) {
                        return data ?? '-';
                    }
                },
                {
                    "mData": "id",
                    render: function(data, type, row) {
                        return action(data);
                    }
                },
            ]
        });

        $("#formAdd").on('submit', function(e) {
            e.preventDefault();
            const data = new FormData(this);
            const url = BaseUrl;
            _insert(url, data);
        });

        $("#table").on('click', '.update', function(e) {
            e.preventDefault();
            const id = $(this).attr("data-id");
            const url = BaseUrl + '/' + id + "/edit";
            $.get(url, function(data) {
                $("#id").val(data.id);
                $("#nama").val(data.nama);
                $("#username").val(data.username);
                $("#no_hp").val(data.no_hp);
                // $("#el option[value='" + data.el + "']").prop('selected', true);
            });
            $("#modalAdd").modal('show');
        });

        // delete data
        $("#table").on('click', '.delete', function(e) {
            e.preventDefault();
            const id = $(this).attr("data-id");
            const url = BaseUrl + "/" + id;
            _delete(url);
        });
    })
</script>
