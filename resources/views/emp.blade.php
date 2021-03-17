@extends("theme")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@section("content")
    <div class="container">
        <div class="row">
        <div class="col col-12 col-s4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-s4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <center><h2><u>Register</u></h2></center>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Employee code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PIN code</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone no:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-outline-success">Register</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>