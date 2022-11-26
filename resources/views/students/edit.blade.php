@extends('templates.default')

@php
$title = "Data Siswa";
$preTitle = "Edit Data Siswa";
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('students.update', $student->id) }}" class="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" name="example-text-input" placeholder="Tulis nama"
                    value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label></label>
                <input type="text" name="address" class="form-control" name="example-text-input"
                    placeholder="Tulis alamat" value="{{ $student->address }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telpon</label>
                <input type="text" name="phone_number" class="form-control" name="example-text-input"
                    placeholder="Tulis nomor telpon" value="{{ $student->phone_number }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="class" class="form-control" name="example-text-input"
                    placeholder="Tulis nama kelas" value="{{ $student->class }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection