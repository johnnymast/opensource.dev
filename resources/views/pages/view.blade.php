@extends('layouts.front')

@section('content')


    <div class="column is-8 is-offset-2 is-page">
        <section class="articles">

            <!-- START PROMO BLOCK -->
            <section class="hero is-dark">
                <div class="hero-body">
                    <div class="container">
                        <p class="title">{{ $page->title }}</p>
                        <div class="subtitle">{{ Carbon\Carbon::parse($page->created_at)->format('d M Y i') }}</div>
                    </div>
                </div>
            </section>
            <!-- END PROMO BLOCK -->

            <!-- START ARTICLE -->
            <div class="card article">
                <div class="card-content">
                    <div class="content article-body">{!! $page->body !!}</div>
                </div>
            </div>
            <!-- END ARTICLE -->

        </section>
    </div>
@endsection
