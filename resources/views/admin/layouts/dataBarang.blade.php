@include('admin.partials.header')
@include('sweetalert::alert')
<body>
    @include('admin.partials.navbar')
    <div id="app">
        @include('admin.partials.sidebar')
        <div id="main">

            @yield('data-barang')

            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.scripts')
    {{-- Fileupload --}}
<script src="{{ asset('template/assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js')}}"></script>
<script src="{{ asset('template/assets/extensions/filepond/filepond.js')}}"></script>
<script src="{{ asset('template/assets/extensions/toastify-js/src/toastify.js')}}"></script>
<script src="{{ asset('template/assets/static/js/pages/filepond.js')}}"></script>
</body>