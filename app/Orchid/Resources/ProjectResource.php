<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class ProjectResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Project::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('title')
                    ->title('Titre:')
                    ->placeholder('Entrez le nom du projet')
                    ->required()
                    ->help('S\'il vous plaît, saisisez le nom du projet'),
                TextArea::make('description')
                    ->title('Description:')
                    ->placeholder('Entrez la description')
                    ->required()
                    ->help('S\'il vous plaît, saisisez la description du project'),
            ]),

            Group::make([
                Cropper::make('image')
                    ->title('image')
                    ->width(500)
                    ->height(300)
                    ->horizontal(),
                Input::make('link')
                    ->title('Lien:')
                    ->placeholder('Entrez le lien')
                    ->help('S\'il vous plaît, saisisez une autre lien vers le project'),
            ]),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('title')
                ->render(function ($model) {
                    return substr($model->title,0,30);
                }),
            TD::make('image')
                ->width('150')
                        ->render(function ($model) {
                            // Please use view('path')
                            return "<img src='{$model->image}'
                                  alt='sample'
                                  class='mw-100 d-block img-fluid'>";
                        }),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
