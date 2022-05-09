<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    use HasFactory, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'key', 'description', 'type'
    ];

    /**
     * The relations that should be automatically pulled alongside the model 
     *
     * @var array
     */
    protected $with = [
        'values'
    ];

    /**
     * Get the settings cache key
     *
     * @var array
     */
    protected static $cacheKey = 'settings';

    /**
     * Get a ssetting key's values
     *
     * @return HasMany
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function values(): HasMany
    {
        return $this->hasMany(SettingValue::class);
    }

    /**
     * Check the type of a setting
     *
     * @return bool
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function isType(string $type): bool
    {
        return $this->type === $type;
    }

    /**
     * Get the settings from the cache
     *
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public static function cache()
    {
        //  Create new cache settings data
        return Cache::rememberForever(self::$cacheKey, function () {
            return self::all();
        });
    }

    /**
     * Get the settings from the cache
     *
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public static function clearCache()
    {
        //  Delete the existing cache
        Cache::forget(self::$cacheKey);
    }
}
