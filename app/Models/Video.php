<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use App\Http\Traits\QueryTrait;

class Video extends Model
{
    use QueryTrait;
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;



    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'videos';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];


    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function countries()
    {
        return $this->belongsToMany('App\Models\Country');
    }

    public function histories()
    {
        return $this->hasMany('App\Models\VideoHistory');
    }

    public function entries()
    {
        return $this->hasMany('App\Models\Entry');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['video_id', 'check_history', 'check_entry_history', 'video_entry'];

    //Check if loggedin user has watched this video
    public function getCheckHistoryAttribute() {

        return $this->check_history = $this->histories()->where('user_id', Auth::id())->count();
    }

    //Check if loggedin user has entry history for this video and for this contest
    public function getCheckEntryHistoryAttribute() {

        return $this->check_entry_history = $this->entries()->where('contest_id', $this->getCurrentContest()->id)->where('user_id', $this->getUser()->id)->count();
    }

    public function getVideoEntryAttribute() {

        return $this->video_entry = ceil($this->exposure /120);
    }


    public function getVideoIdAttribute()
    {
        $url = $this->path;

        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

        $video_id = $match[1];

        // dd($video_id);
        return $video_id;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
