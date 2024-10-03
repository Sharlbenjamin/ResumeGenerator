<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'middle_name',
        'first_phone',
        'second_phone',
        'email',
        'address',
        'summary',
        'title',
        'date_of_birth',
        'nationality',
        'marital_status',
        'gender',
        'github',
        'linked_in',
        'instagram',
        'facebook',
        'behance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_of_birth' => 'date',
    ];

    public function resumes(): HasMany
    {
        return $this->hasMany(Resume::class);
    }
}
