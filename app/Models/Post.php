<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;


class Post extends Model  implements HasMedia
{


    use InteractsWithMedia;
    protected $fillable = [
        'title',
//        'slug',
        'content',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }


}
