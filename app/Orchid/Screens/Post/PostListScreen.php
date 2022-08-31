<?php

namespace App\Orchid\Screens\Post;

use App\Models\Post;
use App\Orchid\Layouts\Post\PostListLayout;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Toast;

class PostListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'posts' => Post::with('user')
                // ->filters(UserFiltersLayout::class)
                // ->defaultSort('id', 'desc')
                ->paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Articles';
    }

    public function description(): ?string
    {
        return 'La liste des articles';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.post.create'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [

            PostListLayout::class,

            // Layout::table('posts', [
            //     TD::make('id'),
            //     TD::make('created_at')->sort(),
            // ])
        ];
    }

    public function remove(Post $post){

        $post->delete();

        Toast::info(__('L\'Article supprimé avec succes.'));

        return redirect()->route('platform.post.list');
    }
}
