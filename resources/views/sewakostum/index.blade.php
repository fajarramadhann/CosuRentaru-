@extends('admin.layouts.sewakostum')

@section('sewa-waifu')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Sewa Kostum</h3>
                    <p class="text-subtitle text-muted">Sewa Kostum untuk kebutuhan Cosplay Kamu!.</p>
                </div>
            </div>
        </div>
        <!-- Basic card section start -->
        <section id="content-types">
            <div class="row">
                @forelse ($sewaCostumes as $sewaCostume)
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img src="{{ asset('storage/' . $sewaCostume->image_kostum) }}" class="card-img rounded-2"
                                    alt="singleminded">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $sewaCostume->nama_kostum }}</h4>
                                    <span
                                        class="badge @if ($sewaCostume->status == 'Tersedia') bg-light-success @else bg-light-danger @endif mb-2">{{ $sewaCostume->status }}</span>
                                    <p class="m-0 p-0">Karakter: {{ $sewaCostume->karakter }}</p>
                                    <p class="m-0 p-0">Anime: {{ $sewaCostume->anime }}</p>
                                    <p class="m-0 p-0">Size: {{ $sewaCostume->size }}</p>
                                    <p class="m-0 p-0">Harga per hari: {{ "Rp " . number_format($sewaCostume->price_per_day, 0, ',', '.') }}</p>
                                    {{-- <form action=""> --}}
                                        <div class="d-flex justify-content-end">
                                            <a href="#" class="btn btn-primary">Sewa</a>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-light-info color-info"><i class="bi bi-exclamation-circle"></i>
                        Kostum sedang Kosong.</div>
                @endforelse
            </div>
            {{ $sewaCostumes->links() }}
        </section>
    </div>
    </section>
@endsection
