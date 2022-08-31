<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class TestimonyResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Testimony::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
            Input::make('authorName')
                ->title('Nom auteur:')
                ->placeholder('Entrez le nom')
                ->help('S\'il vous plaît, saisisez le nom de l\'auteur'),
            Input::make('authorTitle')
                ->title('Titre de l\auteur:')
                ->placeholder('Ex: Ministre de l\'industrie/RDC')
                ->help('S\'il vous plaît, saisisez le titre de l\'auteur'),
            ]),

            Group::make([
                Cropper::make('authorAvatar')
                    ->title('Photo de l\'auteur')
                    ->width(300)
                    ->height(300)
                    ->horizontal(),
                TextArea::make('content')
                    ->title('Temoignage:')
                    ->placeholder('Saisisez le contenu')
                    ->help('S\'il vous plaît, saisisez le temoignage'),
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
            TD::make('authorName'),
            TD::make('authorTitle'),
            TD::make('authorAvatar')
                ->width('110')
                            ->render(function ($model) {
                                // Please use view('path')
                                return "<img src='{$model->authorAvatar}'
                                    alt='sample'
                                    class='mw-100 d-block img-fluid'>";
                            }),
            TD::make('created_at', 'Date de création')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Date de mis à jour')
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
