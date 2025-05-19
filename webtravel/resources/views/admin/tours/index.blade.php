@extends('layouts.app')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">List Tour</h3>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="table table-reponsive"> 
        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gallery</th>
                    <th scope="col">Tieu de</th>
                    <th scope="col">Danh Muc Tour</th>
                    <th scope="col">Gia tour</th>
                    <th scope="col">So luong</th>
                    <th scope="col">Phuong tien</th>
                    <th scope="col">Ma tour</th>
                    <th scope="col">Image</th>
                    <th scope="col">Mo ta</th>
                    <th scope="col">Slug tour</th>
                    <th scope="col">Ngay di</th>
                    <th scope="col">Ngay ve</th>
                    <th scope="col">Noi di</th>
                    <th scope="col">Noi ve</th>
                    <th scope="col">Ngay tao</th>
                    <th scope="col">Status</th>
                    <th scope="col">Manage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tours as $key => $tour)


                    <tr>
                        <th scope="row">{{ $key }}</th>
                        <th scope="row"><a href="{{ route('gallery.edit',[$tour->id]) }}">Them anh</a></th>
                        <td>{{ $tour->title }}</td>
                        <td>{{ $tour->category->title }}</td>
                        <td>{{ number_format($tour->price,0,',','.')}}vnd </td>
                        <td>{{ $tour->quantity }}</td>
                        <td>{{ $tour->vehicle }}</td>
                        <td>{{ $tour->tour_code }}</td>
                        <td><img height="200" width="200" src="{{ asset('uploads/tour/' . $tour->image) }}" alt=""></td>
                        <td>{{ $tour->description }}</td>
                        <td>{{ $tour->slug }}</td>
                        <td>{{ $tour->departure_date }}</td>
                        <td>{{ $tour->return_date }}</td>
                        <td>{{ $tour->tour_from }}</td>
                        <td>{{ $tour->tour_to }}</td>
                        <td>{{ $tour->created_at }}</td>
                        <td>
                            @if ($tour->status == 1)
                                <span class="text text-success">Active</span>
                            @else
                                <span class="text text-success">UnActive</span>

                            @endif
                        </td>
                        <td>
                            <a href="{{ route('tours.edit', [$tour->id]) }}" class="btn btn-warning">Sua</a>
                            <form onsubmit="return confirm('Ban co muon xoa khong ?');"
                                action="{{ route('tours.destroy', [$tour->id]) }}" method="POST">
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