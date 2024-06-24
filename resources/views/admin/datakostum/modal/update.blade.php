    <!--Modal Update data kostum -->
    <div class="modal fade text-left" id="updateCostumeModal{{ $costum->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Update Data Kostum</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('costumes.update', $costum->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">
                        <label for="name">Nama Kostum: </label>
                        <div class="form-group">
                            <input id="name" type="text" placeholder="Nama Kostum.."
                                class="form-control @error('nama_kostum') is-invalid @enderror"
                                value="{{ old('nama_kostum', $costum->nama_kostum) }}" name="nama_kostum">
                            @error('nama_kostum')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="character">Karakter: </label>
                        <div class="form-group">
                            <input id="character" type="text" placeholder="Karakter.."
                                class="form-control @error('karakter') is-invalid @enderror" value="{{ old('karakter', $costum->karakter) }}"
                                name="karakter">
                            @error('karakter')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="anime">Anime: </label>
                        <div class="form-group">
                            <input id="anime" type="text" placeholder="Anime.."
                                class="form-control @error('anime') is-invalid @enderror" value="{{ old('anime', $costum->anime) }}"
                                name="anime">
                            @error('anime')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="size">Size: </label>
                        <div class="form-group">
                            <fieldset class="form-group">
                                <select class="form-select @error('size') is-invalid @enderror" name="size"
                                    id="size">
                                    <option value="">Pilih ukuran..</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>

                                @error('size')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </fieldset>
                        </div>
                        <label for="price_per_day">Price /day: </label>
                        <div class="form-group">
                            <input id="price_per_day" type="text" placeholder="100.000"
                                class="form-control @error('price_per_day') is-invalid @enderror"
                                value="{{ old('price_per_day', number_format($costum->price_per_day, 0, ',', '.')) }}" name="price_per_day">

                            @error('price_per_day')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <label for="quantity">quantity: </label>
                        <div class="form-group">
                            <input id="quantity" type="text" placeholder="Jumlah"
                                class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $costum->quantity) }}" name="quantity">

                            @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                        <label for="image_kostum">Gambar Kostum: </label>
                        <div class="form-group">
                            <input type="file" class="basic-filepond @error('image_kostum') is-invalid @enderror" id="image_kostum" name="image_kostum">
                            @error('image_kostum')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ms-1" id="success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>