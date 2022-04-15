<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style>    
  </head>
  <body class="bg-dark">
    <form action="{{url('/')}}/register" method="post">
      @if(Session::has('success'))
      <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
      <div class="container mt-4 card p-3 bg-white">
          <h3 class="text-center text primary">
            Registration
          </h3>
          <div class="row">
            <div class="form-group col-md-6 required">
              <label for="">Name:</label>
              <input type="text" name="name" id="" class="form-control" />
              <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group col-md-6 required">
              <label for="">Email:</label>
              <input type="text" name="email" id="" class="form-control" />
              <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
              </span>
            </div>
          </div>
            <div class="row">
              <div class="form-group col-md-6 required">
                <label for="">Password:</label>
                <input type="password" name="password" id="" class="form-control" />
                <span class="text-danger">
                  @error('password')
                  {{$message}}
                  @enderror
                </span>
              </div>
              <div class="form-group col-md-6 required">
                <label for="">Confirm Password:</label>
                <input type="password" name="confirm_password" id="" class="form-control" />
                <span class="text-danger">
                  @error('confirm_password')
                  {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 ">
                <label for="">Country:</label>
                <input type="country" name="country" id="" class="form-control" />
                <span class="text-danger">
                  @error('country')
                  {{$message}}
                  @enderror
                </span>
              </div>
              <div class="form-group col-md-6 ">
                <label for="">State:</label>
                <input type="state" name="state" id="" class="form-control" />
                <span class="text-danger">
                  @error('state')
                  {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-12 ">
                <label for="">Address:</label>
                <textarea name="address" id="" class="form-control"> </textarea>
                <span class="text-danger">
                  @error('address')
                  {{$message}}
                  @enderror
                </span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 ">
                <label for="">Gender:</label>
                <br/>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M"/>
                    <label class="form-check-label" for="male">
                      Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F"/>
                    <label class="form-check-label" for="female">
                      Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="O"/>
                    <label class="form-check-label" for="other">
                      Other
                    </label>
                </div>
              </div>
              <div class="form-group col-md-6 ">
                <label for="">Date of Birth:</label>
                <input type="date" name="dob" class="form-control"/>
                <span class="text-danger">
                  @error('dob')
                  {{$message}}
                  @enderror
                </span>
              </div>
            </div>


          <button class="btn btn-primary">
              Submit
          </button>   
      </div> 
    </form>
</body>
</html>