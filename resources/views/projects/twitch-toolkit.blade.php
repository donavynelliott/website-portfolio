@extends('layouts.app')

@section('content')
<div class="container text-bg-gray-dark rounded-3 my-4 p-4">
    <div class="row mb-4">
        <h1 class="display-3 fw-bold">Twitch Toolkit</h1>
        <p>
            I'm proud to present TwitchToolkit, an innovative project that began as a chatbot enabling users to purchase in-game items while watching a RimWorld stream.
            This interactive experience allowed viewers to earn coins periodically and utilize chat commands to spawn items within the game.
        </p>
        <p>
            As the project evolved over the years, TwitchToolkit expanded its features to include viewer-owned characters,
            chaos-inducing events triggered by viewer purchases, and even the ability to save the colony from imminent disaster for those feeling generous.
            Developed using C# and leveraging a TCP socket resembling an IRC chat room,
            TwitchToolkit operates through a separate thread where a buffer facilitates communication of chat messages to and from the game thread.
        </p>
        <p>
            This incredible endeavor garnered significant recognition, with thousands of channels downloading and utilizing the mod.
            TwitchToolkit became a prominent fixture within the Twitch RimWorld category,
            defining the interactive experience for enthusiasts over the span of several years.
        </p>
        <p>
            <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=1718525787">
                <button class="btn btn-primary">View on Steam Workshop</button>
            </a>
            <a href="https://github.com/hodlhodl1132/twitchtoolkit">
                <button class="btn btn-secondary">View on Github</button>
            </a>
        </p>
    </div>
</div>

<!-- Project Built with The Following -->
<div class="p-5 mb-4 bg-light text-dark rounded-3 text-center">
    <div class="container-fluid py-5">
        <div class="row">
            <h1 class="display-5 fw-bold">Built With</h1>
            <p class="fs-4">
                The project is built with the following technologies:
            </p>
            <ul class="list-unstyled fs-5">
                <li>Rimworld Mod API</li>
                <li><a href="https://github.com/pardeike/Harmony">Harmony</a></li>
                <li>.NET framework 3.5 & .NET framework 4.7.2</li>
                <li>Twitch Viewer API</li>
            </ul>
        </div>
    </div>
</div>
@endsection