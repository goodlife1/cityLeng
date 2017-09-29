<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $meta
 * @property string $content
 * @property string $args
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereArgs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSlug($value)
 */
class Page extends Model
{
    protected $fillable = [
        'name', 'slug', 'meta', 'content', 'args'
    ];
    public $timestamps = false;
}
