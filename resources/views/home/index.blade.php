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

                @foreach ($projects as $set)
                    <div class="columns project_container">
                        <div class="column is-full">
                            @foreach($set as $project)
                                <div class="card project-card">
                                    <div class="card">
                                        <header class="card-header">
                                            <p class="card-header-title">
                                                <a href="{{$project['repository_url']}}">{{ucfirst($project['repository_name'])}}</a>
                                            </p>
                                            <a href="#" class="card-header-icon" aria-label="more options">
                                              <span class="icon">
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                              </span>
                                            </a>
                                        </header>
                                        <div class="card-content">
                                            <div class="media">
                                                <div class="media-left">
                                                    <figure class="image is-48x48">
                                                        <img src="/images/github.svg"
                                                             alt="Placeholder image">
                                                    </figure>
                                                </div>
                                                <div class="media-content">
                                                    <p class="titles is-4"><strong>Title:</strong><a href="{{$project['url']}}">{{$project['title']}}</a></p>
                                                    <p class="subtitles is-4"><a target="_blank"
                                                                                 href="{{url($project['user']['profile'])}}">{{'@'}}{{ $project['user']['name'] }}</a>
                                                    </p>
                                                </div>
                                            </div>

                                            {{--<div class="content has-text-left">{!! $project['content'] !!}</div>--}}
                                            <div class="content has-text-left">
                                                @foreach($project['tags'] as $tag)
                                                    <span class="tag is-primary"
                                                          style="background-color: {{ $tag['color'] }}">{{$tag['name']}}</span>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
