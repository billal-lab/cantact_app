<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <title>Laravel</title>

    </head>
    <body>
        @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{session()->get('success')}}
            </div>
        @endif
        <div class="container contact mt-5">
            <form action="{{route('cantact_store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3 bg-warning">
                        <div class="contact-info">
                            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                            <h2>Contact Us</h2>
                            <h4>We would love to hear from you !</h4>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-10 text-center">
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-5">
                                    <label class="control-label" for="fname">First Name:</label>        
                                    <input type="text" class="form-control" id="name" value="{{old('fname')}}" placeholder="Enter First Name" name="fname">
                                </div>
                                <div class="form-group col-5">
                                    <label class="control-label" for="lname">Last Name:</label>         
                                    <input type="text" class="form-control" id="lname" value="{{old('lname')}}" placeholder="Enter Last Name" name="lname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-5">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group col-5">
                                    <label class="control-label" for="pnumber">Numéro de telephone</label>        
                                    <input type="number" class="form-control" id="pnumber" value="{{old('pnumber')}}" placeholder="Enter your number phone" name="pnumber">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-10">
                                    <label class="control-label" for="adresse">Adresse</label>        
                                    <input type="text" class="form-control" id="adresse" value="{{old('adresse')}}" placeholder="Enter your adresse" name="adresse">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-5">
                                    <label class="control-label" for="twon">Ville :</label>
                                    <input type="text" class="form-control" id="town" value="{{old('town')}}" placeholder="Enter your town" name="town">
                                </div>
                                <div class="form-group col-5">
                                    <label class="control-label" for="codep">Code postale :</label>        
                                    <input type="number" class="form-control" id="codep" value="{{old('codep')}}" placeholder="Enter your number phone" name="codep">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-10">
                                    <label class="control-label" for="comment">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" value="{{old('comment')}}" name="comment"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-10">        
                                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>        
    </body>
</html>
