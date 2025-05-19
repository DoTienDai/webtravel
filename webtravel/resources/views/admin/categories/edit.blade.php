@extends('layouts.app')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Sua danh muc</h3>
    </div>
    <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('categories.update',[$category->id]) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Ten danh muc</label>
      <input type="text" class="form-control" value="{{  $category->title }}" name="title" id="exampleInputEmail1" placeholder="">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Mo ta</label>
      <input type="text" class="form-control" value="{{  $category->description }}" name="description" id="exampleInputPassword1" placeholder="Password">
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
        <img height="200" width="200" src="{{ asset('uploads/category/' . $category->image) }}" alt="">
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
    <option {{ $val ->id == $category->category_parent ? ' selected' : '' }} value="{{ $val->id }}">
  @php
  $str ='';
  for ($i =0; $i <$val ->level; $i++) {
   echo $str;
   $str .= '--';
  }
  @endphp
  {{ $val ->title }}
  </option>
    @endforeach
   </select>
      </div>


      <div class="form-check">
      <input type="checkbox" value="1" {{ $category->status==1 ? 'checked' :''  }}  name="status" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Status</label>
      @error('status')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    </div>
 

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
  </div>
@endsection