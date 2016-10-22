@extends('layouts.app')

@section('content')
    <div class="panel-body">
        <h2>{{$recipe->name}}</h2>
        <hr>
        <h3>Creator: {{ $recipe->creator->name }}</h3>
        <p>Category: {{ $recipe->category }}</p>
        <h2>Ingredients:</h2>
        <ul>
            @foreach($recipe->ingredients as $info)
                <li>
                    <h3>{{ $info['value']}}
                        {{ $info['quantity']->measurement }}
                        <a href="{{ action("RecipeController@index", ['ing[]' => $info['ingredient']->name]) }}">{{ $info['ingredient']->name }}</a>
                    </h3>
                </li>
            @endforeach
        </ul>

        <h3>Price: {{ $recipe->price }}</h3>

    </div>

    <div class="panel-body">
        <a href="{{ action("RecipeController@edit", ['id' => $recipe->id]) }}">Edit Recipe</a>
    </div>

@endsection