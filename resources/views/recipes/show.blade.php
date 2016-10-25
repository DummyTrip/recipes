@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-body">

            <h2><a href="{{ action("RecipeController@show", ['id' => $recipe->id]) }}">{{$recipe->name}}</a></h2>
            <p>Category: {{ $recipe->category }}</p>
            <h3>Creator: <a href="{{ action("RecipeController@userRecipes", ['id' => $recipe->creator->id]) }}">{{ $recipe->creator->name }}</a> </h3>
            <h4>Description: {{ $recipe->description }}</h4>
            <h3>Price: {{ $recipe->price }}</h3>

            @if( $recipe->owners()->get()->contains(\Auth::user()) )
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

            @else
                <a href="#">Buy</a>
            @endif

        </div>
        @if($recipe->creator->id === \Auth::user()->id)
            <div class="panel-body">
                <a href="{{ action("RecipeController@edit", ['id' => $recipe->id]) }}">Edit Recipe</a>
            </div>
        @endif
    </div>
@endsection