<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js.js"></script>

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>PhoneBook</h1>
        <p></p>
    </div>

</div>
<h1 style="margin-left:20px">Vnesi podatke</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="content">
        <div class="row">

            <div class="col-sm-4">
                <form style="background-color:#2aabd2 ; padding:30px" method="POST">
                    <div class="form-group">
                        <label for="fname">Ime:</label>
                        <input type="text" class="form-control" name="fname" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Priimek:</label>
                        <input type="text" class="form-control" name="lname" id="lname">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefonska številka:</label>
                        <input type="text" class="form-control" id="phone" value="041888888" name="phone" style="width:200px">
                        <dvi id="num"></dvi>
                    </div>
                    <button id="submit" class="btn btn-default">Potrdi!</button>
                </form>
            </div>
            <div class="col-sm-8">

                @foreach($posts as $post)
                    <h3>{{$post->ime}}</h3>
                    <p>{{$post->priimek}}</p>
                    <p>{{$post->tel_stevilka}}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>



</body>
</html>
