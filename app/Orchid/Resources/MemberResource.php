<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;

class MemberResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Member::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('name')
                    ->title('Nom:')
                    ->placeholder('Entrez le nom du membre')
                    ->required()
                    ->help('S\'il vous plaît, saisisez le nom du membre'),
               Input::make('fonction')
                    ->title('Fonction:')
                    ->placeholder('Entrez la fonction du membre')
                    ->required()
                    ->help('S\'il vous plaît, saisisez la fonction du membre'),
            ]),

            Group::make([
                Cropper::make('photo')
                    ->title('Photo')
                    ->width(336)
                    ->height(420)
                    ->horizontal(),
            ]),

            Group::make([
                Input::make('facebook')
                    ->title('Facebook:')
                    ->placeholder('Entrez l\'ID Facebook du membre')
                    ->help('S\'il vous plaît, saisisez l\'ID du membre'),
               Input::make('instagram')
                    ->title('Instagram:')
                    ->placeholder('Entrez l\'ID Instagram du membre')
                    ->help('S\'il vous plaît, saisisez l\'ID du membre'),
            ]),

            Group::make([
                Input::make('twitter')
                    ->title('Twitter:')
                    ->placeholder('Entrez l\'ID Twitter du membre')
                    ->help('S\'il vous plaît, saisisez l\'ID du membre'),
               Input::make('linkedin')
                    ->title('LinkedIn:')
                    ->placeholder('Entrez l\'ID LinkedIn du membre')
                    ->help('S\'il vous plaît, saisisez l\'ID LinkedIn du membre'),
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
            TD::make('name'),
            TD::make('fonction'),
            TD::make('photo')
            ->width('100')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->photo}'
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
