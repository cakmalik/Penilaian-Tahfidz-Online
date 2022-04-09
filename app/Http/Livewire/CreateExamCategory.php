<?php

namespace App\Http\Livewire;

use App\Models\Grade;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\GradeController;

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
        $grade = new GradeController();
        $grades = $grade->getGradeWhereInstitution();
        $this->grades = $grades;
    }

    public function render()
    {
        return view('livewire.create-exam-category');
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
