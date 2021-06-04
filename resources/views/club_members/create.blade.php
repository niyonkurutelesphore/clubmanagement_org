@extends('club_members.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Club Member</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="/admin"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('club_members.store') }}" method="POST">

    @csrf

  

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>FIRST Name:</strong>

                <input type="text" name="fname" class="form-control" placeholder="first name">

            </div>

        </div> 


         <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>LAST Name:</strong>

                  <input type="text" name="lname" class="form-control" placeholder="last name">

                </div>
        </div>
        
    
         <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>DEPARTMENT:</strong>
                  <select name="departement" class="form-control" placeholder="depertment">
                  <option>IT</option>
                <option>ET</option>
                <option>RE</option>
                </select>

                  

                </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>LEVEL:</strong>

                <select name="level" class="form-control">
                <option>level1</option>
                <option>level2</option>
                <option>level3</option>
                </select>

            </div>

        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
 
     <div class="form-group">

     <strong>GENDER:</strong>

       <input type="radio" class="form-control" name="gender"  value="MALE">MALE 
       <input type="radio" class="form-control" name="gender"  value="FEMALE">FEMALE
  </div>

  </div>

      <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>EMAIL:</strong>

                <input type="text" class="form-control" name="email" placeholder="email">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>TELEPHONE:</strong>

    <input type="text" class="form-control" name="telephone" placeholder="telephone">

</div>

</div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ADDRESS:</strong>

                <input type="text" class="form-control" name="address" placeholder="address">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>CLUB NAME:</strong>

                <input type="text" name="club_name" class="form-control">
              
                
                </select>

            </div>

        </div>

        

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">SAVE</button>

        </div>

    </div>

   

</form>

@endsection