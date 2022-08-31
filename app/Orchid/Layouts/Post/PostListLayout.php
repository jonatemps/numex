<?php

namespace App\Orchid\Layouts\Post;

use App\Models\Post;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title')
                ->sort()
                ->cantHide()
                ->filter(Input::make()),
            TD::make('image')
                ->width('100')
                    ->render(function ($model) {
                        // Please use view('path')
                        return "<img src='{$model->image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid'>";
                    }),
            TD::make('updated_at','Mis à jour')->sort(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (Post $post) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.post.edit', $post->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->confirm(__('L\opération que vous vous apprétez à faire est irréversible. voullez-vous supprimer cet article ?'))
                                ->method('remove', [
                                    'id' => $post->id,
                                ]),
                        ]);
                }),
        ];
    }
}
