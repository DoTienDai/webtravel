@extends('layouts.app')
@section('content')
  <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Sua tour</h3>
    </div>
    <?php
                // $message = Session::get('message');
                // if($message){
                //     echo '<span class="text-alert">'.$message.'</span>';
                //     Session::put('message',null);
                // }
            ?>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('tours.update',[$tours->id]) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Tieu de tour</label>
      <input type="text" class="form-control" value="{{  $tours->title }}" name="title" id="exampleInputEmail1" placeholder="Enter email">
      @error('title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="exampleInputEmail1">So luong tour</label>
      <input type="text" value="{{  $tours->quantity }}"class="form-control" name="quantity" >
      @error('quantity')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Mo ta tour</label>
      <input type="text" class="form-control"  value="{{  $tours->description }}"name="description" id="exampleInputPassword1" placeholder="Password">
      @error('description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Gia tour</label>
      <input type="text"value="{{  $tours->price }}"class="form-control" name="price"  >
      @error('price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Phuong tien</label>
      <input type="text"value="{{  $tours->vehicle }}" class="form-control" name="vehicle" >
      @error('vehicle')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Ngay xuat phat</label>
      <input type="text"value="{{  $tours->departure_date }}" class="form-control" name="departure_date" id="departure_date" >
      @error('departure_date')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Ngay ve</label>
      <input type="text" value="{{  $tours->return_date }}"class="form-control" name="return_date" id="return_date">
      @error('return_date')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Noi di</label>
      <input type="text" value="{{  $tours->tour_from }}"class="form-control" name="tour_from" >
      @error('tour_from')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Noi den</label>
      <input type="text"value="{{  $tours->tour_to }}" class="form-control" name="tour_to" >
      @error('tour_to')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Tong ngay</label>
      <input type="text"value="{{  $tours->tour_time }}" class="form-control" name="tour_time" >
      @error('tour_time')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      <div class="form-group">
      <label for="exampleInputPassword1">Danh muc tour</label>
      <select class="form-control" name="categories_id">
        @foreach ($categories as $key => $category)
        <option {{ $category->id == $tours->category_id ? 'selected': ''}} value="{{ $category->id}}">{{ $category->title}}</option>

      @endforeach
      </select>
      @error('category_id')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

      </div>
      <div class="form-group">
      <label for="exampleInputFile">File image</label>
      <div class="input-group">
        <div class="custom-file">
        <input type="file" name="image" value="{{  $tours->image }}"class="form-control-file" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
        <td><img height="200" width="200" src="{{ asset('uploads/tour/' . $tours->image) }}" alt=""></td>
   
      </div>
      </div>
      <div class="form-check">
      <input type="checkbox" value="1"{{ $tours->status == 1 ? 'checked' : ''  }}    name="status" class="form-check-input" id="exampleCheck1">
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