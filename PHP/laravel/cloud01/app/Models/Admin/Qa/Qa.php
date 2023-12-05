<?php

namespace App\Models\Admin\Qa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qa extends Model
{
    public $timestamps = false;
    protected $table = "qa";
    protected $primaryKsey = "id";
    protected $fillable = [
        "id",
        "title",
        "content"
    ];

    //後台list
    public function list()
    {
        $list = self::paginate(10);
        return $list;
    }
}
