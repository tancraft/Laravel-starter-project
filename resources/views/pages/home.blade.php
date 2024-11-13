@extends('publicLayout')

@section('content')

    <section class="">
        <h2>Vibrant Ecosystem</h2>

        <p>
           Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com">Telescope</a>, and more.
        </p>

    </section>

    <section class="posts">

        <h2>Tout les articles</h2>

        <div class="post-container">

            @forelse ($posts as $post)

            
            <article class="card flex">

                    <div class="thumbnail">
                    
                        <img src="{{$post->image}}" alt="">
                    
                    </div>

                    <div class="card-content">

                        <h2>{{ $post->title }}</h2>
    
                        <p>{{ $post->content }}</p>

                    </div>

                </article>

            @empty
                <p>Aucun article n'est disponible pour le moment. :(</p>
            @endforelse

        </div>
    </section>

@endsection