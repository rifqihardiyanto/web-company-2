@extends('dashboard.layout.index')

@section('title', 'Management')

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
                    <form action={{ route('management.update', $management->id) }} class="form-management modal-content" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Nama</label>
                                    <input type="text" class="form-control"
                                        placeholder=" Name" value="{{ $management->nama }}" name="nama" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control"
                                        placeholder=" Jabatan" value="{{ $management->jabatan }}" name="jabatan" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Email</label>
                                    <input type="text" class="form-control"
                                        placeholder=" Email" value="{{ $management->email }}" name="email" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" />
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
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>{{ $management->nama }}</td>
                            <td>{{ $management->jabatan }}</td>
                            <td>{{ $management->email }}</td>
                            <td>
                                <img src="{{ asset('uploads/' . $management->gambar) }}" width="100" height="100" alt="">
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

