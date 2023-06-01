@extends('layouts.app')

@section('content')

<div class="p-5 mb-4 bg-light text-dark rounded-3 text-center">
    <div class="container-fluid py-5">
        <div class="row">
            <h1 class="display-5 fw-bold">Profit Buddy</h1>
            <p class="fs-4">
                I've created a passion-driven concept project using Laravel, aimed at honing my skills with the framework and showcasing my abilities. The project revolves around a database that stores item prices, which are automatically updated every five minutes through a reliable cron job. Moreover, this dynamic database fuels a range of calculators designed to effortlessly compute profit margins and provide valuable insights on various aspects.
            </p>
            <p>
                <a href="https://ospb.donavynelliott.com">
                    <button class="btn btn-primary">View Demo Site</button>
                </a>
                <a href="https://github.com/donavynelliott/osrs-profit-buddy">
                    <button class="btn btn-secondary">View on Github</button>
                </a>
            </p>
        </div>
    </div>
</div>

<div class="container text-bg-gray-dark rounded-3 mb-4 p-4">
    <div class="row">
        <div class="col-md-7">
            <h2 class="display-5 fw-bold">Features</h2>
            <p class="fw-bold fs-4">
                The project is still in development, but the following features are currently implemented:
            </p>
            <ul class="list-unstyled fs-5">
                <li>Up to Date prices via cron jobs</li>
                <li>Profit Calculations with Tax Formula</li>
                <li>Account Registration and Login</li>
                <li>Item Searches, with individualized item pages</li>
                <li>Level/Experience Calculators</li>
            </ul>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('images/profit-buddy-screenshot.png') }}" alt="Profit Buddy" class="img-fluid rounded-3">
        </div>
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
                <li>Laravel</li>
                <li>Bootstrap</li>
                <li>MySQL</li>
                <li>jQuery</li>
                <li>Runescape.com Unofficial API</li>
            </ul>
        </div>
    </div>
</div>
@endsection