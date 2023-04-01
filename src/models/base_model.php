<?php 

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{

    public function save(array $options = [])
    {
        if (!$this->exists){
            $this->created_at = $this->freshTimestamp();
        }
        $this->updated_at = $this->freshTimestamp();
        return parent::save($options);
    }

}

?>
