<?php

/**
 * Rooms Price Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Rooms Price
 * @author      Trioangle Product Team
 * @version     0.9.1
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class RoomsPrice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rooms_price';

    public $timestamps = false;

    protected $primaryKey = 'room_id';

    protected $appends = ['steps_count', 'original_night', 'original_week', 'original_month', 'original_cleaning', 'original_additional_guest', 'original_security', 'original_weekend', 'code'];

    // Join with currency table
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency','currency_code','code');
    }

    // Get actual result of night price
    public function getOriginalNightAttribute()
    {
        return $this->attributes['night'];
    }

    // Get actual result of week price
    public function getOriginalWeekAttribute()
    {
        return $this->attributes['week'];
    }

    // Get actual result of month price
    public function getOriginalMonthAttribute()
    {
        return $this->attributes['month'];
    }

    // Get actual result of cleaning price
    public function getOriginalCleaningAttribute()
    {
        return $this->attributes['cleaning'];
    }

    // Get actual result of additional_guest price
    public function getOriginalAdditionalGuestAttribute()
    {
        return $this->attributes['additional_guest'];
    }

    // Get actual result of security price
    public function getOriginalSecurityAttribute()
    {
        return $this->attributes['security'];
    }

    // Get actual result of weekend price
    public function getOriginalWeekendAttribute()
    {
        return $this->attributes['weekend'];
    }

    // Get result of night price for current currency
    public function getNightAttribute()
    {
        return $this->currency_calc('night');
    }

    // Get result of week price for current currency
    public function getWeekAttribute()
    {
        return $this->currency_calc('week');
    }

    // Get result of month price for current currency
    public function getMonthAttribute()
    {
        return $this->currency_calc('month');
    }

    // Get result of cleaning price for current currency
    public function getCleaningAttribute()
    {
        return $this->currency_calc('cleaning');
    }

    // Get result of additional_guest price for current currency
    public function getAdditionalGuestAttribute()
    {
        return $this->currency_calc('additional_guest');
    }

    // Get result of security price for current currency
    public function getSecurityAttribute()
    {
        return $this->currency_calc('security');
    }

    // Get result of weekend price for current currency
    public function getWeekendAttribute()
    {
        return $this->currency_calc('weekend');
    }

    // Get steps_count using sum of rooms_steps_status
    public function getStepsCountAttribute()
    {
        $result = RoomsStepsStatus::find($this->attributes['room_id']);

        return 6 - ($result->basics + $result->description + $result->location + $result->photos + $result->pricing + $result->calendar);
    }

    // Get result of night price for given date
    public function price($date)
    {
        $where = ['room_id' => $this->attributes['room_id'], 'date' => $date];

        $result = Calendar::where($where);

        if($result->count())
            return $result->first()->price;
        else
            return $this->currency_calc('night');
    }

    // Get result of calendar event status for given date
    public function status($date)
    {
        $where = ['room_id' => $this->attributes['room_id'], 'date' => $date];
        
        $result = Calendar::where($where);

        if($result->count())
            return $result->first()->status;
        else
            return false;
    }
    
    // Get result of calendar notes for given date
    public function notes($date)
    {
        $where = ['room_id' => $this->attributes['room_id'], 'date' => $date];

        $result = Calendar::where($where);

        if($result->count())
            return $result->first()->notes;
        else
            return false;
    }

    // Calculation for current currency conversion of given price field
    public function currency_calc($field)
    {
        $rate = Currency::whereCode($this->attributes['currency_code'])->first()->rate;

        $usd_amount = $this->attributes[$field] / $rate;

        $default_currency = Currency::where('default_currency',1)->first()->code;

        $session_rate = Currency::whereCode((Session::get('currency')) ? Session::get('currency') : $default_currency)->first()->rate;

        return round($usd_amount * $session_rate);
    }

    // Get default currency code if session is not set
    public function getCodeAttribute()
    {
        if(Session::get('currency'))
           return Session::get('currency');
        else
           return DB::table('currency')->where('default_currency', 1)->first()->code;
    }
}
