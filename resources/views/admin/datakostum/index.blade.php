@extends('admin.layouts.dataBarang')

@section('data-barang')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Kostum</h3>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                        <a href="{{ route('export-costumes') }}" class="btn btn-success"><i class="bi bi-file-earmark-arrow-down-fill"></i>Excel</a>
                        <a href="{{ route('export-costumes') }}" class="btn btn-danger"><i class="bi bi-file-earmark-arrow-down-fill"></i>PDF</a>
                            <div class="me-2 py-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCostumeModal"><i class="bi bi-plus"></i> Tambah Kostum</button>
                                @include('admin.datakostum.modal.create')
                            </div>
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Gambar Kostum</th>
                                        <th>ID Kostum</th>
                                        <th>Nama Kostum</th>
                                        <th>Karakter</th>
                                        <th>Anime</th>
                                        <th>Size</th>
                                        <th>Price per day</th>
                                        <th>Qty</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($costumes as $costum)
                                    <tr>
                                        <td><img src="{{ asset('storage/'.$costum->image_kostum) }}" alt="" style="width: 5rem;"></td>
                                        <td>{{ $costum->id }}</td>
                                        <td>{{ $costum->nama_kostum }}</td>
                                        <td>{{ $costum->karakter }}</td>
                                        <td>{{ $costum->anime }}</td>
                                        <td>{{ $costum->size}}</td>
                                        <td>{{ "Rp " . number_format($costum->price_per_day, 0, ',', '.') }}</td>
                                        <td>{{ $costum->quantity }}</td>
                                        <td>
                                            <span class="badge @if ($costum->status == 'Tersedia') bg-success @else bg-danger @endif">{{ $costum->status }}</span>
                                        </td>
                                        <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateCostumeModal{{ $costum->id }}"><i class="bi bi-pencil"></i></button>
                                        @include('admin.datakostum.modal.update', ['costum' => $costum])
                                        <form class="d-inline" action="{{ route('costumes.destroy', $costum->id )}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-light-info color-info"><i class="bi bi-exclamation-circle"></i> Data Kostum Kosong.</div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $costumes->links() }}
                        </div>
                    </div>

                </section>
            </div>
@endsection



