<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'user_id',
        'book_id',
        'data_emprestimo',
        'data_devolucao'
    ];

    // Relação com o modelo Student
    public function student() {
        return $this->belongsTo(Student::class);
    }

    // Relação com o modelo User
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relação com o modelo Book
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
