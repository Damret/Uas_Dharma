@extends('layout.admin')
@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb" style="margin: 20px 0">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catalogue</li>
        </ol>
    </nav>
    <table class="table table-striped">
        <thead style="text-align: center">
          <tr>
            <th scope="col">Num</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=0; ?>
            @foreach ($datamusim as $musim)
                <tr>
                    <?php $no++; ?>
                    <th scope="row">Num</th>
                    <td>{{$no}}</td>
                    <td>{{$musim->$musim}}</td>
                    <td>{{$musim->$deskripsi}}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-warning btn-sm" href="#" style="padding: 5px 20px; margin: 0 5px; border: none;">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" href="/hapus/{{$musim->id}}">
                                <button class="btn btn-danger btn-sm" type="submit" style="padding: 5px 20px; margin: 0 5px; border: none;">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-end" style="margin: 10px">
        <a class="btn btn-success btn-sm" type="submit" href="#" style="padding: 5px 20px; margin: 0 5px;  border: none;">Create</a>
      </div>
    </div>
@endsection
