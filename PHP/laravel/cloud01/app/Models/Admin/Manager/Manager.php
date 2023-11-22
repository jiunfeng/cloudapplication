<?php

namespace App\Models\Admin\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "manager";
    protected $primaryKey = "userID";
    protected $fillable = [
        "userId",
        "pwd"
    ];

    public function getManager($userId)
    {
        $manager = self::where("userId", $userId)->first();
        return $manager;
    }
}
