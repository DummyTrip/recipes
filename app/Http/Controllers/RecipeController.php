<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Recipe;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Request $request)
    {
        if ($request->has('ing')){
            // get recipes where ingredients has name in $request->ing
            $recipes = Recipe::whereHas('ingredients', function($q) use ($request)
            {
                $q->whereIn('name', $request->ing);
            })->get();
        } else
        {
            $recipes = Recipe::all();
        }

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

        $recipe = new Recipe();

        $this->saveRecipe($recipe, $input);

        return redirect('/recipes/'.$recipe->id);
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

        return redirect('/recipes/'.$recipe->id);
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
    }

}
