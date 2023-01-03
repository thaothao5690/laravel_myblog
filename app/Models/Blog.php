<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Blog extends Model
{
    use HasFactory;

    public $table = 'blogs';
    public string $primary_key = 'id';
    public $timestamps = true;
    public $fillable = ['title', 'description', 'content', 'status', 'user_id', 'category_id', 'image'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
