<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vaccine;

class VaccineSearch extends Component
{
    use WithPagination;
    public $search;
    public $vaccines;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $this->vaccines = Vaccine::join('manufactures', 'manufactures.id', '=', 'vaccines.manufacture_id')
            ->join('nations', 'nations.id', '=', 'manufactures.nation_id')
            ->join('vaccine_types', 'vaccine_types.id', '=', 'vaccines.vaccine_type_id')
            ->where('vaccines.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('manufactures.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('nations.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('vaccine_types.name', 'LIKE', '%' . ($this->search) . '%')
            ->get(['vaccines.*']);
        return view('livewire.vaccine-search');
    }
}
