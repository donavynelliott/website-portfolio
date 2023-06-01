@extends('layouts.app')

@section('content')

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
        <div class=" card text-bg-gray-dark text-white">
            <!-- Place image from the resources/images folder -->
            <img src="{{ asset('images/ospb-screenshot-300.png') }}" class="card-img-top" width="100%" height="225px">
            <div class="card-body">
                <h5 class="card-title">OSRS Profit Buddy</h5>
                <p class="card-text">A Video Game Calc & Tool project utilizing DataTables to display up to date market data.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class=" card text-bg-gray-dark text-white">
            <!-- Place image from the resources/images folder -->
            <img src="{{ asset('images/bingo-buddy-screenshot-300.png') }}" class="card-img-top" width="100%" height="225px">
            <div class="card-body">
                <h5 class="card-title">Bingo Buddy</h5>
                <p class="card-text">A bingo-type game, where groups can setup bingo boards to compete against each other.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class=" card text-bg-gray-dark text-white">
            <!-- Place image from the resources/images folder -->
            <img src="{{ asset('images/toolkit-ext-screenshot-300.png') }}" class="card-img-top" width="100%" height="225px">
            <div class="card-body">
                <h5 class="card-title">ToolkitExt</h5>
                <p class="card-text">A game mod and Twitch Extension that gives viewers control of the in game events.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class=" card text-bg-gray-dark text-white">
            <!-- Place image from the resources/images folder -->
            <img src="{{ asset('images/twitch-toolkit-screenshot-300.png') }}" class="card-img-top" width="100%" height="225px">
            <div class="card-body">
                <h5 class="card-title">TwitchToolkit</h5>
                <p class="card-text">My first C# project, a game mod that integrates with twitch text chat to influence the game.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
</div>

@endsection