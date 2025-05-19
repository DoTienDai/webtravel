@extends('layouts.app')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Tao anh  tour</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">

    <div class="form-group">
      <label for="exampleInputPassword1">Tour</label>
      <select class="form-control" name="tour_id">
      
      <option value="{{ $tour-> id}}">{{ $tour->title}}</option>

      </select>
      @error('categories')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    
      <div class="form-group">
      <label for="exampleInputEmail1">Tieu de tour</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter email">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
 
      <div class="form-group">
      <label for="exampleInputFile">File image</label>
      <div class="input-group">
        <div class="custom-file">
        <input type="file" required name="image[]" multiple class="form-control-file" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        @error('image[]')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      </div>




      </div>
    </div>
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $key => $gal)
                    <tr>
                        <th scope="row">{{ $key }}</th>
                        <td>{{ $gal->title }}</td>
                        <td><img height="200" width="200" src="{{ asset('uploads/galleries/' . $gal->image) }}" alt=""></td>  
                        <td>
                            <form onsubmit="return confirm('Ban co muon xoa khong ?');"
                                action="{{ route('gallery.destroy', [$gal->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Xoa">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
@endsection