<?php namespace Mandible;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public function user() {
        return $this->belongsTo('User');
    }

    public function attachments() {
        return $this->morphMany('Attachment', 'attachable');
    }
}
