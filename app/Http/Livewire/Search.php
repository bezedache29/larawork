<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{

    public $query;

    // Collection vide
    public $jobs;

    public $selectedIndex = 0;

    public function incrementIndex()
    {
        if ($this->selectedIndex == count($this->jobs) - 1) {
            $this->selectedIndex = 0;
        } else {
            $this->selectedIndex ++;
        }
        
    }

    public function decrementIndex()
    {
        if ($this->selectedIndex == 0) {
            $this->selectedIndex = count($this->jobs) - 1;
        } else {
            $this->selectedIndex --; 
        }
    }

    public function updatedQuery()
    {
        // On met les valeurs de l'input entre %
        $words = '%' . $this->query . '%';

        // On lance la requete lorsqu'il y a au moins 3 caractères dans l'input de recherche
        if (strlen($this->query) > 2) {
            $this->jobs = Job::where('title', 'like', $words)->orWhere('description', 'like', $words)->get();
        }
    }

    public function resetIndex()
    {
        $this->reset('selectedIndex');
    }

    public function showJob()
    {
        // Si la collection n'est pas vide
        if ($this->jobs->isNotEmpty()) {
            return redirect()->route('jobs.show', [$this->jobs[$this->selectedIndex]['id']]);
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
