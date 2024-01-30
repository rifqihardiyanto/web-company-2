@extends('dashboard.layout.index')

@section('title', 'News')

@section('container')

    <!-- Bootstrap Table with Header - Dark -->
    <!-- Slide from Top Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 modal-tambah" data-bs-toggle="modal"
                data-bs-target="#modal-form">
                Edit @yield('title')
            </button>

            <!-- Modal -->
            <div class="modal modal-top fade" id="modal-form" tabindex="-1">
                <div class="modal-dialog">
                    <form action={{ route('news.update', $news->id) }} class="form-slider modal-content"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Slider"
                                        value="{{ $news->judul }}" name="judul" />
                                </div>
                                <div class="col mb-3" hidden>
                                    <label for="nameSlideTop" class="form-label">Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Slider"
                                        value="{{ $news->slug }}" name="slug" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Sub Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Judul" name="sub_judul"
                                        value="{{ $news->sub_judul }}" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Kategori &#42;</label>
                                <select class="form-select" id="id_kategori" name="id_kategori" required
                                    aria-label="Default select example">
                                    @foreach ($category as $data)
                                        <option value="{{ $data->id }}">{{ $data->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar 1</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_1" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar 2</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_2" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar 3</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_3" />
                                </div>
                            </div>
                            <input id="isi_1" type="hidden" name="isi_1" value="{{ $news->isi_1 }}">
                            <trix-editor input="isi_1"></trix-editor>
                            <input id="isi_3" type="hidden" name="isi_3" value="{{ $news->isi_3 }}">
                            <trix-editor input="isi_3"></trix-editor>
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

    <!-- Paragraph -->
    <div class="col-lg">
        <div class="card mb-4">
            <h5 class="card-header">Paragraph</h5>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Judul Berita</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $news->judul }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Sub Judul Berita</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $news->sub_judul }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Isi Pertama</small></td>
                        <td class="py-4">
                            <p class="lead mb-0">
                                {!! $news->isi_1 !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Muted text</small></td>
                        <td class="py-3">
                            <p class="text-muted mb-0">
                                {!! $news->isi_3 !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Foto</small></td>
                            <td>
                                <img src="{{ asset('uploads/' . $news->gambar_1) }}" width="100" height="100" alt="" style="left: auto;">
                                <img src="{{ asset('uploads/' . $news->gambar_2) }}" width="100" height="100" alt="" style="left: auto;">
                                <img src="{{ asset('uploads/' . $news->gambar_3) }}" width="100" height="100" alt="" style="left: auto;">
                            </td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
