<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\VaccinationSite;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class VaccinationSiteSearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $vaccination_sites;

    public function render()
    {
        $this->vaccination_sites = VaccinationSite::join('wards', 'wards.id', '=', 'vaccination_sites.ward_id')
            ->join('districts', 'districts.id', '=', 'wards.district_id')
            ->join('provinces', 'provinces.id', '=', 'districts.province_id')
            ->select('vaccination_sites.id', 'vaccination_sites.location', 'vaccination_sites.ward_id')
            ->where('vaccination_sites.location', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('wards.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('districts.name', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('provinces.name', 'LIKE', '%' . ($this->search) . '%')
            ->paginate(10);
        $links =  $this->vaccination_sites;
        $this->vaccination_sites = collect($this->vaccination_sites->items());
        return view('livewire.vaccination-site-search', [
            'vaccination_sites' =>  $this->vaccination_sites,
            'links' => $links
        ]);
    }
}
