<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    @include('partials._nav')
</head>
<body>
    @if (session()->has('success'))
    <div class="alert alert-success text-center">
        {{session()->get('success')}}
    </div>
    @endif
    @yield('content')
    <script>
        document.getElementById("controle").addEventListener("click", function(event){
            if(confirm("vous voulez vraiment supprimer ce cantact ?")!=true){
                event.preventDefault()
            }
        });
    </script>
</body>
</html>