@include('peminjam.partials.header')
<link rel="stylesheet" href="./assets/compiled/css/error.css">

<body>

    <div id="error">


        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('template/assets/compiled/svg/error-403.svg') }}" alt="Not Found">
                    <h1 class="error-title">Forbidden</h1>
                    <p class="fs-5 text-gray-600">You are unauthorized to see this page.</p>
                    @php
                        $home = 'dashboard';
                        if(auth()->check()) {
                            if (auth()->user()->level === 'admin' || auth()->user()->level === 'manajemen') {
                                $home = 'admin.dashboard';
                            }
                        }
                    @endphp
                    <a href="{{ route($home) }}" class="btn btn-lg btn-outline-primary mt-3">Go Home</a>
                </div>
            </div>
        </div>


    </div>
</body>

</html>
