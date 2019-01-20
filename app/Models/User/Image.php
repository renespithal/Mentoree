<?php
/**
 *
 * @author Tom Esders
 */

namespace App\Models\User;


use App\User;
use Illuminate\Database\Eloquent\Model;

class Image extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_images';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}