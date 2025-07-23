<?php

namespace App\Nova;

use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphTo;
use Laravel\Nova\Fields\Image as NovaImage; // 👈 ALTERNATIVA nomlash
use Laravel\Nova\Http\Requests\NovaRequest;

class Image extends Resource
{
    public static $model = \App\Models\Image::class;

    public static $title = 'id';

    public static $search = ['id'];

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            NovaImage::make('URL', 'url')
                ->disk('public')
                ->path('uploads/images')
                ->preview(function ($value, $disk) {
                    return $value
                        ? Storage::disk($disk)->url($value)
                        : null;
                })
                ->thumbnail(function ($value, $disk) {
                    return $value
                        ? Storage::disk($disk)->url($value)
                        : null;
                })
                ->rules('image', 'max:2048'),


            MorphTo::make('Imageable')->types([
                User::class,
                Post::class,
            ]),
        ];
    }
}
