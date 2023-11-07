{{-- resources/views/teams.blade.php --}}
@extends('home') 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Racing Teams</h1>
            <ul class="list-group">
                @foreach ($teams as $team)
                    <li class="list-group-item">
                        <h1>{{ $team->name }}</h1>
                        <br>
                        <h3>Members:</h3>
                        <br>
                        <ul>
                            @foreach ($team->teamMembers as $member)
                                <li>{{ $member->first_name }} {{ $member->last_name }} - {{ $member->memberType->name }}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection