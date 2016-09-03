@extends('layouts.app')

@section('content')
    <div class="container">

        <h2>Recipes</h2>

        @foreach($recipes as $recipe)
            <div class="panel-body">
                <h2><a href="{{ action("RecipeController@show", ['id' => $recipe->id]) }}">{{$recipe->name}}</a></h2>
                <hr>
            </div>
        @endforeach
    </div>

@endsection