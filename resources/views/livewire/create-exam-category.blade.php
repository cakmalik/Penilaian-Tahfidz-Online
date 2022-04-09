<div>
    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="row">
            <div class="form-group m-3">
                <input class="form-control mb-3" type="text" name="name" placeholder="Category Name">
                <input class="form-control mb-3" type="text" name="desc" placeholder="Description">
                <select name="grade_id" class="form-control mb-3">
                    @foreach ($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
                <select class="form-control mb-3" name="juz" wire:model="selectedJuz">
                    <option value="" selected>Pilih Juz</option>
                    @for ($i = 1; $i < 31; $i++)
                        <option value="{{ $i }}">Juz {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group m-3">
                @if (!is_null($selectedJuz))
                    <select class="form-control mb-3" name="surah" wire:model="selectedSurah">
                        <option value="" selected>Pilih Surah</option>
                        @foreach ($juz as $key => $surah)
                            <option value="{{ $key }},{{ $surah['englishName'] }}">{{ $key }} |
                                {{ $surah['englishName'] }}
                            </option>
                        @endforeach
                    </select>
                @endif
                @if (!is_null($selectedSurah))
                    @php
                        $jml_ayh = $surah['numberOfAyahs'];
                    @endphp
                    <select class="form-control mb-3" name="start_ayah" wire:model="selectedStart">
                        <option value="" selected>Start Ayah</option>
                        @for ($i = 1; $i < $jml_ayh; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                @endif
                @if (!is_null($selectedStart))
                    <select class="form-control mb-3" name="end_ayah" wire:model="selectedEnd">
                        <option value="{{ $jml_ayh }}" selected>Selesai</option>
                        @for ($i = $start + 1; $i < $jml_ayh; $i++)
                            <option>{{ $i }}</option>
                        @endfor
                    </select>
                @endif

                @if (!is_null($selectedStart))
                    <Button class="btn btn-primary" type="submit">Tambah</Button>
                @endif
            </div>
        </div>
    </form>
</div>
