@extends('admin.layout.app')

@section('content')
  <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Number of views</th>
          <th>Size (MB)</th>
          <th>Created at</th>
          <th>Updated at</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($files as $file)
          <tr>
            <th scope="row">{{ $file->id }}</th>
            <td>{{ $file->name }}</td>
            <td>{{ $file->numbers_of_views }}</td>
            <td>{{ $file->size }}</td>
            <td>{{ $file->created_at }}</td>
            <td>{{ $file->updated_at }}</td>
            <td>
              <form class="" action="{{ action('FileController@destroy',['id' => $file->id ])}}" method="POST">
                {{ csrf_field() }}
                <a class="btn-warning btn" href="#"><i class="fa fa-pencil-square-o"></i></a>
                  <input class="btn-danger btn" type="submit"  value="Delete">
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
    </div>
@stop
