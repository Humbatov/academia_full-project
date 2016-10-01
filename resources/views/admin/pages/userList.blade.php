@extends('admin.layout.app')

@section('content')
  <div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Blacklist</th>
          <th>Number of files</th>
          <th>Number of interests</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr class="active">
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->email }}</td>
            <td>
              @if ($user->blacklist == 0)
                No
              @else
                Yes
              @endif
            </td>
        <td><a href="{{ url('admin/user/'.$user->id.'/files')}}">{{ $user->files()->count() }}</a></td>
            <td><a href="{{ url('admin/user/'.$user->id.'/intersets')}}">{{ $user->interests()->count() }}</a></td>
            <td>
              <form class="" action="/admin/userList/{{ $user->id }}" method="POST">
                {{ csrf_field() }}
                <a class="btn-warning btn" href="{{ action('Admin\AdminController@user',['id'=>$user->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                  <input class="btn-danger btn" type="submit"  value="Delete">
              </form>
            </td>
          </tr>
        @endforeach


      </tbody>
    </table>
   </div>
@stop
