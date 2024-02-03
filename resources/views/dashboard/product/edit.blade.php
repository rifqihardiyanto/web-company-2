@extends('dashboard.layout.index')

@section('title', 'Produk')

@section('container')

    <!-- Bootstrap Table with Header - Dark -->
    <!-- Slide from Top Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 modal-tambah" data-bs-toggle="modal" data-bs-target="#modal-form">
                Edit @yield('title')
            </button>

            <!-- Modal -->
            <div class="modal modal-top fade" id="modal-form" tabindex="-1">
                <div class="modal-dialog">
                    <form action={{ route('product.update', $product->id) }} class="form-Kategori modal-content" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Kategori &#42;</label>
                                <select class="form-select" id="id_kategori" name="id_kategori" required
                                    aria-label="Default select example">
                                    @foreach ($categories as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Nama @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Produk" value="{{ $product->nama_produk }}"
                                        name="nama_produk" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="row g-2 mb-3">
                                    <label for="formFile" class="form-label">Deskripsi 1</label>
                                    <input id="deskripsi_1" type="hidden" value="{!! $product->deskripsi_1  !!}" name="deskripsi_1">
                                    <trix-editor input="deskripsi_1"></trix-editor>
                                </div>
                                <div class="row g-2 mb-3">
                                    <label for="formFile" class="form-label">Deskripsi 2</label>
                                    <input id="deskripsi_2" type="hidden" value="{!! $product->deskripsi_2  !!}" name="deskripsi_2">
                                    <trix-editor input="deskripsi_2"></trix-editor>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (850 x 500)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_1" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (410 x 500)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_2" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (410 x 410)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_3" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (410 x 410)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_4" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (410 x 410)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_5" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <div class="col-lg">
        <div class="card mb-4">
            <h5 class="card-header">Paragraph</h5>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Nama Produk</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $product->nama_produk }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Kategori</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $product->category->nama_kategori }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Deskripsi</small></td>
                        <td class="py-4">
                            <p class="lead mb-0">
                                {!! $product->deskripsi_1  !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Deskripsi</small></td>
                        <td class="py-4">
                            <p class="lead mb-0">
                                {!! $product->deskripsi_2  !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Foto</small></td>
                            <td>
                                <img src="{{ asset('uploads/' . $product->gambar_1) }}" width="100" height="100" alt="" style="left: auto;">
                                <img src="{{ asset('uploads/' . $product->gambar_2) }}" width="100" height="100" alt="" style="left: auto;">
                                <img src="{{ asset('uploads/' . $product->gambar_3) }}" width="100" height="100" alt="" style="left: auto;">
                                <img src="{{ asset('uploads/' . $product->gambar_4) }}" width="100" height="100" alt="" style="left: auto;">
                            </td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

