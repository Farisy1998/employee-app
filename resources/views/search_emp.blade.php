@extends("theme")

@section("content")
    <div class="container">
        <div class="row">
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
        </div>
    </div>
    @endsection