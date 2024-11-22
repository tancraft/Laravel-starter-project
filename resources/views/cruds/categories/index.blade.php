@extends('adminLayout')

@section('content')

<section class="categories">

    <h2>Toute les catégories</h2>

    <div class="post-container">

        @forelse ($categories as $category)

        
        <article class="card flex">

                <div class="card-content">
                    <h3>{{ $category->name }}</h3>
                </div>

            </article>

        @empty
            <p>Aucune catégorie n'est disponible pour le moment. :(</p>
        @endforelse

    </div>
</section>

@endsection