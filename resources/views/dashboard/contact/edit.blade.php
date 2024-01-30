@extends('dashboard.layout.index')

@section('title', 'Contact')

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
                    <form action={{ route('contact.update', $contact->id) }} class="form-about modal-content"
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
                                    <label for="nameSlideTop" class="form-label">No Support</label>
                                    <input type="text" class="form-control" placeholder="Enter Nomer"
                                        value="{{ $contact->nomor_support }}" name="nomor_support" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">No Konsultasi</label>
                                    <input type="text" class="form-control" placeholder="Enter Nomer"
                                        value="{{ $contact->nomor_konsultasi }}" name="nomor_konsultasi" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Email Support</label>
                                    <input type="text" class="form-control" placeholder="Enter Email"
                                        value="{{ $contact->email_support }}" name="email_support" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Enter Lokasi"
                                        value="{{ $contact->lokasi }}" name="lokasi" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="Enter Facebook"
                                        value="{{ $contact->facebook }}" name="facebook" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" placeholder="Enter Instagram"
                                        value="{{ $contact->instagram }}" name="instagram" />
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
                        <td class="align-middle"><small class="text-light fw-semibold">No Support</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->nomor_support }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">No Konsultasi</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->nomor_konsultasi }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Email Support</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->email_support }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Lokasi</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->lokasi }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Facebook</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->facebook }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Instagram</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $contact->instagram }}
                            </p>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection
