@extends('dashboard.layout.index')

@section('title', 'Message')

@section('container')


    <!-- Paragraph -->
    <div class="col-lg">
        <div class="card mb-4">
            <h5 class="card-header">Pesan</h5>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Nama</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $message->nama }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Email</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $message->email }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">No Handphone</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $message->no_hp }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Subject</small></td>
                        <td class="py-3">
                            <p class="mb-0">
                                {{ $message->subject }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle"><small class="text-light fw-semibold">Isi Pertama</small></td>
                        <td class="py-4">
                            <p class="lead mb-0">
                                {{ $message->pesan }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
