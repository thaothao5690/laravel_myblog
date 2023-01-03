<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected string $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['content', 'status', 'user_id', 'blog_id'];
}
