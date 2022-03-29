<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CreateExamCategory extends Component
{
    public $juz;
    public $selectedJuz = NULL;
    public $surah;
    public $selectedSurah = NULL;
    public $start;
    public $selectedStart = NULL;
    public $selectedEnd = NULL;

    public function mount()
    {
        $this->grades = Grade::all();
    }

    public function render()
    {
        $grades = Grade::all();
        return view('livewire.create-exam-category', compact('grades'));
    }

    public function updatedSelectedJuz()
    {
        $juz = json_decode(Http::get('https://api.alquran.cloud/juz/' . $this->selectedJuz),true);
        $this->juz = $juz['data']['surahs'];

    }
    public function updatedSelectedSurah()
    {
        $surah = json_decode(Http::get('https://api.alquran.cloud/surah/' . $this->selectedSurah),true)['data']['ayahs'];
        $this->surah = $surah;
    }
    // selected start
    public function updatedSelectedStart()
    {
        $this->start = $this->selectedStart;
    }
    public function updatedSelectedEnd()
    {
        // $this->start = $this->selectedStart;
    }
}
