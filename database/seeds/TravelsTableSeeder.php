<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newTravel = new Travel();
            $newTravel->name = $faker->sentence(4);
            $newTravel->destination_city = $faker->words(1, true);
            $newTravel->destination_country = $faker->countryISOAlpha3();
            $newTravel->accomodation = $faker->randomElement(['Grand Hotel Central','Residence el Chapo','','Greatest Motel Ever','NotThatGood Hotel']);
            $newTravel->price = $faker->randomFloat(2, 200, 3000);
            $newTravel->travel_days = $faker->numberBetween(3, 15);
            $newTravel->date_departure = $faker->dateTimeBetween('+4 week', '+5 week');
            $newTravel->date_return = $faker->dateTimeBetween('+5 week', '+7 week');
            $newTravel->airline_company = $faker->randomElement(['Lufthansa','Ethiopian Airline','Renne Volanti Airlines','Air France']);
            $newTravel->participants = $faker->randomElement(['Coppia', 'Famiglia', 'Single']);
            $newTravel->is_available = $faker->boolean();
            $newTravel->description = $faker->paragraphs(6, true);

            $newTravel->slug = Str::slug($newTravel->name, '-');
            $newTravel->save();
        }
    }
}
