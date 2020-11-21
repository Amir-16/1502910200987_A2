<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add Worker</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>Add Worker</h2>
            @if(Session::has('success'))
            <div class="alert alert-success">
            <strong>{{Session::get('success') }}</strong>
            </div>

            @endif

        </div>

        <div class="section col-md-8 offset-md-2">

        <form method="post" action="{{URL::to('store-worker')}}">
                @csrf

            <div class="form-group">
            <label for="">Enter Name</label>
         <input type="text" class="form-control" placeholder="Enter name" name="name" >
         </div>

         <div class="form-group">
            <label for="">Enter email</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email" >
        </div>

        <div class="form-group">
            <label for="">Gender</label>
            <select class="form-control" name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>   
            </select>
        </div>

        <div class="form-group">
            <label for="">Enter Date of Birth</label>
          <input type="date" class="form-control" placeholder="Enter dob" name="dob" >
        </div>

        <div class="form-group">
            <label for="">Salary</label>
            <input type="number" class="form-control" placeholder="Salary" name="salary">
        </div>

        <div class="form-group">

            <label for="">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>

        


            </form>

        </div>


    </div>

</body>
</html>
