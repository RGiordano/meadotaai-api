<?php

namespace Tests\Unit;

use App\Entities\City;
use App\Entities\Photo;
use App\Entities\Shelter;
use App\Entities\State;
use Tests\TestCase;

class ShelterTest extends TestCase
{
    public function testPhotoRelationship()
    {
        /**
         * @var Shelter $shelter
         */
        $shelter = factory(Shelter::class, 1)->create([
            'photo_id' => null
        ])->first();

        /**
         * @var Photo $photo
         */
        $photo = factory(Photo::class, 1)->create([
            'imageable_type' => 'App\Entities\Shelter',
            'imageable_id' => $shelter->id,
        ])->first();

        // Define main photo
        $shelter->photo_id = $photo->id;

        $this->assertInstanceOf(Photo::class, $shelter->photo()->first());
        $this->assertEquals($photo->id, $shelter->photo->id);
    }

    public function testPhotosRelationship()
    {
        /**
         * @var Shelter $shelter
         */
        $shelter = factory(Shelter::class, 1)->create([
            'photo_id' => null
        ])->first();

        factory(Photo::class, 2)->create([
            'imageable_type' => 'App\Entities\Shelter',
            'imageable_id' => $shelter->id,
        ]);

        factory(Photo::class, 3)->create([
            'imageable_type' => 'App\Entities\Shelter',
            'imageable_id' => factory(Shelter::class),
        ])->first();

        $this->assertInstanceOf(Photo::class, $shelter->photos()->first());
        $this->assertEquals(2, $shelter->photos()->count());
    }
}
