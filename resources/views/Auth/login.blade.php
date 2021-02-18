<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <title>Laravel</title>

    </head>
    <body>
        @if (session()->has('error'))
            <div class="alert alert-danger text-center">
                {{session()->get('error')}}
            </div>
        @endif
        <div class="row mt-5">
            <form action="{{route('login_login')}}" method="post" class="col-md-6 mx-auto">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <label for="inputLogin">Login</label>
                <input type="text" value="{{old('login')}}" name="login" id="inputLogin" class="form-control" required autofocus>
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" required>
                <button class="btn btn-primary btn-block mt-2" type="submit">
                    Sign in
                </button>
            </form>
        </div> 
    </body>
</html>
