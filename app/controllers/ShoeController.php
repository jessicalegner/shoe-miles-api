<?php

class ShoeController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$shoe = new Shoe;
		$shoe->brand 					= Input::get('brand');
		$shoe->style 					= Input::get('style');
		$shoe->purchase_date 	= Input::get('purchase_date');
		$shoe->miles 					= Input::get('miles');

		$shoe->save();

		return Response::json($shoe->toArray(), 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$shoe = Shoe::find($id);

		if( ! $shoe) {
			return Response::json([
				'error' => [
					'message' => 'That shoe could not be found.',
					'code' => '001'
				]
			], 404);
		}

		return Response::json($shoe->toArray(), 200);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shoe = Shoe::find($id);
		$shoe->miles = $shoe->miles + Input::get('miles');

		$shoe->save();

		return Response::json($shoe->toArray(), 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$shoe = Shoe::find($id);

		$shoe->delete();

		return Response::json(Shoe::all()->toArray(), 200);
	}

	/**
	 * Get the users shoes
	 *
	 * @param int $user
	 * @return Response
	 */
	public function userShoes($user)
	{
		$shoes = User::find($user)->shoes()->get();

		if( ! $shoes) {
			return Response::json([
				'error' => [
					'message' => 'No shoes could be found for this user',
					'code' => '002'
				]
			], 404);
		}

		return Response::json($shoes->toArray(), 200);
	}
}