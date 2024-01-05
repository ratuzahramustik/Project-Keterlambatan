@extends('layouts.template')

@section('content')
<br><br>
    @if (Session::get('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    <br>
    <div class="p-4">
        <a href="{{ route('student.create') }}" class="btn btn-secondary float-sm-end">Tambah Pengguna</a>
    </div>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rayon</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($students as $item)
                <tr>
                    {{-- name, type, price, stock disamakan dengan yang ada di migrations--}}
                    {{-- <td>{{ $no++ }}</td> --}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->rombel->rombel }}</td>
                    <td>{{ $item->rayon->rayon }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="#" class="btn btn-primary me-2 ">Edit</a>
                        <form action="#" method="post">
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
