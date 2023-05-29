<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'content',
        'age',
        'gender',
        'department_id',
    ];

    //リレーションの設定(departmentモデル)
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
