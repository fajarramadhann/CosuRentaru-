@include('peminjam.partials.header')

<body>
    @include('peminjam.partials.navbar')
    <div id="app">
        @include('peminjam.partials.sidebar')
        <div id="main">

            @yield('sewa-kostum')

          @include('peminjam.partials.footer')
        </div>
    </div>
    @include('peminjam.partials.scripts')
</body>

</html>
