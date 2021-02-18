@extends('layouts.base')

@section('content')
<div class="container contact mt-5 bg-light">
    <form action="{{route('cantact_edit',$cantact)}}" class="mx-5" method="POST">
        @csrf
        @method('PUT')
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
                            <input type="text" class="form-control" id="name" value="{{$cantact->firstName}}" placeholder="Enter First Name" name="fname">
                        </div>
                        <div class="form-group col-5">
                            <label class="control-label" for="lname">Last Name:</label>         
                            <input type="text" class="form-control" id="lname" value="{{$cantact->lastName}}" placeholder="Enter Last Name" name="lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-5">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <input type="email" class="form-control" id="email" value="{{$cantact->email}}" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group col-5">
                            <label class="control-label" for="pnumber">Numéro de telephone</label>        
                            <input type="number" class="form-control" id="pnumber" value="{{$cantact->numberPhone}}"  placeholder="Enter your number phone" name="pnumber">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-10">
                            <label class="control-label" for="adresse">Adresse</label>        
                            <input type="text" class="form-control" id="adresse" value="{{$cantact->adresse}}"  placeholder="Enter your adresse" name="adresse">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-5">
                            <label class="control-label" for="twon">Ville :</label>
                            <input type="text" class="form-control" id="town" value="{{$cantact->town}}"  placeholder="Enter your town" name="town">
                        </div>
                        <div class="form-group col-5">
                            <label class="control-label" for="codep">Code postale :</label>        
                            <input type="number" class="form-control" id="codep" value="{{$cantact->codePostal}}"  placeholder="Enter your number phone" name="codep">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-10">
                            <label class="control-label" for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" id="comment" name="comment">{{$cantact->description}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-10">        
                            <button type="submit" class="btn btn-primary btn-block">Sauvgarder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection