@extends('club_members.layout')

 

@section('content')

    <div class="row" style="position:absolute; left:0%;">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>CLUB MANAGEMENT SYSTEM</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('club_members.create') }}"> ADD_Club_Member</a>

          

            <a class="btn btn-primary" href="/admin"> CLOSE</a>

        </div>
        </div>

    

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>FIRST_Name</th>
            <th>LAST_Name</th>
            <th>DEPARTMENT</th>
            <th>LEVEL</th>
            <th>GENDER</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
            <th>ADDRESS</th>
            <th>CLUB_NAME</th>


            <th width="280px">Action</th>

        </tr>

        @foreach ($club_members as $club_member )

        <tr>

            <td>{{ $club_member->id }}</td>

            <td>{{ $club_member->fname }}</td>
            <td>{{ $club_member->lname }}</td>
            <td>{{ $club_member->departement }}</td>
            <td>{{ $club_member->level }}</td>
            <td>{{ $club_member->gender }}</td>
            <td>{{ $club_member->email }}</td>
            <td>{{ $club_member->telephone }}</td>
            <td>{{ $club_member->address }}</td>
            <td>{{ $club_member->club_name }}</td>

            <td>

                <form action="{{ route('club_members.destroy',$club_member->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('club_members.show',$club_member->id) }}">VIEW</a>

    

                    <a class="btn btn-primary" href="{{ route('club_members.edit',$club_member->id) }}">EDIT</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $club_members->links() !!}

      

@endsection