<x-layouts.app>
@php
$courseCategories = [
    ['label' => 'OSN', 'title' => 'Olimpiade Sains', 'description' => 'Persiapan komprehensif untuk OSN tingkat kota hingga nasional.', 'surface' => 'border-indigo-100 bg-indigo-50/50 text-indigo-700 hover:border-indigo-300'],
    ['label' => 'UTBK', 'title' => 'SNBT & Mandiri', 'description' => 'Taklukkan UTBK SNBT dan raih PTN impianmu dengan materi terstruktur.', 'surface' => 'border-amber-100 bg-amber-50/50 text-amber-700 hover:border-amber-300'],
    ['label' => 'TKA', 'title' => 'Akademik Sekolah', 'description' => 'Pendalaman materi sekolah untuk mengejar nilai rapor dan pemahaman dasar.', 'surface' => 'border-blue-100 bg-blue-50/50 text-blue-700 hover:border-blue-300']
];
$categoryCounts = [
    'OSN' => \App\Models\Course::where('category', 'OSN')->count(),
    'UTBK' => \App\Models\Course::where('category', 'UTBK')->count(),
    'TKA' => \App\Models\Course::where('category', 'TKA')->count(),
];
$activeCategory = $category ?? 'Semua';
@endphp
<main class="bg-brand-surface">
    <section class="bg-brand-blue py-16 text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-10 items-center">
        <div class="space-y-5">
          <div class="inline-flex rounded-full bg-white/10 px-4 py-1.5 text-sm font-semibold">
            Course Online NLS
          </div>
          <h1 class="text-4xl md:text-5xl font-black text-white leading-tight">
            Katalog Course Online untuk OSN, UTBK, dan TKA
          </h1>
          <p class="max-w-3xl text-lg leading-relaxed text-white/80">
            Struktur halaman ini dibuat agar pengunjung bisa langsung memilih jalur belajar yang mereka butuhkan tanpa bingung: OSN untuk kompetisi, UTBK untuk SNBT, dan TKA untuk pendalaman akademik.
          </p>

          <div class="flex flex-wrap gap-3">
            <a href="/courses" class="rounded-full px-4 py-2 text-sm font-semibold transition-colors {{ $activeCategory === 'Semua' ? 'bg-white text-brand-blue' : 'bg-white/10 text-white hover:bg-white/15' }}">
              Semua
            </a>
            @foreach($courseCategories as $cat)
            <a href="/courses?category={{ $cat['label'] }}" class="rounded-full px-4 py-2 text-sm font-semibold transition-colors {{ $activeCategory === $cat['label'] ? 'bg-white text-brand-blue' : 'bg-white/10 text-white hover:bg-white/15' }}">
              {{ $cat['label'] }}
            </a>
            @endforeach
          </div>
        </div>

        @if($featuredCourse)
        <a href="/courses/{{ $featuredCourse->slug }}" class="rounded-[2rem] bg-white/10 p-6 backdrop-blur-sm transition-colors hover:bg-white/15 block">
          <p class="text-sm font-semibold uppercase tracking-[0.25em] text-cyan-200">Course Highlight</p>
          <h2 class="mt-4 text-3xl font-black text-white">
            {{ $featuredCourse->title }}
          </h2>
          <p class="mt-3 text-sm leading-relaxed text-white/75">
            Contoh course dari kategori {{ $activeCategory === 'Semua' ? 'utama' : $activeCategory }} yang bisa langsung dijelajahi pengguna.
          </p>
          <div class="mt-6 inline-flex items-center gap-2 font-semibold text-white">
            Buka detail course
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </div>
        </a>
        @endif
      </div>
    </section>

    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-[1fr_280px] gap-10">
        <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-3 gap-5">
          @foreach($courseCategories as $cat)
          <a href="/courses?category={{ $cat['label'] }}" class="group rounded-[2rem] border p-6 shadow-xl transition-all hover:-translate-y-2 flex flex-col h-full {{ $cat['surface'] }}">
            <div class="flex items-center justify-between gap-4">
              <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-slate-900 shadow-md">
                @if($cat['label'] === 'OSN')
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.8 5.54h5.82l-4.71 3.42 1.8 5.54L12 13.08 7.29 16.5l1.8-5.54L4.38 7.54H10.2L12 2z" />
                </svg>
                @elseif($cat['label'] === 'UTBK')
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6m4 6V7m4 10v-3M5 19h14" />
                </svg>
                @else
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6l-8 4 8 4 8-4-8-4zm0 8l-8 4 8 4 8-4" />
                </svg>
                @endif
              </div>
              <span class="rounded-full bg-white/70 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-on-surface">
                {{ $categoryCounts[$cat['label']] ?? 0 }} course
              </span>
            </div>
            <p class="mt-4 text-sm font-semibold uppercase tracking-[0.2em]">{{ $cat['label'] }}</p>
            <h2 class="mt-2 text-2xl font-black leading-tight text-slate-900">{{ $cat['title'] }}</h2>
            <p class="mt-3 text-sm leading-relaxed text-on-surface">{{ $cat['description'] }}</p>
          </a>
          @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
          @foreach($courses as $course)
          <a href="/courses/{{ $course->slug }}" class="group rounded-[2rem] border border-outline-variant bg-white p-6 shadow-xl shadow-slate-200/40 transition-all hover:-translate-y-2 hover:shadow-2xl flex flex-col h-full">
            <div
              class="rounded-[1.5rem] bg-gradient-to-br p-5 text-white {{ $course->category === 'OSN' ? 'from-indigo-700 to-sky-400' : ($course->category === 'UTBK' ? 'from-amber-500 to-orange-400' : 'from-blue-700 to-cyan-400') }}"
            >
              <div class="flex items-center justify-between gap-3">
                <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em]">
                  {{ $course->category }}
                </span>
                <span class="text-sm font-semibold text-white/80">{{ $course->price }}</span>
              </div>
              <p class="mt-10 text-3xl font-black">{{ $course->subject }}</p>
              <p class="mt-2 text-sm text-white/75">{{ $course->level }}</p>
            </div>

            <div class="mt-6 space-y-3">
              <h2 class="text-2xl font-bold leading-tight text-slate-900 group-hover:text-brand-blue">
                {{ $course->title }}
              </h2>
              <p class="text-sm leading-relaxed text-on-surface-variant line-clamp-2">
                {{ $course->short_description }}
              </p>
              <div class="flex flex-wrap gap-2 pt-2">
                @if($course->tags)
                  @foreach($course->tags as $tag)
                  <span class="rounded-full bg-surface-container px-3 py-1 text-xs font-semibold text-on-surface-variant">
                    {{ $tag }}
                  </span>
                  @endforeach
                @endif
              </div>
            </div>
          </a>
          @endforeach
        </div>

        <aside class="space-y-6">
          <div class="rounded-[2rem] bg-white p-7 shadow-xl shadow-slate-200/40">
            <h2 class="text-2xl font-bold text-slate-900 mb-3">Kenapa struktur kategori penting?</h2>
            <p class="text-sm leading-relaxed text-on-surface-variant">
              Pengunjung akan lebih cepat paham jika jalur belajarnya dibedakan sejak awal: OSN untuk kompetisi, UTBK untuk SNBT, dan TKA untuk pendalaman mapel.
            </p>
          </div>

          <div class="rounded-[2rem] bg-slate-950 p-7 text-white shadow-2xl shadow-slate-900/20">
            <h2 class="text-2xl font-bold text-white mb-3">Masuk lewat course</h2>
            <p class="text-sm leading-relaxed text-white/75 mb-6">
              Kategori dan kartu course disusun agar kamu bisa langsung memilih kelas yang sesuai tanpa harus membuka seluruh katalog satu per satu.
            </p>
            <a href="/courses/pelatihan-osn-kebumian-sma" class="inline-flex items-center justify-center rounded-full bg-white px-5 py-3 font-semibold text-slate-900 transition-transform hover:-translate-y-1 block text-center">
              Lihat Course Kebumian
            </a>
          </div>
        </aside>
      </div>
    </section>
  </main>
</x-layouts.app>