$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

$(document).ajaxStop(function () {
    $(".preloader").hide()
})

$(".preloader").hide()
$(".dropify").dropify();

$(".btn-add").on("click", function () {
    $("#id").val("");
    $("#formAdd").trigger("reset");
})

let BaseUrl = $('meta[name="base-url"]').attr("content")
let BASE_URL = $('meta[name="url"]').attr("content")

// $(".uang").mask("000.000.000.000", { reverse: true });

const _alert = (status, message) => {
    if (status == "success") {
        alertify.success(message);
    } else {
        alertify.error(message);
    }
};


const resetForm = () => {
    $(".form-control").removeClass("is-invalid");
    $(".invalid-feedback").remove();
};

const validationCheck = (result, form) => {
    if ($.isEmptyObject(result) == false) {
        _alert("danger", "Opps isian form tidak sesuai");
        $.each(result.errors, function (key, value) {
            $(`#${form} .form-control[name=${key}]`).after(
                `<div class="invalid-feedback">
               ${value}
              </div>`
            );
            $(`#${form} .form-control[name=${key}]`).addClass(
                "is-invalid"
            );
        });
    }
};

const _insert = (url, data) => {
    return $.ajax({
        type: "POST",
        url: url,
        contentType: false,
        processData: false,
        async: false,
        data: data,
        beforeSend: function (data) {
            resetForm();
            $(".preloader").show()
        },
        success: function (data) {
            $("#modalAdd").modal("hide");
            $("#table").DataTable().ajax.reload();
            if (data.status == true) {
                _alert("success", "Proses berhasil");
            }
            $("#formAdd").trigger("reset");
        },
        error: function (data) {
            const result = data.responseJSON;
            validationCheck(result, "formAdd");
        },
    });
};

const _delete = (url) => {
    let conf = confirm("Apakah Yakin ?");
    if (conf == true) {
        $.ajax({
            type: "delete",
            url: url,
            beforeSend: function (data) {
                $(".preloader").show()
            },
            success: function (data) {
                if (data.status == true) {
                    _alert("success", "Berhasil menghapus data");
                }
                $("#table").DataTable().ajax.reload();
            },
            error: function (data) {
                _alert("danger", "Gagal menghapus data");
            },
        });
    }

    return false;
};

const _update = (url, data) => {
    $.ajax({
        type: "POST",
        url: url,
        contentType: false,
        processData: false,
        data: data,
        beforeSend: function (data) {
            resetForm();
            $(".preloader").show()
        },
        success: function (data) {
            $("#modalUpdate").modal("hide");
            $("#table").DataTable().ajax.reload();
            if (data.status == true) {
                _alert("success", "Berhasil mengubah data");
            }
            $("#formUpdate").trigger("reset");
        },
        error: function (data) {
            const result = data.responseJSON;
            validationCheck(result, "formUpdate");
        },
    });
};

const _request = (param) => {
    $.ajax({
        type: param.method,
        url: param.url,
        contentType: false,
        processData: false,
        data: param.data,
        beforeSend: function (data) {
            resetForm();
            $(".preloader").show()
        },
        success: function (data) {
            if (data.status == true) {
                _alert("success", "Berhasil mengubah data");
            }
            if (param.redirect == true) {
                // window.history.back();
                const old = document.referrer;
                window.location.href = old
            }
        },
        error: function (data) {
            const result = data.responseJSON;
            validationCheck(result, param.formName);
        },
    });
};

function rupiah(angka) {
    var reverse = angka.toString().split("").reverse().join(""),
        ribuan = reverse.match(/\d{1,3}/g);
    ribuan = "Rp " + ribuan.join(".").split("").reverse().join("");
    return ribuan;
}

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
});

var activeTab = localStorage.getItem('activeTab');
if (activeTab) {
    $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
}

const action = (data, custom = "") => {
    return ` <div class="dropdown crud-dropdown">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fas fa-list-ul"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            ${custom}
            <a class="dropdown-item update" data-id="${data}"  href="#"><i class="fas fa-pencil-alt    me-2"></i> Update</a>
            <a class="dropdown-item delete" data-id="${data}"  href="#"> <i class="fas fa-trash  me-2"></i> Delete</a>
            </div>
        </div>`;
};

const actionWithUrl = (url, id, custom = "") => {
    return ` <div class="dropdown">
            <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fas fa-list-ul"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            ${custom}
            <a class="dropdown-item update"  href="${url + '/' + id + '/edit'}"><i class="fas fa-pencil-alt  mes-2"></i> Update</a>
            <a class="dropdown-item delete" data-id="${id}"> <i class="fas fa-trash  mes-2"></i> Delete</a>
            </div>
        </div>`;
};



const getKota = (selector, provinsiID) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: BASE_URL + "/ajax/kota/" + provinsiID,
            beforeSend: function () {
                $(selector).html(`<option value="">Loading..</option>`);
            },
            success: function (res) {
                $(selector).empty();
                $(selector).append(`<option value="">Pilih</option>`);
                for (let i = 0; i < res.length; i++) {
                    $(selector).append(
                        $("<option>", {
                            value: res[i].id,
                            text: res[i].kota
                        })
                    );
                }
                resolve(true);
            }
        });
    })
};

const getKecamatan = (selector, kotaID) => {
    return new Promise((resolve, reject) => {
        if (kotaID) {
            $.ajax({
                url: BASE_URL + "/ajax/kecamatan/" + kotaID,
                beforeSend: function () {
                    $(selector).html(`<option value="">Loading..</option>`);
                },
                success: function (res) {
                    $(selector).empty();
                    $(selector).append(`<option value="">Pilih</option>`);
                    for (let i = 0; i < res.length; i++) {
                        $(selector).append(
                            $("<option>", {
                                value: res[i].id,
                                text: res[i].kecamatan
                            })
                        );
                    }
                    resolve(true)
                }
            });
        }
    })
};

$(document).on("change", ".provinsi", async function () {
    // console.log("test")
    await getKota(".kota", $(this).val());
});

$(document).on('change', ".kota", async function () {
    await getKecamatan('.kecamatan', $(this).val())
})

$(document).on("change", ".file-input", function (e) {
    // preview image before upload
    const file = e.target.files[0];
    const getIdImage = $(this).attr("id");
    const reader = new FileReader();
    reader.onload = function (e) {
        $(`#preview_${getIdImage}`).attr("src", e.target.result);
        $(`#preview_${getIdImage}`).addClass("img-thumbnail");
    }
    reader.readAsDataURL(file);
})
