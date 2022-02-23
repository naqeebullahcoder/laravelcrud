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
  <h2 class="col-lg-12 col-md-12 col-sm-12 text-center"><span style="border-bottom:1px solid"><b>LARAVEL CRUD OPERATION</b></span></h2> <br><br>

  <a href="student/create" class="btn btn-primary mb-2">Add Student</a> 

  <table class="table table-dark table-hover">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th> 
          <th>Action</th> 
        </tr>
    </thead>
       <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->age}}</td>
                <td> 
                    <form  method="post" action="#" class="delete_form">
                        <a href="/student/show/{{$student->id}}" class="btn btn-sm btn-info" >Show</a>
                        <a href="/student/edit/{{$student->id}}"  class="btn btn-sm btn-primary">Edit</a>
                        <a href="/student/delete/{{$student->id}}" class="btn btn-sm btn-danger" type="submit"onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</a>
                    </form>
                 </td>
            </tr>
        @endforeach
       </tbody>
     </table>
    <div>
  </div>
</div>
@endsection