<?php 

namespace App\models;

class Posts extends BaseModel
{

    protected $table = 'posts';
    protected $fillable = ['post'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

}

?>
