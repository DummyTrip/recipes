@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Recipe</div>
                    <div class="panel-body">

                        {!! Form::open(['action' => 'RecipeController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                            @include('recipes.form', ['submitButtonIcon' => 'fa-plus-square', 'submitButtonText' => 'Add Recipe'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
