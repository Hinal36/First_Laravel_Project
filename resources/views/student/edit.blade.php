<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <body>
    <div class="container mt-5">
      <h1>Student Registration </h1>
      <form action="{{route('student.update',$student->id)}}" method="POST">
      @csrf 
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp"  name="name" placeholder="Enter Name" value={{$student->name}}>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter Email" value={{$student->email}}>
        </div>
       
        <div class="form-group">
          <label for="exampleInputEnroll1">Enrollment</label>
          <input type="text" class="form-control" id="exampleInputEnroll1" aria-describedby="enrpollHelp" name="enrollment" placeholder="Enter Enroll No" value={{$student->enrollment}}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>