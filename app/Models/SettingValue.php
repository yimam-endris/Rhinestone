<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SettingValue extends Model
{
    use HasFactory, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'setting_key_id'
    ];

    /**
     * Get the setting that a setting value belongs to
     *
     * @return BelongsTo
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function setting(): BelongsTo
    {
        return $this->belongsTo(Setting::class);
    }
}
