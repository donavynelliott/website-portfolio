<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
            margin-top: 3rem;
        }
    </style>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="text-center text-white bg-dark">
    @include('layouts.navbar')

    <main>
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <div class="px-3 py-5">
                <h1>I am a Web/Software Developer</h1>
                <p class="lead">
                    Software developer with expertise in API Development, Laravel framework, and C# mod development.
                    A proven track record of building scalable solutions and crafting intuitive user experiences,
                    I bring a passion for creative technologies and a dedication to delivering high-quality code.
                </p>
                <p class="lead">
                    <a href="{{ route('projects') }}" class="btn btn-lg btn-secondary fw-bold">My Latest Projects</a>
                </p>
            </div>
        </div>
        <div id="contact-section" class="container-fluid col-xl-10 col-xxl-8 px-4 py-5 text-white bg-dark py-4">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="display-2 fw-bold lh-1 mb-3">Contact Me</h2>
                    <p class="lead">
                        Donavyn Elliott - Github: <a href="https://github.com/donavynelliott" class="text-white">@donavynelliott</a>
                    </p>
                    <p class="col-lg-10">
                        Hello and welcome to my portfolio website! I'm an experienced web developer specializing in PHP, particularly with Laravel, as well as a skilled C# game developer. I have a passion for creating robust and elegant web solutions and crafting engaging gaming experiences.
                    </p>
                    <p class="col-lg-10">
                        If you're looking for a dedicated professional to join your team or collaborate on exciting projects, you've come to the right place. With my strong expertise in PHP web development and Laravel framework, I can build dynamic and scalable web applications tailored to your specific needs.
                    </p>
                    <p class="col-lg-10">
                        If you would like to get in touch me with, please fill out the form or send me an email at the address below. I look forward to hearing from you!
                    </p>
                    <p class="col-lg-10" id="email-address">
                        Email:
                        <button class="btn btn-primary btn-outline" type="button" id="email-button">
                            Click To Reveal
                        </button>
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 rounded-3 text-bg-gray-dark">
                        <div class="mb-3">
                            <h3 class="fw-light fs-1">Send Me a Message</h3>
                        </div>
                        @csrf
                        <div class="mb-3">
                            <label for="form-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="form-name" placeholder="Your name">
                        </div>
                        <div class="mb-3">
                            <label for="form-email-address" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="form-email-address" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="form-message" class="form-label">Message</label>
                            <textarea class="form-control" placeholder="Leave a message here" id="form-message" style="height: 100px"></textarea>

                        </div>
                        <button id="message-submit" class="w-100 btn btn-lg btn-primary" type="button">Send Message</button>
                        <hr class="my-4">
                        <small>When submitting this form, your email address will be sent to the server and stored in the database for the purpose of contacting you back.</small>
                    </form>
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index: 11">
            <div id="message-toast" class="toast hide bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">

                </div>
            </div>
        </div>

        @include('layouts.footer')
    </main>
    <script>
        $(document).ready(function() {
            $('#email-button').click(function() {
                $.ajax({
                    url: '/api/contact-email/',
                    type: 'GET',
                    success: function(data) {
                        var mailTo = '<a href="mailto:' + data.email + '" class="text-white">' + data.email + '</a>';
                        var gmailLink = '<a target="_blank" href="https://mail.google.com/mail/u/0?fs=1&tf=cm&su=Website%20Contact%20Form&to=' + data.email + '" class="text-white">Gmail</a>';
                        $('#email-address').html('Email: ' + mailTo + ' | ' + gmailLink);
                        $('#email-button').remove();
                    }
                });
            });

            $('#message-submit').click(function() {
                $.ajax({
                    url: "{{ route('messages.store') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        name: $('#form-name').val(),
                        email: $('#form-email-address').val(),
                        message: $('#form-message').val(),
                    },
                    type: 'POST',
                    success: function(data) {
                        if (data.status !== undefined && data.status === 'success' && data.message !== undefined) {
                            toast(data.message, true)
                        } else {
                            toast('An error occurred while sending your message.', false)
                        }
                    },
                    error: function(data) {
                        var data = data.responseJSON;
                        if (data.status !== undefined && data.status === 'error' && data.errors !== undefined) {
                            var errors = '';
                            for (var key in data.errors) {
                                errors += data.errors[key] + '<br>';
                            }
                            toast(errors, false)
                        } else {
                            toast('An error occurred while sending your message.', false)
                        }
                    }
                })
            });

            function toast(message, success) {
                $('#message-toast').removeClass(success ? 'bg-danger' : 'bg-success');
                $('#message-toast').addClass(success ? 'bg-success' : 'bg-danger');
                $('#message-toast .toast-body').html(message);
                $('#message-toast').toast('show');
            }
        });
    </script>
</body>

</html>