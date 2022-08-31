<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class EventResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Event::class;

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
                Input::make('location')
                    ->title('Lieu:')
                    ->placeholder('Entrez le lieu')
                    ->required()
                    ->help('S\'il vous plaît, saisisez le lieu de l\'événement'),
                    DateTimer::make('date')
                    ->title('Date de l\'événement')
                    ->enableTime(),
            ]),

            Group::make([
                Cropper::make('image')
                    ->title('image')
                    ->width(500)
                    ->height(300)
                    ->horizontal(),
            ]),

            Group::make([
                Input::make('facebook')
                    ->title('Facebook:')
                    ->placeholder('Entrez le lien')
                    ->help('S\'il vous plaît, saisisez une autre lien vers facebook'),
                Input::make('instagram')
                    ->title('Instagram:')
                    ->placeholder('Entrez le lien')
                    ->help('S\'il vous plaît, saisisez une autre lien vers Instagram'),
            ]),

            Group::make([
                Input::make('twitter')
                    ->title('Twitter:')
                    ->placeholder('Entrez le lien')
                    ->help('S\'il vous plaît, saisisez une autre lien vers twitter'),
                Input::make('linkedin')
                    ->title('Linkedin:')
                    ->placeholder('Entrez le lien')
                    ->help('S\'il vous plaît, saisisez une autre lien vers Linkedin'),
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
            TD::make('title'),
            TD::make('location'),
            TD::make('image')
            ->width('150')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid'>";
                    }),
            TD::make('date', 'Date')
                ->render(function ($model) {
                    return $model->date;
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
