@extends('layouts.front')

@section('content')
    <div class="column is-6 is-offset-3">
        <h1 class="title">{{ setting('site.title') }}</h1>
        <h2 class="subtitle">
            @if ($randomquote)
            {{$randomquote->quote}}
            @endif
        </h2>
        <div class="box">
            @if ($errors->any())
                <article class="message is-danger">
                    <div class="message-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endif
            {!! Form::open(['route' => 'home']) !!}
            <div class="field has-addons language-field">
                <div class="control is-expanded">
                    <div class="select is-fullwidth">
                        {{ Form::select('language', $languages, '', ['placeholder' => 'Select a language...'])  }}
                    </div>
                </div>
                <div class="control">
                    {{ Form::submit('Search',['class' => 'button is-primary']) }}
                </div>
            </div>
            @captcha()
            {!! Form::close() !!}
        </div>
        <div id="app">

            @if (isset($projects))
                <div class="columns project_container">
                    @foreach ($projects as $set)
                        <div class="column project_column is-full">
                            @foreach($set as $project)
                                <div class="card project-card">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="/images/github.svg"
                                                             alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="titles is-4"><a href="{{$project['repository_url']}}">{{$project['repository_name']}}</a> | <a href="{{$project['url']}}">{{$project['title']}}</a></p>
                                                    <p class="subtitles is-6"><a target="_blank" href="{{url($project['user']['profile'])}}">{{'@'}}{{ $project['user']['name'] }}</a></p>
                                                </div>
                                            </div>

                                            <div class="content has-text-left">{!! $project['content'] !!}</div>
                                            <div class="content has-text-left">
                                                @foreach($project['tags'] as $tag)
                                                    <span class="tag is-primary" style="background-color: {{ $tag['color'] }}">{{$tag['name']}}</span>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
