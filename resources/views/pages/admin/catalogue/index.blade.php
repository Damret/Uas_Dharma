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
            @forelse ($items as $no => $item)
                <tr>
                    <th scope="row">{{$no+1}}</th>
                    <td>{{$item->name}}</td>
                    <td>
                        <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail">
                    </td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-warning btn-sm" href="{{route('catalogue.edit')}}" style="padding: 5px 20px; margin: 0 5px; border: none;">Edit</a>
                        <a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')">
                            <form action="{{route('catalogue.delete', $item->id)}}" method="post" >
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit" style="padding: 5px 20px; margin: 0 5px; border: none;">Delete</button>
                            </form>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="
                    text-center">Data belum ada</td>
                </tr>

            @endforelse

        </tbody>
      </table>
      <div class="d-flex justify-content-end" style="margin: 10px">
        <a class="btn btn-success btn-sm" type="submit" href="{{route('catalogue.create')}}" style="padding: 5px 20px; margin: 0 5px;  border: none;">Submit</a>
      </div>
    </div>
@endsection
