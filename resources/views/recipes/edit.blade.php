@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Recipe</div>
                    <div class="panel-body">

                        {!! Form::model($recipe, ['action' => ['RecipeController@update', $recipe->id], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}

                        @include('recipes.form', ['submitButtonIcon' => 'fa-btn fa-pencil', 'submitButtonText' => 'Edit Recipe'])

                        {!! Form::close() !!}

                        {!! Form::open(['action' => ['RecipeController@destroy', $recipe->id], 'method' => 'DELETE', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>  Delete Recipe', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
