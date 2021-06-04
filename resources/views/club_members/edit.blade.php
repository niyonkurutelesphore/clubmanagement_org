@extends('club_members.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>UPDATE CLUB MEMBER</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('club_members.index') }}"> Back</a>

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

  

    <form action="{{ route('club_members.update',$club_member->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>FIRST Name:</strong>

                    <input type="text" name="fname" value="{{ $club_member->fname }}" class="form-control" placeholder="first name">
                   
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>LAST NAME:</strong>

                    <input type="text" name="lname" value="{{ $club_member->lname}}" class="form-control" placeholder="lastname">

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>DEPARTMENT:</strong>

    <input type="text" name="departement"  value="{{ $club_member->departement }}" class="form-control" placeholder="departement">
</div>

</div>  

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>LEVEL:</strong>

    <input type="text" name="level" value="{{ $club_member->level }}" class="form-control" placeholder="level">

</div>

</div>  

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>GENDER:</strong>

    <input type="text" name="gender" value="{{ $club_member->gender }}"  class="form-control">
   
</div>

</div>  
 

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>EMAIL:</strong>

    <input type="text" name="email" value="{{ $club_member->email }}" class="form-control" placeholder="email">

</div>

</div>


<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>TELEPHONE:</strong>

    <input type="text" name="telephone" value="{{ $club_member->telephone }}" class="form-control" placeholder="telephone">

</div>

</div>


<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>ADDRESS:</strong>

    <input type="text" name="address" value="{{ $club_member->address }}" class="form-control" placeholder="address">

</div>

</div>


<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>CLUB Name:</strong>

    <input type="text" name="club_name" value="{{ $club_member->club_name }}" class="form-control" placeholder="club name">

</div>

</div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">SAVE</button>

            </div>

        </div>

   

    </form>

@endsection