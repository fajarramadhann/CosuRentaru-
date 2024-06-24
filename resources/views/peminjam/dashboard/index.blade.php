{{-- Dashboard Content --}}

@extends('peminjam.layouts.master')

@section('content')
    <div class="page-heading">
        <h3>Selamat datang, {{ Auth::user()->name }}</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <h5 class="text-muted font-semibold">Silahkan pilih kostum dan peralatan cosplay yang ingin Kamu sewa!</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
