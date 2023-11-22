<?php

namespace App\Models\Admin\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "category";
    protected $primaryKey = "categoryId";
    protected $fillable = [
        "categoryId",
        "categoryName"
    ];
}
