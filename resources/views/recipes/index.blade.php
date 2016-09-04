@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Recipes</h2>

        @foreach($recipes as $recipe)
            <div class="panel-body">
{{--                <h2><a href="{{ action("RecipeController@show", ['id' => $recipe->id]) }}">{{$recipe->name}}</a></h2>--}}
                <h2>{{$recipe->name}}</h2>
                <hr>
                <p>Category: {{ $recipe->category }}</p>
                <h4>Ingredients:</h4>
                <ul>
                    @foreach($recipe->ingredients as $info)
                        <li>
                            <h3>{{ $info['quantity']->value }}
                                {{ $info['quantity']->measurement }}
                                <a href="{{ action("RecipeController@index", ['ing[]' => $info['ingredient']->name]) }}">{{ $info['ingredient']->name }}</a>
                            </h3>
                        </li>
                    @endforeach
                </ul>
                <hr>
            </div>
        @endforeach

        {{ $recipes->links() }}
    </div>


@endsection