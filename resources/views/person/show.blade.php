@extends('layouts.app')


@section('content')

    <div class="container">    

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                
                <div class="panel-heading">
                    <div class="panel-title"><h4>Person Details</h4></div>
                </div>   

                <div style="padding-top:30px" class="panel-body" >

                    <div class="col-lg-12 margin-tb">
                        <div class="text-center">
                            <h2> {{ $person->surname }}</h2>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top:10px">
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $person->title }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Surname:</strong>
                            {{ $person->surname }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date of Birth:</strong>
                            {{ $person->dob }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $person->status }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date Created:</strong>
                            {{ date_format($person->created_at, 'jS M Y') }}
                        </div>
                    </div>
    
                </div>  

                <div class="col-md-12">
                    <div class="text-center">
                        <a class="btn btn-warning " style="width:10rem;color:#000" href="{{ route('person.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    

@endsection
