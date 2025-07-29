<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\DateTime;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Post>
     */
    public static $model = \App\Models\Post::class;

//    public static $perPageOptions = [30];

    /**
     *
     *
     * zz
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array<int, \Laravel\Nova\Fields\Field>
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),
            Images::make('Фото', 'main')->conversionOnIndexView('preview')
                ->rules('required'),
            Text::make('Заголовок', 'title')->displayUsing(function ($value) {
                return Str::limit($value, 100);
            })->hideFromDetail()->sortable(),
//            Text::make('Slug', 'slug')->sortable(),
            Text::make('Описание', 'content')->sortable(),
            DateTime::make('Создано', 'created_at')->displayUsing(fn($value) => $value?->format('d.m.Y H:i:s'))
                ->exceptOnForms()
                ->sortable(),
            DateTime::make('Обновлено', 'updated_at')->displayUsing(fn($value) => $value?->format('d.m.Y H:i:s'))
                ->exceptOnForms()
                ->sortable(),
        ];
    }

    /**
     * Get the cards available for the resource.
     *
     * @return array<int, \Laravel\Nova\Card>
     */
    public function cards(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array<int, \Laravel\Nova\Filters\Filter>
     */
    public function filters(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array<int, \Laravel\Nova\Lenses\Lens>
     */
    public function lenses(NovaRequest $request): array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array<int, \Laravel\Nova\Actions\Action>
     */
    public function actions(NovaRequest $request): array
    {
        return [];
    }

    public static function label()
    {
        return 'Сервис';
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Сервис';
    }
}
