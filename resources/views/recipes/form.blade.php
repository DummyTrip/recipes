<div id="createRecipeForm">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}

        <div class="col-md-6">
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}

            @include('partials.error', ['error' => 'name'])
        </div>
    </div>

    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
        {!! Form::label('category', 'Category:', ['class' => 'col-md-4 control-label']) !!}

        <div class="col-md-6">
            {!! Form::text('category', old('category'), ['class' => 'form-control']) !!}

            @include('partials.error', ['error' => 'category'])
        </div>
    </div>

    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', 'Description:', ['class' => 'col-md-4 control-label']) !!}

        <div class="col-md-6">
            {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}

            @include('partials.error', ['error' => 'description'])
        </div>
    </div>

    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
        {!! Form::label('price', 'Price:', ['class' => 'col-md-4 control-label']) !!}

        <div class="col-md-6">
            {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}

            @include('partials.error', ['error' => 'price'])
        </div>
    </div>

</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> Add Ingredient', ['class' => 'btn', 'id' => 'add_ingredient']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::button('<i class="fa '.$submitButtonIcon.'" aria-hidden="true"></i> '.$submitButtonText, ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
    </div>
</div>

@section('footer')
    <script type="text/javascript">
        {{ session(['index' => 0]) }}
        index = -1;

        $("#add_ingredient").click(function() {
            // add the new div after 100 milliseconds
            index = index + 1;
            setTimeout(addInputIngredient, 100);
            {{ session(['index' => (session('index') + 1)]) }}
        });

        function addInputIngredient() {
            var divName = 'createRecipeForm';
            var newdiv = document.createElement('div');
            newdiv.innerHTML = ""+
                    "<div id='ingredients["+index+"]'>" +
                    "<label for='ingredients["+index+"]' class='col-md-4 control-label'>Ingredient "+index+":</label>" +
                    "<div class='col-md-6'>" +

                    "<div class='form-group'>" +
                    "<label for='ingredients["+index+"][name]' class='col-md-4 control-label'>Name:</label>"+

                    "<div class='col-md-8'>"+
                    "<input class='form-control' name='ingredients["+index+"][name]' type='text' id='ingredients["+index+"][name]'>"+

                            "</div>"+
                    "</div>"+

                    "<div class='form-group'>" +
                    "<label for='ingredients["+index+"][value]' class='col-md-4 control-label'>Value:</label>"+
                    "<div class='col-md-8'>"+
                    "<input class='form-control' name='ingredients["+index+"][value]' type='text' id='ingredients["+index+"][value]'>"+

                            "</div>"+
                    "</div>"+

                    "<div class='form-group'>" +
                    "<label for='ingredients["+index+"][measurement]' class='col-md-4 control-label'>Measurement:</label>"+
                    "<div class='col-md-8'>"+
                    "<input class='form-control' name='ingredients["+index+"][measurement]' type='text' id='ingredients["+index+"][measurement]'>"+

                            "</div>"+
                    "</div>"+

                            "</div>"+

                    "<div class='col-md-1'>"+
                    "</div>"+
                    "</div>";

            document.getElementById(divName).appendChild(newdiv);
        }

    </script>
@endsection
