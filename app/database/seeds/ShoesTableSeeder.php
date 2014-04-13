<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ShoesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$shoe = Shoe::create([
				'brand' 				=> $faker->word,
				'style' 				=> $faker->word,
				'purchase_date' => $faker->dateTimeThisDecade(),
				'miles' 				=> $faker->randomNumber(0, 700)
			]);

			$user = User::find($faker->randomNumber(1,10));
			$user->shoes()->save($shoe);
		}
	}

}