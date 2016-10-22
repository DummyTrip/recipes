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
        {{--@if(!session()->has('index'))--}}
            {{--{{ session(['index' => 0]) }}--}}
        {{--@endif--}}
        {{ session(['index' => 0]) }}
        index = -1;

        {{--$(document).ready(function() {--}}
            {{--alert("da");--}}

            {{--@if( session('index') > 0 )--}}
                {{--@foreach( range(0, session('index')) as $index )--}}
                    {{--addInputIngredient();--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--});--}}


        $("#add_ingredient").click(function() {
            // add the new div after 100 milliseconds
            index = index + 1;
            setTimeout(addInputIngredient, 100);
            {{ session(['index' => (session('index') + 1)]) }}
        });

        {{--$("[id^=del_ingredient]").click(function() {--}}
            {{--// remove the new div after 100 milliseconds--}}
{{--//            setTimeout(removeInputIngredient(), 100);--}}
            {{--$("#ingredients\\[0\\]").remove();--}}
            {{--alert('da');--}}
            {{--{{ session(['index' => (session('index') - 1)]) }}--}}
        {{--});--}}


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
//                    "<button class='btn btn-danger' id='del_ingredient[0]' type='button'><i class='fa fa-times' aria-hidden='true'></i></button>"+
                    "</div>"+
                    "</div>";

            document.getElementById(divName).appendChild(newdiv);
        }

    </script>
@endsection
