<script>
    BaseUrl = $('meta[name="url"]').attr("content") + '/siswa/pembayaran/';

    $("#formAdd").on('submit', function(e) {
        e.preventDefault();
        const data = new FormData(this);
        const url = BaseUrl;
        _insert(url, data);
    });
</script>
