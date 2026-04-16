<?php

declare(strict_types=1);

namespace App\Livewire\Store;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;

class Catalog extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sort   = 'name_asc';

    protected array $sortMap = [
        'name_asc'    => ['name', 'asc'],
        'name_desc'   => ['name', 'desc'],
        'price_asc'   => ['price', 'asc'],
        'price_desc'  => ['price', 'desc'],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingSort(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $store   = app('current_store');
        $channel = $store->channel;

        $query = Product::active()
            ->when($channel, function ($q) use ($channel) {
                $q->whereHas('channels', function ($q2) use ($channel) {
                    $q2->where('handle', $channel->handle);
                });
            })
            ->when($this->search, function ($q) {
                $q->where(function ($q2) {
                    $q2->whereRaw("attribute_data->>'$.name.value.en' LIKE ?", ["%{$this->search}%"]);
                });
            });

        [$col, $dir] = $this->sortMap[$this->sort] ?? ['name', 'asc'];
        if ($col === 'name') {
            $query->orderByRaw("attribute_data->>'$.name.value.en' {$dir}");
        }

        $products = $query->paginate(12);

        return view('livewire.store.catalog', ['products' => $products]);
    }
}
