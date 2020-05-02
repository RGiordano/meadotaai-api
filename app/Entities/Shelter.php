<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shelter
 *
 * @package App\Entities
 *
 * @property int $id
 * @property int $city_id
 * @property int $photo_id
 * @property string $name
 * @property string $address
 * @property string $phone_number
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 *
 * @property Photo $photo
 * @property Collection $photos
 */
class Shelter extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function photo()
    {
        return $this->morphOne('App\Entities\Photo', 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function photos()
    {
        return $this->morphMany('App\Entities\Photo', 'imageable');
    }
}
