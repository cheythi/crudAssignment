@extends('layouts.app')

@section('content')

    <div class="container">    

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                
                <div class="panel-heading">
                    <div class="panel-title"><h4>Update Record</h4></div>
                </div>     

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Warning!</strong> Please check your inputs again!<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div style="padding-top:30px" class="panel-body" >
       
                    <form action="{{ route('person.update', $person->id) }}" method="POST">
                        @csrf 
                        @method('PUT')       
                    
                        <div style="margin-bottom: 25px">
                            <strong>Title:</strong>
                            <select class="form-control form-control-sm" name="title" id="title">
                                <option selected></option>
                                <option value="Mr"   {{ $person->title == "Mr" ? 'selected' : '' }} >Mr</option>
                                <option value="Mrs"  {{ $person->title == "Mrs" ? 'selected' : '' }} >Mrs</option>
                                <option value="Miss" {{ $person->title == "Miss" ? 'selected' : '' }} >Miss</option>
                                <option value="Sir"  {{ $person->title == "Sir" ? 'selected' : '' }} >Sir</option>
                                <option value="Dr"   {{ $person->title == "Dr" ? 'selected' : '' }} >Dr</option>
                            </select>
                        </div>
                        
                        <div style="margin-bottom: 25px">
                            <strong>Surname:</strong>
                            <input type="text" name="surname" id="surname" value="{{ $person->surname }}" class="form-control" placeholder="Enter surname">
                        </div>

                        <div style="margin-bottom: 25px">
                            <strong>Date of Birth:</strong>
                            <input type="date" name="dob" id="dob" value="{{ $person->dob }}" class="form-control form-control-sm">
                        </div>

                        <div style="margin-bottom: 60px">
                            
                            <strong>Status:</strong>
                            
                            <div style="margin-top: 10px">
                                
                                <div class="col-sm-6">
                                    <input type="radio" name="status" id="status1" value="Married" {{ $person->status == "Married" ? 'checked' : '' }} style="margin-left:5rem">
                                    <label for="married">Married</label>
                                </div>

                                <div class="col-sm-6">
                                    <input type="radio" name="status" id="status2" value="Unmarried" {{ $person->status == "Unmarried" ? 'checked' : '' }} style="margin-left:5rem">
                                    <label for="unmarries">Unmarried</label>
                                </div>
                            </div>

                        </div>
                        
                        <div class="col-md-12">
                            <div class="col-md-4 text-center">
                                <a class="btn btn-warning" style="width:10rem;color:#000" href="{{ route('person.index') }}">Back</a>
                            </div>
                            <div class="col-md-4 text-center">
                                <a id="clear" class="btn btn-success" onclick="surname.value=''; dob.value=''; " style="width:10rem;color:#000" >Clear</a>
                            </div>    
                            <div class="col-md-4 text-center">
                                <button type="submit" class="btn btn-primary" style="width:10rem;color:#000" >Update Record</button>
                            </div>
                        </div>

                    </form>     
                
                </div>  
            </div>
        </div>
    </div>    

@endsection
