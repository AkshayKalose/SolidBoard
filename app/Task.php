<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $table = 'tasks';
    protected $fillable = ['title', 'user_id', 'priority', 'due', 'description'];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
