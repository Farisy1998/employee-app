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
        <duv class="row">
        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <table class="table table-borderless">
                    <tr>
                        <td>Employee Code</td>
                        <td><input type="text" class="form-control"></td>
                        <td><button class="btn btn-outline-primary">Search</button></td>
                    </tr>
                </table>
            </div>
        </duv>
    </div>
    @endsection
</body>
</html>