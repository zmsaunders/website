<?php namespace Mandible;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {

    public function attachable() {
        return $this->morphTo();
    }

    public function user() {
        return $this->belongsTo('User');
    }
}
