@extends('admin.layouts.logSewaKostum')

@section('log-sewa-kostum')
    <!-- Borderless table start -->
    <section class="section">
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Log Sewa Kostum</h4>
                    </div>
                    <div class="card-content">

                        <!-- table with no border -->
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>ID Kostum</th>
                                        <th>No Sewa</th>
                                        <th>Nama penyewa</th>
                                        <th>No HP</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">COSU34</td>
                                        <td class="text-bold-500">67</td>
                                        <td>Fajar</td>
                                        <td>088123123213</td>
                                        <td>12 06 2024</td>
                                        <td>15 06 2024</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">COSU35</td>
                                        <td class="text-bold-500">68</td>
                                        <td>Icel</td>
                                        <td>087324324324</td>
                                        <td>25 05 2024</td>
                                        <td>28 05 2024</td>
                                    </tr>
                                    <tr>
                                        <td class="text-bold-500">COSU63</td>
                                        <td class="text-bold-500">76</td>
                                        <td>Erinn</td>
                                        <td>087343242334</td>
                                        <td>15 06 2024</td>
                                        <td>18 06 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Borderless table end -->
@endsection
