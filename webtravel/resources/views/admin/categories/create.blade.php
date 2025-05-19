@extends('layouts.app')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Them danh muc</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Ten danh muc</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter email">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Mo ta</label>
      <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Password">
      @error('description')
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
      
      <div class="form-group">
      <label for="exampleInputFile">Thuoc danh muc</label>
   <select class="form-control"name="category_parent">
    <option value="0">---root---</option>
    @foreach ($categories as $key => $val )
    <option value="{{ $val ->id }}">
  @php
  $str ='';
  for ($i =0; $i <$val ->level; $i++) {
   echo $str;
   $str .='--';
  }
  @endphp
  {{ $val ->title }}
  </option>
    @endforeach
   </select>
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