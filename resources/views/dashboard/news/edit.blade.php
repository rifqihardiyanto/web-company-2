@extends('dashboard.layout.index')

@section('title', 'News')

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
                    <form action={{ route('news.update', $news->id) }} class="form-slider modal-content" enctype="multipart/form-data" method="POST">
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
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $news->judul }}" name="judul" />
                                </div>
                                <div class="col mb-3" hidden>
                                    <label for="nameSlideTop" class="form-label">Judul @yield('title')</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $news->slug }}" name="slug" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Sub Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Judul"
                                        name="sub_judul" value="{{ $news->sub_judul }}"/>
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
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $news->isi_1 }}" name="isi_1" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $news->isi_2 }}" name="isi_2" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $news->isi_3 }}" name="isi_3" />
                                </div>
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

    <div class="card">
        <h5 class="card-header">Dashboard | @yield('title')</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Judul @yield('title')</th>
                        <th>Sub Judul @yield('title')</th>
                        <th>Kategori</th>
                        <th>Deskripsi 1</th>
                        <th>Deskripsi 2</th>
                        <th>Deskripsi 3</th>
                        <th>Gambar 1</th>
                        <th>Gambar 2</th>
                        <th>Gambar 3</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>{{ $news->judul }}</td>
                            <td>{{ $news->sub_judul }}</td>
                            <td>{{ $news->categorynews->kategori }}</td>
                            <td style="white-space: normal !important;">{{ $news->isi_1 }}</td>
                            <td style="white-space: normal !important;">{{ $news->isi_2 }}</td>
                            <td style="white-space: normal !important;">{{ $news->isi_3 }}</td>
                            <td>
                                <img src="{{ asset('uploads/' . $news->gambar_1) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $news->gambar_2) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $news->gambar_3) }}" width="100" height="100" alt="">
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

