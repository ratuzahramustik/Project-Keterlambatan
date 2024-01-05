@extends('layouts.template')

@section('content')
    @if (Session::get('alreadyAcces'))
    <div class="alert alert-danger">{{Session::get('alreadyAccess'); }}</div>
    @endif
    <br><br>
    <div class="jumbroton py-2 px-3">
        <h2 class="display" style="color: black;">
            Dashboard
        </h2>
        <p style="color: black;"><a href="/dashboard" class="nav-link px-0">Home</a> /Dashboard</p>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card h-100 shadow p-1 mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-tittle">Peserta Didik</h5>
                        <p class="card-text" style="margin-top: 15%; font-size: 1.5rem;">
                        <i class="fi fi-sr-user" style="margin-right:20px;"></i>
                        {{ App\Models\Student::count() }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow p-1 mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Administrator</h5>
                        <p class="card-text" style="margin-top: 15%; font-size: 1.5rem;">
                        <i class="fi fi-sr-user" style="margin-right:20px;"></i>
                        {{ App\Models\User::where('role', '=', 'admin')->count() }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow p-1 mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Pembimbing Siswa</h5>
                        <p class="card-text" style="margin-top: 15%; font-size: 1.5rem;">
                        <i class="fi fi-sr-user" style="margin-right:20px;"></i>
                        {{ App\Models\User::where('role', '=', 'admin')->count() }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card h-100 shadow p-1 mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Rombel</h5>
                        <p class="card=text" style="margin-top: 15%; font-size: 1.5rem;">
                        <i class="fi fi-br-bookmark" style="margin-right: 20px;">
                        {{ App\Models\Rombel::count() }}
                        </i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow p-1 mb-4 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Rayon</h5>
                        <p class="card-text" style="margin-top: 15%; font-size: 1.5rem;">
                        <i class="fi fi-br-bookmark" style="margin-right:20px;"></i>
                        {{ App\Models\User::count() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

  <style>
    .jumbroton.py-2.px-3 h4 p{
        color:black;
    }
</style>

