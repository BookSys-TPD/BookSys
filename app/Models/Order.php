<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    protected $fillable = ['student_id', 'book_id', 'data_devolucao_prevista'];
}