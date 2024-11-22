@extends('adminLayout')

@section('content')

<section class="users">

    <h2>Tout les utilisateurs</h2>

    <div class="post-container">

        @forelse ($users as $user)

        
        <article class="card flex">

                <div class="card-content">
                    <h3>{{ $user->name }}</h3>
                </div>

            </article>

        @empty
            <p>Aucun utilisateur n'est disponible pour le moment. :(</p>
        @endforelse

    </div>
</section>

@endsection