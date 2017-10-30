@extends('layouts.front')

@section('content')
    <div class="column is-6 is-offset-3" id="app">
        <h1 class="title">
            Opensource NOW
        </h1>
        <h2 class="subtitle">
            $this is the best way to find opensource projects that you like in your natural habitat. You go girl!
        </h2>
        <div class="box">

            {{--<div class="field is-grouped">--}}
                {{--<p class="control is-expanded">--}}
                    {{--<input class="input" type="text" placeholder="Enter your email">--}}
                {{--</p>--}}
                {{--<p class="control">--}}
                    {{--<a class="button is-info">--}}
                        {{--Find me a job--}}
                    {{--</a>--}}
                {{--</p>--}}

            {{--</div>--}}

            <div class="field has-addons">
                <div class="control is-expanded">
                    <div class="select is-fullwidth">
                        <select name="country">
                            <option value="Argentina">Argentina</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Chile">Chile</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Venezuela">Venezuela</option>
                        </select>
                    </div>
                </div>
                <div class="control">
                    <button type="submit" class="button is-primary">Search</button>
                </div>
            </div>
        </div>
    </div>
    @captcha()
@endsection
