<?php

namespace Tests\Unit;

use App\Entities\Photo;
use App\Entities\Shelter;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    public function testMorphToImageable()
    {
        /**
         * @var Shelter $shelter
         */
        $shelter = factory(Shelter::class, 1)->create()->first();

        /**
         * @var Photo $photo
         */
        $photo = factory(Photo::class, 1)->create([
            'imageable_type' => 'App\Entities\Shelter',
            'imageable_id' => $shelter->id,
        ])->first();

        $this->assertInstanceOf(Shelter::class, $photo->imageable()->first());
        $this->assertEquals($photo->imageable->id, $shelter->id);
    }
}
