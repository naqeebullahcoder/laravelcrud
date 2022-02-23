@extends('layout.master')
@section('main-content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-header">
    Create User
    </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{route('student.store')}}"  enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="age">Age</label>
              <input type="age" class="form-control" name="age"/>
          </div>
          <button type="submit" class="btn btn-block btn-primary">Add</button>
      </form>
  </div>
</div>
</div>
</div>
</div>

@endsection