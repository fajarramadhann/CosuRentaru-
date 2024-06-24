@include('peminjam.partials.header')
<link rel="stylesheet" href="assets/extensions/flatpickr/flatpickr.min.css">

<body>
    @include('peminjam.partials.navbar')
    <div id="app">
        @include('peminjam.partials.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Sewa Kostum</h3>
                            <p class="text-subtitle text-muted">
                                Harap isi form berikut dengan benar untuk menyewa kostum.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('sewa-kostum.store') }}" method="POST" data-parsley-validate>
                                            @csrf
                                            <input type="hidden" name="kostum_id" value="{{ request('kostum_id') }}">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="nama-lengkap-column" class="form-label">Nama Lengkap</label>
                                                        <input type="text" id="nama-lengkap-column" class="form-control" placeholder="Nama Lengkap..." name="nama_lengkap" data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="nomor-hp-column" class="form-label">Nomor HP</label>
                                                        <input type="text" id="nomor-hp-column" class="form-control" placeholder="Nomor handphone/whatsapp" name="no_hp" data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="kota-column" class="form-label">Kota</label>
                                                        <input type="text" id="kota-column" class="form-control" placeholder="Kota..." name="kota" data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="kecamatan" class="form-label">Kecamatan</label>
                                                        <input type="text" id="kecamatan" class="form-control" name="kecamatan" placeholder="kecamatan..." data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="kelurahan-column" class="form-label">Kelurahan</label>
                                                        <input type="text" id="kelurahan-column" class="form-control" name="kelurahan" placeholder="kelurahan..." data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="kode-pos-column" class="form-label">Kode Pos</label>
                                                        <input type="text" id="kode-pos-column" class="form-control" name="kode_pos" placeholder="Kode Pos" data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="alamat-lengkap-column" class="form-label">Alamat Lengkap</label>
                                                        <textarea class="form-control" name="alamat_lengkap" id="alamat-lengkap-column" cols="30" rows="10" data-parsley-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group mandatory">
                                                        <label for="tanggal-pinjam-column" class="form-label">Tanggal Pinjam</label>
                                                        <input type="date" name="tgl_pinjam" class="form-control mb-3 flatpickr-no-config" placeholder="Select date.." data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-check mandatory">
                                                            <input type="checkbox" id="checkbox5" class="form-check-input" checked data-parsley-required="true" data-parsley-error-message="You have to accept our terms and conditions to proceed." />
                                                            <label for="checkbox5" class="form-check-label form-label">Saya menerima persyaratan dan ketentuan yang ada</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="button" class="btn btn-light-secondary me-1 mb-1">Batal</button>
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>

            @include('peminjam.partials.footer')
        </div>
    </div>
    @include('peminjam.partials.scripts')

</body>

</html>
