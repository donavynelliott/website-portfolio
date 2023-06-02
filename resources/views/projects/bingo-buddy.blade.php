@extends('layouts.app')

@section('content')

<div class="container text-bg-gray-dark rounded-3 my-4 p-4">
    <div class="row mb-4">
        <h1 class="display-3 fw-bold">Bingo Buddy</h1>
        <p>
            I developed Bingo Buddy as a solution to streamline competition organization within my gaming group.
            This platform revolves around engaging tasks that fill up squares on a dynamic bingo board.
            The objective is to be the first individual or team to complete the board(s) and emerge victorious in the competition.
            While the project is still in progress, numerous features have already been implemented.
        </p>
        <p>
            With Bingo Buddy, you have the ability to create events, define start and end dates, and set the maximum number of players.
            Furthermore, you can attach multiple bingo boards to each event, ranging in size from 3x3 to 6x6.
            These boards offer various challenges, such as completing a line or achieving a blackout by marking off all squares.
        </p>
        <a href="https://github.com/donavynelliott/Bingo-Buddy">
            <button class="btn btn-primary">View on Github</button>
        </a>
    </div>
    <div class="row fs-5">
        <div class="col-md-7" style="text-align: left!important">
            <h2 class=" fw-bold">Current Features</h2>
            <p>
                Create Event with start/end dates and max players
            </p>
            <p>
                Create multiple bing boards for completion in events
            </p>
            <h2 class="fw-bold">Planned Features</h2>
            <p>
                <span class="fw-bold">Completion Submissions</span> <br> Event administrator to approve/deny submissions and leave feedback if needed on submitted square completions.
            </p>
            <p>
                <span class="fw-bold">Event Automation</span> <br> Lock a board and the event settings before an event starts. Decided winners according to event rules.
            </p>
            <p>
                <span class="fw-bold">Leaderboards</span> <br> Allow event attendees to view completion leaders and their individual boards.
            </p>
            <p>
                <span class="fw-bold">Teams</span> <br> Let the event administrator choose or randomize teams from pool of attendees.
            </p>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('images/bingo-buddy-board.png') }}" alt="Bingo Buddy" class="img-fluid rounded-3">
        </div>
    </div>
</div>

@endsection