<?php

/**
 * Rooms Photos Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Rooms Photos
 * @author      Trioangle Product Team
 * @version     0.9.1
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomsPhotos extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms_photos';

    public $timestamps = false;

    protected $appends = ['steps_count'];

    // Get steps_count using sum of rooms_steps_status
    public function getStepsCountAttribute()
    {
        $result = RoomsStepsStatus::find($this->attributes['room_id']);

        return 6 - ($result->basics + $result->description + $result->location + $result->photos + $result->pricing + $result->calendar);
    }
}
