@extends('layouts.admin')
@section('page-title')
    {{ __('Pengukuran') }}
@endsection

@section('breadcrumb')
    {{--  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>  --}}
    <li class="breadcrumb-item"><a href="{{ route('permohonan.index') }}">{{ __('Permohonan') }}</a></li>
    <li class="breadcrumb-item">{{ __('Pengukuran ') }}</li>
@endsection
@push('script-page')
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.repeater.min.js') }}"></script>
@endpush
@section('content')
    <div class="row">
        <form id="form-data">
            <div class="col-12">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">No Berkas</label>
                                    <input class="form-control" type="text" name="no_berkas" id="no_berkas"
                                        placeholder="Masukkan no berkas">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Kecamatan</label>
                                    <select class="form-control form-control select2" id="kecamatan" name="kecamatan"
                                        style="width: 100%">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">DI 305</label>
                                    <input class="form-control" type="text" name="di_305" id="di_305"
                                        placeholder="Masukkan DI 305">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Desa</label>
                                    <select class="form-control form-control select2" id="desa" name="desa"
                                        style="width: 100%">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">DI 302</label>
                                    <input class="form-control" type="text" name="di_302" id="di_302"
                                        placeholder="Masukkan DI 302">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Luas (m2)</label>
                                    <input class="form-control" type="number" name="luas" id="luas"
                                        placeholder="Masukkan Luas">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Mulai Pengukuran</label>
                                            <input class="form-control " type="date" name="tanggal_mulai_pengukuran"
                                                id="tanggal_mulai_pengukuran">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="form-label">Tanggal Selesai Pengukuran</label>
                                            <input class="form-control " type="date" name="tanggal_berakhir_pengukuran"
                                                id="tanggal_berakhir_pengukuran">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">No Surat</label>
                                    <input class="form-control" type="text" name="no_surat" id="no_surat"
                                        placeholder="Masukkan no surat">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Nama Pemohon</label>
                                    <input class="form-control" type="text" name="nama_pemohon" id="nama_pemohon"
                                        placeholder="Masukkan nama pemohon">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="form-label">Jenis Permohonan</label>
                                    <select class="form-control form-control" name="jenis_kegiatan" id="jenis_kegiatan"
                                        style="width: 100%">

                                        <option value="">Pilih</option>
                                        <option value="Penggabungan">Penggabungan</option>
                                        <option value="Pemecahan">Pemecahan</option>
                                        <option value="Pengukuran">Pengukuran dan Pemetaan Kadastral
                                        </option>
                                        <option value="Penataan Batas">Penataan Batas</option>
                                        <option value="Pengembalian Batas">Pengembalian Batas</option>
                                        <option value="Permohonan SK">Permohonan SK</option>
                                        <option value="Konversi">Konversi</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row justify-content-center mb-5">

                            <div class="col-10">
                                <!-- outer repeater -->
                                <div class="container mt-5 repeater">
                                    <!--outer repeater-->
                                    <div data-repeater-list="petugas_ukur">
                                        <div data-repeater-item>
                                            <!-- innner repeater -->

                                            <div data-repeater-list="inner-list">
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Petugas Ukur
                                                                </label>
                                                                <select class="form-control form-control petugas_ukur"
                                                                    name="petugas_ukur" style="width: 100%">
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label">Pendamping
                                                                </label>
                                                                <select class="form-control form-control pendamping"
                                                                    name="pendamping" style="width: 100%">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 mt-4">

                                                            <button data-repeater-delete style="border-radius: 20px"
                                                                class="btn btn-outline-secondary btn-sm">
                                                                <i class="fas fa-minus"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <button data-repeater-create type="button" class="btn btn-outline-primary">Tambah
                                        Petugas Ukur</button>
                                </div>


                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mx-2">Cancel</button>
                            <button type="button" class="btn btn-primary " id="btn-submit">Kirim Permohonan</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
@push('script-page')
    @include('permohonan.script')
    <script>
        // Untuk No Berkas
        var noBerkasPrefix = "1235/St-/";
        var noBerkasSuffix = "/VII/2024";

        // Set initial value for No Berkas input
        $('#no_berkas').val(noBerkasPrefix + "..." + noBerkasSuffix);

        // Event handler untuk input No Berkas
        $('#no_berkas').on('input', function() {
            var inputVal = $(this).val();
            var editablePart = inputVal.substring(noBerkasPrefix.length, inputVal.length - noBerkasSuffix.length);
            $(this).val(noBerkasPrefix + editablePart + noBerkasSuffix);
        });

        $('#no_berkas').on('focus', function() {
            var input = this;
            // Set posisi kursor di bagian yang dapat diubah
            setTimeout(function() {
                input.setSelectionRange(noBerkasPrefix.length, input.value.length - noBerkasSuffix.length);
            }, 0);
        });

        // Untuk No Surat
        var noSuratPrefix = "1235/St-22.02/VII/";
        var noSuratSuffix = ""; // No suffix untuk No Surat

        // Set initial value for No Surat input
        $('#no_surat').val(noSuratPrefix + "....");

        // Event handler untuk input No Surat
        $('#no_surat').on('input', function() {
            var inputVal = $(this).val();
            var editablePart = inputVal.substring(noSuratPrefix.length);
            $(this).val(noSuratPrefix + editablePart);
        });

        $('#no_surat').on('focus', function() {
            var input = this;
            // Set posisi kursor di bagian yang dapat diubah
            setTimeout(function() {
                input.setSelectionRange(noSuratPrefix.length, input.value.length);
            }, 0);
        });

        $(document).ready(function() {
            loadKecamatan();
            // Initialize Select2 for the first repeater row on page load
            initializeSelect2($('.petugas_ukur, .pendamping'));

            $(document).on('click', '#btn-submit', function(e) {
                e.preventDefault();
                $('.text-danger').remove();
                $(".form-group").removeClass('has-error has-feedback');
                var url = "{{ $url }}";
                var form = $('#form-data')[0];
                var formData = new FormData(form);
                var findForm = $("#form-data");

                // Format tanggal_lahir to d-m-Y using jQuery and Moment.js
                var tanggalLahirInput = $('input[name="tanggal_lahir"]');
                var tanggalLahirValue = tanggalLahirInput.val();
                if (tanggalLahirValue) {
                    var formattedDate = moment(tanggalLahirValue).format('DD-MM-YYYY');
                    formData.set('tanggal_lahir', formattedDate);
                }

                swal({
                    title: "Anda Yakin?",
                    text: "Proses tidak dapat dibatalkan",
                    icon: "warning",
                    buttons: [
                        'Tidak, Batalkan!',
                        'Ya, Saya yakin!'
                    ],
                    dangerMode: true,
                }).then(function(isConfirm) {
                    if (isConfirm) {
                        let ajaxPost = ajaxRequest(url, 'POST', formData).done(function(res) {
                            console.log('res')
                            swal({
                                icon: 'success',
                                title: res.message,
                                showConfirmButton: false,
                            }).then(function() {
                                window.location.replace(
                                    "{{ route('permohonan.index') }}");
                            });

                            show_toastr('error', xhr.responseJSON?.message);

                        })
                        ajaxPost.fail(function(e) {
                            console.log('e', e);
                            swal({
                                icon: 'warning',
                                title: e.responseJSON.message,
                                showConfirmButton: false,
                            });
                            if (parseInt(e.status) == 422) {
                                $.each(e.responseJSON.errors, function(elem, messages) {
                                    findForm.find('#' + elem).after(
                                        '<p class="text-danger text-sm">' +
                                        messages.join('') + '</p>');
                                    //ADD HAS FEEDBACK CLASS
                                    findForm.find('#' + elem).closest(
                                        '.form-group').addClass(
                                        "has-error has-feedback");

                                });
                            }
                        })
                    }
                })

            })




        });
    </script>
@endpush
