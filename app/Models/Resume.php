<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resume extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'personal_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'personal_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class);
    }

    public function educations(): BelongsToMany
    {
        return $this->belongsToMany(Education::class, 'Resume_Education');
    }

    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class, 'Resume_Experiences');
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'Resume_Projects');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'Resume_Skills');
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'Resume_Languages');
    }
}
