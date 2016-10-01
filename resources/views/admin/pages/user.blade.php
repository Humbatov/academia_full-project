@extends('admin.layout.app')

@section('content')
  <div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
      <form class="form-horizontal" action="{{ url('/admin/user/'.$user->id.'/update')}}" method="post">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="focusedinput" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-3">
              <input type="text" name="name" class="form-control1" id="focusedinput" value="{{ $user->name}}" placeholder="">

              @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif

            </div>
            <label for="focusedinput" class="col-sm-2 control-label">Surname</label>
            <div class="col-sm-3">
              <input type="text" name="surname" class="form-control1" id="focusedinput" value="{{ $user->surname}}" placeholder="">

              @if ($errors->has('surname'))
                  <span class="help-block">
                      <strong>{{ $errors->first('surname') }}</strong>
                  </span>
              @endif

            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						  <label class="col-md-2 control-label">Email Address</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-envelope-o"></i>
									</span>
									<input type="text" disabled class="form-control1" name="email" value="" placeholder="{{ $user->email}}">
								</div>
							</div>

					</div>
          <div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">User Role</label>
							<div class="col-sm-3">
                <select name="role" id="selector1" class="form-control1">
								<option>User</option>
                <option>Admin</option>
							  </select>
              </div>
              <label for="selector1" class="col-sm-2 control-label">Banned</label>
							<div class="col-sm-3">
                <select name="blacklist" id="selector1" class="form-control1">
								@if ($user->blacklist == 0)
                  <option>No</option>
                  <option>Yes</option>
                @else
                  <option>Yes</option>
                  <option>No</option>
								@endif
							  </select>
              </div>
					</div>

          <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">University</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput" name="university" value="{{ $user->university}}" placeholder="University">
              </div>
          </div>
          <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Department</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput" name="department" value="{{ $user->department}}" placeholder="Department">
              </div>
          </div>
          <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Position</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput" name="position" value="{{ $user->position}}" placeholder="Position">
              </div>
          </div>
          <div class="form-group">
							<label for="disabledinput" class="col-sm-2 control-label">Created at:</label>
							<div class="col-sm-3">
								<input disabled="" type="text" class="form-control1"  id="disabledinput" value="{{ $user->created_at}}">
							</div>
              <label for="disabledinput" class="col-sm-2 control-label">Updated at:</label>
							<div class="col-sm-3">
								<input disabled="" type="text" class="form-control1" id="disabledinput" value="{{ $user->created_at}}">
							</div>
					</div>
          <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-default" href="{{ action('Admin\AdminController@userList')}}">Cancel</a>
              </div>
          </div>
      </form>
    </div>
  </div>
@endsection
