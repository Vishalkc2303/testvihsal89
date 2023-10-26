<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CustomAuthenticationSystem</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 1250px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('add')}}">Add Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('edituser',['id'=>$data->id])}}">Edit User</a> {{-- href="{{route('edituser',['id'=>$data->id])}}" --}}
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout" >Logout</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="container mt-5">
      <h2>Welcome {{ $data->firstname }} {{ $data->lastname }}</h2>

        <div class="table-responsive py-5"> 
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No</th>
                <th scope="col">Gender</th>
                <th scope="col">DOB</th>
                <th scope="col">Course</th>
                <th scope="col">Semester</th>
                <th scope="col">Section</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach ($data as $student)
                  
                <tr>
                  <th scope="row">{{$student->id}}</th>
                  <td>{{$student->firstname}}</td>
                  <td>{{$student->lastname}}</td>
                  <td>{{$student->address}}</td>
                  <td>{{$student->email}}</td>
                  <td>{{$student->contactnumber}}</td>
                  <td>{{$student->gender}}</td>
                  <td>{{$student->dob}}</td>
                  <td>{{$student->courses}}</td>
                  <td>{{$student->semester}}</td>
                  <td>{{$student->section}}</td>
                  <td>
                    <a href=""><button class="btn btn-primary">Edit</button></a> 
                    <a href=""><button class="btn btn-danger">Delete</button></a> 
                  </td>
                </tr>
                @endforeach --}}
            </tbody>
            
          </table>
          </div>
    </div>
         
</body>
</html>