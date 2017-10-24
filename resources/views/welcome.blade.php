@extends('layouts.front')

@section('content')
    <div class="column is-6 is-offset-3">
        <h1 class="title">
            Opensource NOW@
        </h1>
        <h2 class="subtitle">
            $this is the best software platform for running an internet business. We handle billions of dollars every year for forward-thinking businesses around the world.
        </h2>
        <div class="box">

            <div class="field is-grouped">
                <p class="control is-expanded">
                    <input class="input" type="text" placeholder="Enter your email">
                </p>
                <p class="control">
                    <a class="button is-info">
                        Find me a job
                    </a>
                </p>
                @captcha()
            </div>
        </div>
    </div>
@endsection
