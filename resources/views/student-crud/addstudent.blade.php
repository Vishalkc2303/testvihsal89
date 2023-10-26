<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  /* for number input field */
  input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body>
    <div class="bg-dark">
        <div class="container">
          
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="mt-4 pt-2">
                <a class="btn btn-secondary btn-lg  "type="submit" href="{{route('afterloginpage')}}" >Back</a>
              </div>
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                  <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Add Student</h3>
                      <form action="{{route('addstudent')}}" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif()
                        @csrf
                        <div class="row">
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="firstName" class="form-control form-control-lg" placeholder="Enter first name" name="firstname" value="{{old('firstname')}}"/>
                              {{-- validation error message --}}
                              <span class="text-danger">
                                @error('firstname')
                                    {{$message}}
                                @enderror
                            </span>
                            </div>
                        </div>
                          <div class="col-md-6 mb-4">
                            <div class="form-outline">
                              <input type="text" id="lastName" class="form-control form-control-lg" placeholder="Enter last name" name="lastname" value="{{old('lastname')}}"/>
                              {{-- validation error message --}}
                              <span class="text-danger">
                                @error('lastname')
                                    {{$message}}
                                @enderror
                            </span>
                            </div></div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                              <input type="text" class="form-control form-control-lg" id="birthdayDate" placeholder="Enter address" name="address" value="{{old('username')}}"/>
                              {{-- validation error message --}}
                              <span class="text-danger">
                                @error('address')
                                    {{$message}}
                                @enderror
                            </span>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4">
                            <h6 class="mb-2 pb-1">Gender:</h6>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="maleGender"
                                value="M" name="gender" />
                              <label class="form-check-label" for="maleGender">Male</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="femaleGender"
                                value="F" name="gender"/>
                              <label class="form-check-label" for="femaleGender">Female</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" id="otherGender"
                                value="O" name="gender"/>
                              <label class="form-check-label" for="otherGender">Other</label>
                            </div>
          
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
          
                            <div class="form-outline form-group">
                              <div class="input-group">
                              <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter email" name="email" />
                          </div>
                          {{-- validation error message --}}    
                          <span class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
          
                            <div class="form-outline form-group">
                              <div class="input-group">
                              <input type="number" id="number" class="form-control form-control-lg" placeholder="Enter contact number" name="contactnumber" />
                            </div>
                            {{-- validation error message --}}  
                            <span class="text-danger">
                                @error('contactnumber')
                                    {{$message}}
                                @enderror
                            </span>
                            </div>
          
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline form-group">
                                    <div class="input-group ">
                                        <label class="my-1 mr-2 form-control form-control-lg" for="inlineFormCustomSelectPref">Courses</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control form-control-lg" id="inlineFormCustomSelectPref" name="courses">
                                            <option selected>Choose...</option>
                                            <option value="BCA">BCA</option>
                                            <option value="MCA">MCA</option>
                                            <option value="B.SC">B.SC</option>
                                            <option value="M.SC">M.SC</option>
                                            <option value="BBA">BBA</option>
                                            <option value="MBA">MBA</option>
                                            <option value="B.COM">B.COM</option>
                                            <option value="M.COM">M.COM</option>
                                            <option value="BA">BA</option>
                                            <option value="MA">MA</option>
                                            <option value="B.TECH">B.TECH</option>
                                            <option value="M.TECH">M.TECH</option>
                                            <option value="PHD">PHD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline form-group">
                                    <div class="input-group ">
                                        <label class="my-1 mr-2 form-control form-control-lg">Semester</label>
                                        <select class="custom-select my-1 mr-sm-2 form-control form-control-lg" id="inlineFormCustomSelectPref" name="semester">
                                            <option selected>Choose...</option>
                                            <option value="First">First</option>
                                            <option value="Second">Second</option>
                                            <option value="Third">Third</option>
                                            <option value="Fourth">Fourth</option>
                                            <option value="Fifth">Fifth</option>
                                            <option value="Sixth">Sixth</option>
                                            <option value="Seven">Seven</option>
                                            <option value="Eight">Eight</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline form-group">
                                        <div class="input-group ">
                                          <label class="my-1 mr-2 form-control form-control-lg">DOB</label>
                                          <input type="date" name="dob" class="custom-select my-1 mr-sm-2 form-control form-control-lg">
                                          
                                      </div>
                                    <div>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                            // Get the current date in the format YYYY-MM-DD
                            const currentDate = new Date().toISOString().slice(0, 10);
                            // Set the current date as the default value for the date input field
                            document.getElementById('inputDate').value = dd-mm-yy;
                        });
                        </script> 
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline form-group">
                                <div class="input-group ">
                                    <label class="my-1 mr-2 form-control form-control-lg">Section</label>
                                    <select class="custom-select my-1 mr-sm-2 form-control form-control-lg" id="inlineFormCustomSelectPref" name="section">
                                        <option selected>Choose...</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-2">
                        <input class="btn btn-dark btn-lg form-control " type="submit" value="Add" />
                      </div>
          
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
          </section>

    </div>
</body>
</html>