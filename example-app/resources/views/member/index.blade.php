@extends('home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Team Members</h1>
            <ul class="list-group">
                @foreach ($teamMembers as $member)
                    <li class="list-group-item">
                        <h3>{{ $member->first_name }} {{ $member->last_name }}</h3>
                        <br>
                        <h2>Member Type: {{ $member->memberType->name }}</h2>
                        
                        @if ($member->racingTeams->count() > 0)
                            <h3>Racing Teams:</h3>
                            <ul>
                                @foreach ($member->racingTeams as $team)
                                    <li>{{ $team->name }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No Racing Teams Assigned</p>
                        @endif
                        
                        
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection