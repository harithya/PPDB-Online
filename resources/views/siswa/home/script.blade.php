<script>
    BaseUrl = $('meta[name="url"]').attr("content") + '/siswa/';

    $(document).ready(function() {
        $("#form-horizontal").steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            onStepChanging: (e, currentIndex) => {
                switch (currentIndex) {
                    case 0:
                        const identitasData = $("#form-identitas").serialize();
                        const identitas = postData(identitasData, "form-identitas", "identitas")
                        return identitas.responseJSON.status ? true : false;
                        break;

                    case 1:
                        const orangTuaData = $("#form-orang-tua").serialize();
                        const orangTua = postData(orangTuaData, "form-orang-tua", 'orang-tua')
                        return orangTua.responseJSON.status ? true : false;
                        break;
                    case 2:
                        const alamatData = $("#form-alamat").serialize();
                        const alamat = postData(alamatData, "form-alamat", 'alamat')
                        return alamat.responseJSON.status ? true : false;
                        break
                    default:
                        break;
                }
            }
        })
    })

    const postData = (data, selector, url) => {
        return $.ajax({
            method: "POST",
            data: data,
            url: BaseUrl + url,
            async: false,
            beforeSend: function() {
                resetForm()
            },
            success: function(res) {
                _alert("success", res.message)
                return true
            },
            error: function(data) {
                const result = data.responseJSON;
                validationCheck(result, selector);
                return false;
            }
        })
    }

    @if ($alamat != null)
        const onLoad = async () => {
        await getKota(".kota", '{{ optional($alamat)->provinsi_id }}');
        $(".kota option[value='" + {{ optional($alamat)->kota_id }} + "']").prop('selected', true);
        await getKecamatan('.kecamatan', '{{ optional($alamat)->kota_id }}')
        $(".kecamatan option[value='" + {{ optional($alamat)->kecamatan_id }} + "']").prop('selected', true);
        }
        onLoad();
    @endif
</script>
