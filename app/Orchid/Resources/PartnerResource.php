<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class PartnerResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Partner::class;

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
                    ->placeholder('Entrez le nom du partenaire')
                    ->required()
                    ->help('S\'il vous plaît, saisisez le nom du partenaire'),
                Select::make('category')
                    ->title('Catégorie')
                    ->options(['first'=>'Platinium','second'=> 'Gold','third'=>'Bronze'])
                    ->required()
                    ->help('S\'il vous plaît, selectionnez la catégorie du partenaire'),
            ]),

            Group::make([
                Cropper::make('logo')
                    ->title('image')
                    ->width(500)
                    ->height(300)
                    ->horizontal(),
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
            TD::make('category')
                ->render(function ($model) {
                    // Please use view('path')
                    switch ($model->category) {
                        case 'first':
                            return 'Platinium';
                        case 'second':
                            return 'Gold';
                        case 'third':
                            return 'Bronze';
                        break;
                    }
                }),
            TD::make('logo')
            ->width('150')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->logo}'
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
