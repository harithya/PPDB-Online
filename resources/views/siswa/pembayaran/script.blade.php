<script>
    BaseUrl = $('meta[name="url"]').attr("content") + '/siswa/pembayaran/';

    $("#formAdd").on('submit', function(e) {
        e.preventDefault();
        const data = new FormData(this);
        const url = BaseUrl;
        _request({
            data: data,
            url: url,
            method: "POST",
            redirect: true,
            formName: "formAdd"
        });
        // refresh page
    });


    const condition = {{ user('guest')->status > MENUNGGU }}
    if (condition) {
        $('.form-control').attr('disabled', true);
    }
</script>
