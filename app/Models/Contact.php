<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected string $primary_key = 'id';
    public $timestamps = true;
    protected $fillable = ['full_name', 'email', 'phone', 'title', 'content', 'status', 'reply'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
