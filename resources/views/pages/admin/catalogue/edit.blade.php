@extends('layout.admin')
@section('content')
    <div class="container-fluid" style="margin-top: 20px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Catalogue</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
        <form method="POST" action="{{route('catalogue.update', $item->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <h4>Name</h4>
            <div class="input-group mb-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default " id="name" name="name">
                  </div>
            <h4>Name</h4>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image"
                  name="image" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
            <div class="d-flex justify-content-start" style="margin: 0">
                <button class="btn btn-warning btn-sm" type="submit" style="padding: 5px 20px; margin: 0 5px;" >Edit</button>
            </div>
        </form>
    </div>
@endsection
