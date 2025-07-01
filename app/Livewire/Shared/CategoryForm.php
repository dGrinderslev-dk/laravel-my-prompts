<?php

namespace App\Livewire\Shared;

use App\Models\Category;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class CategoryForm extends Component
{
    public Category $category;
    public $name = '';
    public $description = '';
    public $slug = '';
    public string $currentRoute = '';
    public int $currentRouteCategoryId = 0;

    private function loadCategory(?int $categoryId): void
    {
        $this->category = $categoryId
            ? Category::where('id', $categoryId)
            ->where('user_id', auth()->id())
            ->firstOrFail()
            : new Category;
    }

    public function mount(?int $categoryId = null): void
    {
        $this->loadCategory($categoryId);
    }

    protected function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:50',
                Rule::unique('categories')
                    ->ignore($this->category->id)
                    ->where(fn(Builder $query) => $query->where('user_id', auth()->id())),
            ],
            'description' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'regex:/^[a-z0-9_-]+$/',
                'max:50',
                Rule::unique('categories')
                    ->ignore($this->category->id)
                    ->where(fn(Builder $query) => $query->where('user_id', auth()->id())),
            ],
        ];
    }

    #[On('add-taxonomy')]
    public function addTaxonomy(): void
    {
        logger('vi er i addTaxonomy() i CategoryForm');

        $this->resetValidation();
        $this->reset();
        $this->loadCategory(null);
    }

    #[On('edit-taxonomy')]
    public function updateTaxonomy(int $id, string $currentRoute, int $currentRouteCategoryId): void // fillEditForm($data, $taxonomyType)
    {
        logger('vi er i updateTaxonomy() i CategoryForm');
        logger('jeg modtog id: '.$id);
        logger(serialize($id));
        logger('jeg modtog currentRoute: '.$currentRoute);
        logger(serialize($currentRoute));
        logger('jeg modtog currentRouteCategoryId: '.$currentRouteCategoryId);
        logger(serialize($currentRouteCategoryId));

        $this->resetValidation();
        $this->reset();

        $this->currentRoute = $currentRoute;
        $this->currentRouteCategoryId = $currentRouteCategoryId;

        logger('nu er der blevet reset');
        logger(serialize($this->currentRoute));
        logger(serialize($this->currentRouteCategoryId));


        $this->loadCategory($id);

        $this->name = $this->category->name;
        $this->description = $this->category->description;
        $this->slug = $this->category->slug;
    }

    public function save()
    {

        logger('så blev der trykket på save');





        logger($this->category);

        logger(serialize($this->category));
        logger(serialize($this->category->exists));

        $giraf = $this->category->exists ? 'update' : 'create';
        logger($giraf);

        $validated = $this->validate();
        logger(serialize($validated));
        logger($validated['name']);
        logger($validated['description']);
        logger($validated['slug']);


        $this->dispatch(
            'close-modal',
            id: 'taxonomy-modal',
        );



        $this->category->fill($validated);
        logger($this->category);

        $this->category->user_id ??= auth()->id();
        logger($this->category);

        $this->category->save();

        logger('så er der gemt og her cat');
        logger($this->category);
        logger('så er der gemt og her er id');
        logger(serialize($this->category->id));

        $this->dispatch(
            'taxonomy-saved',
            taxonomyType: 'category',
            id: $this->category->id,
            action: $this->category->exists ? 'update' : 'create', // 'delete'|'update'|'create'
        );


        //session()->flash('status', 'Post successfully updated.');

        //return $this->redirect('/posts', navigate: true);
    }

    public function delete()
    {
        logger('vi sletter cat med id');
        logger(serialize($this->category->id));
        $deletedCategoryId = $this->category->id;
        logger('$deletedCategoryId');
        logger($deletedCategoryId);
        logger('$this->category->exists');
        logger($this->category->exists);
        if ($this->category->exists) {
            logger('vi er inde i if fordi den exists');
            logger('$this->currentRoute');
            logger(serialize($this->currentRoute));
            logger('$this->currentRouteCategoryId');
            logger(serialize($this->currentRouteCategoryId));
            logger('$deletedCategoryId');
            logger($deletedCategoryId);

            $this->dispatch(
                'close-modal',
                id: 'taxonomy-modal',
            );

            if (
                $this->currentRoute === 'user.user-categories.show'
                && $this->currentRouteCategoryId === $deletedCategoryId
            ) {
                logger('vi er i den route som skal slettes og vi skal til at slette om lidt');
                //$this->redirect(route('user.user-prompts.uncategorized', absolute: false), navigate: false);
                //$this->redirect(route('user.user-prompts.uncategorized'), navigate: true);
                //$this->js('window.location.href = "' . route('user.user-prompts.uncategorized') . '"');
            }

            $this->category->delete();


            //$this->category->delete();
            logger('så er den slettet');
            logger('her er cat igen $this->category');
            logger(serialize($this->category));

            logger('$this->category->exists');
            logger($this->category->exists);

            logger('$deletedCategoryId');
            logger($deletedCategoryId);

            $this->dispatch(
                'taxonomy-deleted',
                taxonomyType: 'category',
                id: $deletedCategoryId,
                action: 'delete', // 'delete'|'update'|'create'
            );

            if (
                $this->currentRoute === 'user.user-categories.show'
                && $this->currentRouteCategoryId === $deletedCategoryId
            ) {
                logger('vi er i den route som skal slettes og den er nu slettet. lad os redirect');
                return $this->redirect(route('user.user-prompts.uncategorized', absolute: false), navigate: false);
            }
        }
    }

    public function render()
    {
        return view('livewire.shared.category-form');
    }
}
