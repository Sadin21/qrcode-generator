@extends('app')
@section('title', 'Qc Code Generator')
@section('content')
<div class="py-5">
    <h1>Qr Code Genarator</h1>
    <table class="table mt-3">
        <a href="{{ route('create') }}" class="btn btn-primary mt-5">Tambah Data</a>
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Barcode</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($link as $l)
            <tr>
              <th scope="row">{{ $l->id }}</th>
              <th>{{ $l->name }}</th>
              <td>{{ $l->link }}</td>
              <td>{!! QrCode::size(100)->generate($l->link) !!}</td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Data Post belum Tersedia.
            </div>
            @endforelse
        </tbody>
      </table>
    {{-- {!! QrCode::size(300)->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9') !!} --}}
</div>
@endsection
