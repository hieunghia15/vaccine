<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Manufacture;
use Livewire\WithPagination;

class ManufactureSearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $manufactures;

    public function render()
    {
        $this->manufactures = Manufacture::join('nations', 'nations.id', '=', 'manufactures.nation_id')
            ->select('manufactures.*')
            ->where('manufactures.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('nations.name', 'LIKE', '%' . ($this->search) . '%')
            ->paginate(10);
        $links =  $this->manufactures;
        $this->manufactures = collect($this->manufactures->items());
        return view('livewire.manufacture-search', [
            'manufactures' =>  $this->manufactures,
            'links' => $links
        ]);
    }
}
