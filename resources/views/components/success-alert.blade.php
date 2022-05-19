<div class="card bg-success">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <div style="color: #f2f2f2;">
                    <h5 class="text-white mb-4">Selamat anda dinyatakan lulus seleksi</h5>
                    <p>
                        Kamu berhasil dan saya tahu ini baru permulaan, semoga kamu selalu merasa bahagia seperti hari
                        ini.
                        Untuk tahapan berikutnya persiapkan diri untuk melakukan Ujian tes yang akan dilakukan di
                        sekolah,
                        Semoga Berhasil ya 😇😇😇
                    </p>
                    <button class="btn btn-success pdf-generate mt-3" style="background-color: #3bad71;"><i
                            class="fas fa-download me-2"></i>Unduh Validasi Berkas</button>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <img src="{{ asset('assets/success.svg') }}" alt="" class="img-fluid mx-auto  d-block">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-xl" id="modal-document" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Dokumen Validasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="body-print" style="padding-right: 30px;">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@push('script')
    <script>
        $(".pdf-generate").on("click", function() {
            const url = "{{ url('siswa/pdf') }}";
            $(".modal-body").load("{{ url('siswa/pdf') }}")
            $("#modal-document").modal("show")
            $('.modal-body').printThis();

        })
    </script>
@endpush
