@extends('app')
@section('title', 'Qc Code Generator')
@section('content')
<div class="py-5">
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Link address</label>
          <input type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

