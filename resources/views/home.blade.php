@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <p>You are logged in!</p>

                        <h3>Pages</h3>
                        <ul>
                            <li><a href="{{ action('RecipeController@index') }}">Recipes</a></li>
                            <li><a href="{{ action('RecipeController@create') }}">Create Recipe</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
