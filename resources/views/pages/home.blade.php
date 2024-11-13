@extends('publicLayout')

@section('content')
    <main class="mt-6">

        <section class="">
            <h2>Vibrant Ecosystem</h2>       
            <p>
               Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com">Telescope</a>, and more.
            </p>
        </section>

        <section>

            <h2>Tout les articles</h2>

            <div class="post-container">
                @forelse ($posts as $post)
                    <div class="post">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                        <div class="img-container">
                            <img src="{{$post->image}}" alt="">
                        </div>
                    </div>
                @empty
                    <p>Aucun article n'est disponible pour le moment. :(</p>
                @endforelse
            </div>

        </section>

    </main>
@endsection