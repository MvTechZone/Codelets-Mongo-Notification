<?php

namespace MV\Notification\Models;

use App\Admin;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MV\Notification\Uuids\Uuids;

class Notification extends Eloquent {
    use Uuids;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    //set attributes
    protected $guarded = [];

    /**
     * get admin who belong to
     * the notifications
     * @return BelongsTo
     */
    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    /**
     * get user who belong to
     * the notifications
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
