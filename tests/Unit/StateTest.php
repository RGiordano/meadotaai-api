<?php

namespace Tests\Unit;

use App\Entities\Country;
use App\Entities\State;
use Tests\TestCase;

class StateTest extends TestCase
{
    public function testCountryRelationship()
    {
        /**
         * @var Country $country
         */
        $country = factory(Country::class, 1)->create()->first();

        /**
         * @var State $state
         */
        $state = factory(State::class, 1)->create([
            'country_id' => $country->id
        ])->first();

        $this->assertInstanceOf(Country::class, $state->country()->first());
        $this->assertEquals($country->id, $state->country->id);
    }
}
