@extends('dashboard.layout.index')


@section('title', 'Message')

@section('container')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <h5 class="card-header">Dashboard | @yield('title')</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                    @foreach ($messages as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>
                                <a class="btn btn-warning mb-3 modal-tambah"
                                    href="{{ url('dashboard/message/' . $data->id) }}">Lihat</a>
                                <form action="{{ url('dashboard/message/' . $data->id) }}" method="POST">
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

@endsection
