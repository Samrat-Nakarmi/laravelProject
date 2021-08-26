<html>    
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Register</h1>
<form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Username : <input name="username" required/></label><br>
        <label>Fullname : <input name="fullname" required/></label><br>
        <label>Email : <input name="email" type="email" required/></label><br>
        <label>Password : <input name="password" type="password" required/><br>
        <label for="">Confirm Password : <input name="confirm_password" type="password" required></label>
        <br>
        
        <label>Profile Picture: <input name="profile" type="file" required/></label><br>
        <input type="submit" value="Register" class="btn btn-primary"/><br><br>
</form>
</body>
<html>