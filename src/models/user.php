<?php 

namespace App\models;
use Illuminate\Support\Facades\Hash;

class User extends BaseModel
{

    protected $table = 'users';
    protected $fillable = ['email', 'password', 'name', 'phone', 'description'];

    public function setPassword($value)
    {
        $this->attributtes['password'] = Hash::make($value);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function address()
    {
        return $this->belongsTo(Addresses::class);
    }

}

?>
