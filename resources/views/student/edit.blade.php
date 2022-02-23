@extends('layout.master')
@section('main-content')
<div class="container">

    <div class="row justify-content-center">
      <div class="col-12">
        <div class="card mt-5">  <h2 class="col-lg-12 col-md-12 col-sm-12 text-center"><span style="border-bottom:1px solid"><b>Update</b></span></h2> <br><br>
          <div class="card-header">
            
    <a href="{{url('student')}}" class="btn btn-primary mb-2">Back</a> 
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

      <form method="post" action="{{route('student.update')}}"  enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <input type="hidden" name="id" value="{{ old('student', $student->id)}}">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="{{ old('student', $student->name)}}" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" value="{{ old('student', $student->email)}}" name="email"/>
          </div>
          <div class="form-group">
              <label for="age">Age</label>
              <input type="age" class="form-control" value="{{ old('student', $student->age)}}" name="age"/>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
</div>
</div>
</div>

@endsection