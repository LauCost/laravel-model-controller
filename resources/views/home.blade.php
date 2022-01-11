@extends('layouts.app')

@section('content')

    <div>
        <h1>
            Hello
        </h1>

        <section>
            <h3>
                Lista film
            </h3>

            @forelse ($movies as $movie)

                <div>
                    <h2>
                        {{ $movie->title }}
                    </h2>

                    <h3>
                        {{ $movie->original_title }}
                    </h3>

                    <p>
                        {{ $movie->nationality }}
                    </p>

                    <p>
                        {{ $movie->vote }}
                    </p>

                    <p>
                        {{ $movie->date }}
                    </p>
                </div>

            @empty

            @endforelse
        </section>
    </div>

@endsection
