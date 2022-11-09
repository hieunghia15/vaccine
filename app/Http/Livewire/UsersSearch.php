<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersSearch extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $users;

    public function render()
    {
        $this->users = User::select('users.*')
            ->where('users.fullname', 'LIKE', '%' . ($this->search) . '%')
            ->orWhere('users.phone', 'LIKE', '%' . ($this->search) . '%')
            ->paginate(10);
        $links =  $this->users;
        $this->users = collect($this->users->items());
        return view('livewire.users-search', [
            'users' =>  $this->users,
            'links' => $links
        ]);
    }
}
