@extends('dashboard.layout.index')

@section('title', 'News')

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
                Tambah @yield('title')
            </button>

            <!-- Modal -->
            <div class="modal modal-top fade" id="modal-form" tabindex="-1">
                <div class="modal-dialog">
                    <form action={{ url('dashboard/news') }} class="form-blog modal-content" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Tambah @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Judul"
                                        name="judul" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Sub Judul @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Judul"
                                        name="sub_judul" />
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
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi 1</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi" name="isi_1"></textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi 2</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi" name="isi_2"></textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi 3</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi" name="isi_3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (850 x 500)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_1" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (370 x 250)</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_2" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar (370 x 250)</label>
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
                        <th>Gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                    @foreach ($news as $data)
                        <tr>
                            <td>{{ $data->judul }}</td>
                            <td>
                                <img src="{{ asset('uploads/' . $data->gambar_1) }}" width="100" height="100"
                                    alt="">
                            </td>
                            <td>
                                <a class="btn btn-warning mb-3 modal-tambah"
                                    href="{{ url('dashboard/news/' . $data->id) }}">Lihat</a>
                                <form action="{{ url('dashboard/news/' . $data->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger mb-3">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection
