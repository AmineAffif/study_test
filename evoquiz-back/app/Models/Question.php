<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * Get the answers for the question
     */
    public function answers()
    {
        return $this->hasMany(Answer::class, "question_id", "id");
    }
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'quiz_id',
        'content',
    ];
}
