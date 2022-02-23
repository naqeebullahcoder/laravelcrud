@extends('layout.master')
@section('main-content')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
   <h2 class="col-lg-12 col-md-12 col-sm-12 text-center"><span style="border-bottom:1px solid"><b>Show All Data</b></span></h2> <br><br>

    <div class="container">
        <a href="{{url('student')}}" class="btn btn-primary mb-2">Back</a> 
        <table class="table table-dark table-hover table-bordered ">
            <thead>
                <tr>
                     <th>Student ID</th>
                    <td>{{$student->id}}</td>
                </tr>
                <tr>
                    <th>Student name</th>
                    <td>{{$student->name}}</td>
                </tr>
                <tr>
                    <th>Student Email</th>
                    <td>{{$student->email}}</td>
                </tr>
                <tr>
                    <th>Student Age</th>
                    <td>{{$student->age}}</td>
                </tr>
            </thead>
        </table>
      </div>
     <div>
    </div>
   </div>
  </div>
</div>
</div>
@endsection