<?php


Route::get('/', function()
{

	// $categories = Category::all();
	//EAGER LOADING..... ALL IN ONE
	// $categories = Category::with('subcategories')->get();

	//-----------------------------------------------------------------------------------------

	//view ma pathako
	// return View::make('index')->with(['categories' => $categories]);

	//INSERT INTO INTO CATEGORIES AND SUBCATEGORIES table....
	//home appliances >> kitchenware

	//make category
	/*$category = Category::create([
		'name' => 'Industrial'
	]);*/

	//previous create category return result
	//$category->id

	//create subcategory
	/*$category->subcategories()->create([
		'name' => 'Kitchenware'
	]);*/

	/*Subcategory::create([
		'category_id'=> $category->id,
		'name' => 'Marvel Cutter'
	]);*/

	//Reverse thing........
	/*$subcatcar = Subcategory::find(1);

	var_dump($subcatcar->name);
	var_dump($subcatcar->category->name);*/


});
