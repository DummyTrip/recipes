<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Ingredient;
use App\Jobs\SendEmail;
use App\Quantity;
use App\Recipe;
use App\User;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class RecipeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        $results_per_page = 20;

        $recipes = $this->filterRecipes($request, $results_per_page);

//        return $recipes;

        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RecipeRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(RecipeRequest $request)
    {
        $input = $request->all();
        $tmp = [];
        foreach ($input['ingredients'] as $key => $value) {
            $tmp[] = [$key, $value];
        }
//        return $tmp;
        $recipe = new Recipe();

        $this->saveRecipe($recipe, $input);

        return redirect('/recipes/' . $recipe->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RecipeRequest $request
     * @param Recipe $recipe
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(RecipeRequest $request, Recipe $recipe)
    {
        $input = $request->all();

        $this->saveRecipe($recipe, $input);

        return redirect('/recipes/' . $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    private function saveRecipe(Recipe $recipe, $input)
    {
        $recipe->name = $input['name'];
        $recipe->category = $input['category'];

        $recipe->save();

        foreach ($input['ingredients'] as $key => $value) {
            $ingredient = Ingredient::firstOrCreate(['name' => $value['name']]);
            $quantity = Quantity::firstOrCreate(['measurement' => $value['measurement']]);

            $recipe->ingredients()->syncWithoutDetaching([$ingredient->id => ['quantity_id' => $quantity->id, 'value' => $value['value']]]);
        }

    }

    private function filterRecipes($request, $results_per_page)
    {
        if ($request->has('ing')) {
            $input = $request->ing;

            // Get recipes that have ingredient name in $request->ing. And operation.
            $bindingsString = trim(str_repeat('?,', count($input)), ','); // e.g. ['?,?,?'], used in WHERE IN
            $input[] = count($input); // e.g. ['?,?,?',3], the number 3 is used in HAVING

            $recipe_ids = DB::select(DB::raw(
                                            "SELECT id, COUNT(*) c FROM (" .
                                            "SELECT r.id, r.name, r.category, r.description, i.name iname, COUNT(r.id) " .
                                            "FROM recipes r INNER JOIN ingredient_recipe ir on r.id = ir.recipe_id " .
                                            "INNER JOIN ingredients i on ir.ingredient_id = i.id " .
                                            "INNER JOIN recipe_user ru on ru.user_id = ". \Auth::user()->id ." and ru.recipe_id = r.id ".
                                            "WHERE i.name IN ($bindingsString) " .
                                            "GROUP BY r.id, r.name, r.category, r.description, i.name" .
                                            ") a " .
                                            "GROUP BY id " .
                                            "HAVING c = ? " .
                                            "ORDER BY c DESC"),
                                    $input);

            // Get recipes that have ingredient name in $request->ing. Or operation.
//             $input = $request->ing;
//             $bindingsString = trim( str_repeat('?,', count($input)), ','); // '?,?,?', used in WHERE IN. No HAVING this time.

//            $recipe_ids = DB::select( DB::raw("SELECT id, COUNT(*) c FROM (".
//            "SELECT r.id, r.name, r.category, r.description, i.name iname, COUNT(r.id) ".
//            "FROM recipes r INNER JOIN ingredient_recipe ir on r.id = ir.recipe_id ".
//            "INNER JOIN ingredients i on ir.ingredient_id = i.id ".
//            "WHERE i.name IN ($bindingsString) ".
//            "GROUP BY r.id, r.name, r.category, r.description, i.name".
//            ") a ".
//            "GROUP BY id ".
//            "ORDER BY c DESC"),
//                $input);

            // Get recipes that have ingredient name in $request->ing
//             $recipes = Recipe::whereHas('ingredients', function($q) use ($request)
//             {
//                 $q->whereIn('name', $request->ing);
//             })->paginate(20);

            $recipes = Recipe::whereIn('id', array_column($recipe_ids, 'id'))->paginate($results_per_page);
        } else {
            $recipes = Recipe::orderBy('num_owners', 'desc')->paginate($results_per_page);
        }

        return $recipes;
    }

    public function purchase(Recipe $recipe) {
        $user = \Auth::user();

        $recipe->owners()->syncWithoutDetaching([$user->id]);
        $recipe->num_owners = $recipe->num_owners + 1;

        $recipe->save();

//        $this->dispatch(new SendEmail($user));

        $payment = new OmnipayController();

        $payment->postPayment($recipe);

//        return redirect('recipes/');
    }
    
    public function userRecipes(User $user) {
        $results_per_page = 20;

        $recipes = Recipe::where('creator_id', $user->id)->orderBy('num_owners', 'desc')->paginate($results_per_page);

        return view('recipes.index', compact('recipes'));
    }

}
