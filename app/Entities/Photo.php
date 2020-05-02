<?php

namespace App\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Photo
 *
 * @package App\Entities
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $path
 * @property int $imageable_id
 * @property string $imageable_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Shelter $imageable
 */
class Photo extends Model
{
    /**
     * Get the owning imageable model.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
