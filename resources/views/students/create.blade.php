@extends('templates.default')

@php
$title = "Data Siswa";
$preTitle = "Tambah Data siswa";
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.store') }}" class="" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name')
                    is-invalid
                @enderror" name="example-text-input" placeholder="Tulis nama" required> @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label></label>
                <input type="text" name="address" class="form-control @error('name')
                is-invalid
            @enderror" name="example-text-input" placeholder="Tulis alamat" required> @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telpon</label>
                <input type="text" name="phone_number" class="form-control @error('name')
                is-invalid
            @enderror" name="example-text-input" placeholder="Tulis nomor telpon" required> @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="class" class="form-control @error('name')
                is-invalid
            @enderror" name="example-text-input" placeholder="Tulis nama kelas" required> @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection