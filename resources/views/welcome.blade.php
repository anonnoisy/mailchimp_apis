<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vital-css@2.2.1/dist/css/vital.min.css">
    </head>
    <body>
        <div class="section">
            <div class="notice">
                <div class="notice-message">
                    <div class="notice-text">
                        @if (session('success'))
                            {!! session('success') !!}
                        @else
                            {!! session('failure') !!}
                        @endif
                    </div>
                    <div class="notice-dismiss"></div>
                </div>
            </div>
            <div class="autogrid full-width-forms">
                <div class="col-1-4 space"></div>
                <div class="col-1-2">
                    <h3 class="center">Subscribe Newsletter</h3>
                    <div class="box bg-white no-first-last">
                        <form action="{{ route('newsletter.store') }}" method="POST">
                            @method('POST')
                            @csrf
                            <p>
                                <label>
                                    <small>Enter your email</small>
                                </label>
                                <input type="email" name="email">
                            </p>
                            <p>
                                <button class="btn red solid" type="submit">Subscribe</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
