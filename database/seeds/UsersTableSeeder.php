<?php 


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker\Factory::create();

		foreach (range(1, 10) as $index) {
			User::create([

				'username' => $faker->name,
				'password' => Hash::make('password')
			]);
		}

	}
}


?>