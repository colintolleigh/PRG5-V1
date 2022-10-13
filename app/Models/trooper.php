<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trooper extends Model {
    use HasFactory;

   protected $fillable = ['name',
       'faction',
       'era',
       'rank',
       'legion'];


//    public $id;
//    public $name;
//    public $faction;
//    public $era;
//    public $rank;
//    public $legion;
}

?>
