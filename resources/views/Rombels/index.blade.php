@extends('layouts.template')

@section('content')
<br><br>
    @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <br>
    <div class="p-4">
        <a href="{{ route('rombel.create') }}" class="btn btn-secondary float-sm-end">Tambah Pengguna</a>
    </div>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Rombel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($rombels as $item)
                <tr>
                    {{-- name, type, price, stock disamakan dengan yang ada di migrations--}}
                    {{-- <td>{{ $no++ }}</td> --}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $item['rombel'] }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('rombel.edit', $item['id']) }}" class="btn btn-primary me-2 ">Edit</a>
                        <form action="{{ route('rombel.delete', $item['id']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
