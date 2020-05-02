<?php

namespace Tests\Unit;

use App\Entities\Country;
use App\Entities\State;
use Tests\TestCase;

class CountryTest extends TestCase
{
    public function testStatesRelationship()
    {
        /**
         * @var Country $country
         */
        $country = factory(Country::class, 1)->create()->first();

        factory(State::class, 2)->create([
            'country_id' => $country->id
        ]);
        factory(State::class, 3)->create();

        $this->assertInstanceOf(State::class, $country->states()->first());
        $this->assertEquals(2, $country->states()->count());
    }
}
