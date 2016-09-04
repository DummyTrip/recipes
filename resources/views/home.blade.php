@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <a href="{{ action('RecipeController@index') }}"><h2>Рецепти</h2></a>
                        <hr>
                        <a href="{{ action('RecipeController@create') }}"><h2>Додај Рецепт</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
