@extends('admin.layouts.dataSewaKostum')

@section('data-sewa-kostum')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data penyewaan kostum</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('export-sewa-kostum') }}" class="btn btn-success"><i class="bi bi-file-earmark-arrow-down-fill"></i>Excel</a>
                            <a href="{{ route('export-costumes') }}" class="btn btn-danger"><i class="bi bi-file-earmark-arrow-down-fill"></i>PDF</a>
                            <div class="me-2 py-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewWaifuModal"><i class="bi bi-plus"></i> Tambah sewaan</button>
                                @include('admin.datakostum.modal.create')
                            </div>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID Kostum</th>
                                        <th>Nama penyewa</th>
                                        <th>No HP</th>
                                        <th>Kota</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Kode Pos</th>
                                        <th>Alamat</th>
                                        <th>Tgl Pinjam</th>
                                        {{-- <th>Tgl Kembali</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataSewa as $item)
                                    <tr>
                                        <td>{{ $item->kostum_id }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->kota }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        <td>{{ $item->kelurahan }}</td>
                                        <td>{{ $item->kode_pos }}</td>
                                        <td>{{ $item->alamat_lengkap }}</td>
                                        <td>{{ $item->tgl_pinjam }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#"><i class="bi bi-pencil"></i></button>
                                            {{-- @include('admin.datakostum.modal.update', ['item' => $item]) --}}
                                            <button type="submit" href="#" class="btn icon icon-left btn-success"><i class="bi bi-check"></i></button>
                                            </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-light-info color-info"><i class="bi bi-exclamation-circle"></i> Data Kostum Kosong.</div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $dataSewa->links() }}
                        </div>
                    </div>

                </section>
            </div>
@endsection



