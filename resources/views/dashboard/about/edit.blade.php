@extends('dashboard.layout.index')

@section('title', 'About')

@section('container')

    <!-- Bootstrap Table with Header - Dark -->
    <!-- Slide from Top Modal -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                    <form action={{ route('about.update', $about->id) }} class="form-about modal-content"
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
                                        value="{{ $about->judul }}" name="judul" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar 1 (950x640)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_1" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar 2 (350x300)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_2" />
                                </div>
                            </div>
                            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ $about->deskripsi }}">
                            <trix-editor input="deskripsi"></trix-editor>
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
                        <td class="align-middle"><small class="text-light fw-semibold">Judul</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $about->judul }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Deskripsi</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {!! $about->deskripsi !!}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Foto</small></td>
                        <td>
                            <img src="{{ asset('uploads/' . $about->gambar_1) }}" width="100" height="100"
                                alt="" style="left: auto;">
                            <img src="{{ asset('uploads/' . $about->gambar_2) }}" width="100" height="100"
                                alt="" style="left: auto;">
                        </td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection
