@extends('layouts.app')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Them danh tour</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('tours.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Tieu de tour</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter email">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="exampleInputEmail1">So luong tour</label>
      <input type="text" class="form-control" name="quantity" >
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Mo ta tour</label>
      <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Password">
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Gia tour</label>
      <input type="text" class="form-control" name="price"  >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Phuong tien</label>
      <input type="text" class="form-control" name="vehicle" >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Ngay xuat phat</label>
      <input type="text" class="form-control" name="departure_date" id="departure_date" >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Ngay ve</label>
      <input type="text" class="form-control" name="return_date" id="return_date">
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Noi di</label>
      <input type="text" class="form-control" name="tour_from" >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Noi den</label>
      <input type="text" class="form-control" name="tour_to" >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Tong ngay</label>
      <input type="text" class="form-control" name="tour_time" >
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    
      <div class="form-group">
      <label for="exampleInputPassword1">Danh muc tour</label>
      <select class="form-control" name="categories_id">
        @foreach($categories as $key => $category)
      <option value="{{ $category-> id}}">{{ $category->title}}</option>
      @endforeach
      </select>
      @error('categories')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>

      <div class="form-group">
      <label for="exampleInputFile">File image</label>
      <div class="input-group">
        <div class="custom-file">
        <input type="file" name="image" class="form-control-file" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        @error('image')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      </div>
      <div class="form-check">
      <input type="checkbox" value="1" name="status" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Status</label>
      @error('status')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  </div>
@endsection