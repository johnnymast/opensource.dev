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

            <form method="post" action="{{ route('home') }}" enctype="multipart/form-data">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <div class="select is-fullwidth">
                            <select name="country">
                                <option value="">Select Language</option>
                                @if ($languages->count() > 0)
                                    @foreach($languages as $language)
                                        <option value="{{$language->github_keyword}}">{{$language->title}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @captcha()
@endsection
