<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected string $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'status', 'image'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
