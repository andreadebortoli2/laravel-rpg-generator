<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'cost', 'type', 'weight', 'category', 'damage_dice'];

    /**
     * The roles that belong to the Item
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }
}
