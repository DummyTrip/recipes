@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Recipes</h2>

        @foreach($recipes as $recipe)
            <div class="panel-body">
                <h2><a href="{{ action("RecipeController@show", ['id' => $recipe->id]) }}">{{$recipe->name}}</a></h2>
                <h4>{{ $recipe->description }}</h4>
                <hr>
                <p>Category: {{ $recipe->category }}</p>
                <h4>Ingredients:</h4>
                <ul>
                    @foreach($recipe->ingredients as $info)
                        <li>
                            <h4>{{ $info['value']}}
                                {{ $info['quantity']->measurement }}
                                {{--*/ $query_parameters = Request::only('ing') /*--}}
                                {{--*/ $query_parameters['ing[]'] = $info['ingredient']->name /*--}}
                                {{ link_to_action("RecipeController@index", $info['ingredient']->name, $query_parameters ) }}
                            </h4>
                        </li>
                    @endforeach
                </ul>
                <hr>
            </div>
        @endforeach

        {{ $recipes->links() }}
    </div>


@endsection