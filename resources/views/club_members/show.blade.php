@extends('club_members.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> VIEW CLUB MEMBER</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('club_members.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>FIRST NAME:</strong>

                {{ $club_member->fname }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>LAST NAME:</strong>

                {{ $club_member->lname }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>DEPRTMENT:</strong>

                {{ $club_member->departement }}

            </div>

        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>LEVEL:</strong>

    {{ $club_member->level }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>GENDER:</strong>

                {{ $club_member->gender }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>EMAIL:</strong>

    {{ $club_member->email }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>TELEPHONE:</strong>

                {{ $club_member->telephone}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>ADDRESS:</strong>

                {{ $club_member->address}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>CLUB NAME:</strong>

                {{ $club_member->club_name}}

            </div>

        </div>

    </div>

@endsection