<?php

namespace Tests\Unit;

use App\Entities\City;
use App\Entities\Country;
use App\Entities\State;
use Tests\TestCase;

class CityTest extends TestCase
{
    public function testCountryRelationship()
    {
        /**
         * @var Country $country
         */
        $country = factory(Country::class, 1)->create()->first();

        /**
         * @var City $city
         */
        $city = factory(City::class, 1)->create([
            'country_id' => $country->id
        ])->first();

        $this->assertInstanceOf(Country::class, $city->country()->first());
        $this->assertEquals($country->id, $city->country->id);
    }

    public function testStateRelationship()
    {
        /**
         * @var State $state
         */
        $state = factory(State::class, 1)->create()->first();

        /**
         * @var City $city
         */
        $city = factory(City::class, 1)->create([
            'state_id' => $state->id
        ])->first();

        $this->assertInstanceOf(State::class, $city->state()->first());
        $this->assertEquals($state->id, $city->state->id);
    }
}
