<?php

namespace App\Orchid\Screens\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Cropper;
use Orchid\Support\Facades\Toast;

class PostEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [
            'post' => $post
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Editer article';
    }

    public function description(): ?string
    {
        return 'Entrez les données de l\'article';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),
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
            Layout::block(Layout::rows([
                Input::make('post.title')
                ->title('Titre:')
                ->placeholder('Entrez le titre')
                ->required(),

                TextArea::make('post.subtitle')
                ->title('Sous titre:')
                ->placeholder('Saisissez le sous titre')
                ->required(),

                Cropper::make('post.image')
                    ->title('Image de Référence')
                    ->width(500)
                    ->height(300)
                    ->horizontal()
                    ->required(),

                ]))
                ->title('Informations de base')
                ->description('Saisissez pour chaque champ, une valeur correspondante.'),
                Layout::rows([
                    Quill::make('post.content')
                        ->title('Contenu')
                        ->popover('Etiter l\'integralité de votre article en procedant directement à la mise en forme.'),
                ])->title('Le contenu de l\'article'),

                Layout::rows([
                    Group::make([
                        Input::make('post.facebook')
                            ->title('fecebook')
                            ->placeholder('Entrez le lien vers facebook'),

                        Input::make('post.instagram')
                            ->title('instagram')
                            ->placeholder('Entrez le lien vers instagram'),
                    ]),

                    Group::make([
                        Input::make('post.twitter')
                            ->title('twitter')
                            ->placeholder('Entrez le lien vers twitter'),

                        Input::make('post.linkedin')
                            ->title('post.linkedin')
                            ->placeholder('Entrez le lien vers linkedin'),
                    ]),
                ])->title('Les liens vers les reseaux sociaux'),

                Layout::rows([
                    Select::make('post.tag.')
                        ->options(['Conférence','Exposition','article'
                        ])
                        ->multiple()
                        ->title('Les mots clés')
                        ->help('Selectionnez les mots clés'),

                ])->title('Mots clés'),
        ];
    }

    public function save(Post $post, Request $request){

        $request->validate([
            'post.image' => ['required'],
            'post.title' => ['max:60'],
            'post.subtitle' => ['max:200'],
        ]);

        // ->fill($request->collect('user')->except(['password', 'permissions', 'roles'])->toArray())
        //     ->fill(['permissions' => $permissions])
        // dd($request->collect('post.tag')->toJson());
        $post->fill($request->collect('post')->except(['tag'])->toArray())
                ->fill(['tag' => $request->collect('post.tag')->toJson()])
                ->fill(['user_id' => Auth::user()->id])
                ->save();

        Toast::info(__('Article enregistré avec succes.'));

        return redirect()->route('platform.post.list');
    }


}
