@props(['courses'])

@php
    $categories = [
        ['label' => 'OSN', 'title' => 'Olimpiade Sains', 'description' => 'Persiapan komprehensif untuk OSN tingkat kota hingga nasional.', 'surface' => 'border-indigo-100 bg-indigo-50/50 text-indigo-700 hover:border-indigo-300'],
        ['label' => 'UTBK', 'title' => 'SNBT & Mandiri', 'description' => 'Taklukkan UTBK SNBT dan raih PTN impianmu dengan materi terstruktur.', 'surface' => 'border-amber-100 bg-amber-50/50 text-amber-700 hover:border-amber-300'],
        ['label' => 'TKA', 'title' => 'Akademik Sekolah', 'description' => 'Pendalaman materi sekolah untuk mengejar nilai rapor dan pemahaman dasar.', 'surface' => 'border-blue-100 bg-blue-50/50 text-blue-700 hover:border-blue-300']
    ];
@endphp

<section id="lms" class="relative overflow-hidden bg-white py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.10),_transparent_35%),radial-gradient(circle_at_bottom_right,_rgba(245,158,11,0.14),_transparent_30%)]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-14">
      <div class="grid grid-cols-1 lg:grid-cols-[1.1fr_0.9fr] gap-12 items-center">
        <div class="space-y-6">
          <div class="inline-flex items-center gap-2 rounded-full border border-brand-light/20 bg-brand-light/10 px-4 py-2 text-sm font-semibold text-brand-light">
            <span class="h-2.5 w-2.5 rounded-full bg-brand-light animate-pulse"></span>
            LMS Next Level Study
          </div>
          <h2 class="text-4xl md:text-5xl font-black text-brand-blue leading-tight">
            Belajar Online untuk <span class="text-gradient">OSN, UTBK, dan TKA</span>
          </h2>
          <p class="max-w-2xl text-lg leading-relaxed text-on-surface-variant">
            Pilih jalur belajar yang paling sesuai dengan kebutuhanmu. Setiap kategori disusun jelas sejak awal, jadi kamu bisa langsung masuk ke course OSN, UTBK, atau TKA tanpa harus mencari-cari.
          </p>
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/courses" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-brand-light to-indigo-600 px-7 py-4 text-base font-bold text-white shadow-lg shadow-brand-light/30 transition-all hover:-translate-y-1 hover:from-indigo-600 hover:to-brand-light">
              Jelajahi Semua Course
            </a>
            <a
              href="/courses?category=OSN"
              class="inline-flex items-center justify-center rounded-full border border-outline-variant bg-white px-7 py-4 text-base font-semibold text-on-surface transition-all hover:border-brand-light hover:text-brand-blue"
            >
              Mulai dari OSN
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div class="rounded-[1.75rem] bg-slate-950 p-6 text-white shadow-2xl shadow-slate-900/10">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-cyan-300">Learning</p>
            <p class="mt-4 text-4xl font-black">100%</p>
            <p class="mt-2 text-sm leading-relaxed text-white/70">Akses materi online dengan tampilan yang lebih rapi, jelas, dan mudah dijelajahi.</p>
          </div>
          <div class="rounded-[1.75rem] bg-brand-surface p-6 shadow-xl shadow-slate-200/60">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-light">Kategori</p>
            <p class="mt-4 text-4xl font-black text-brand-blue">3</p>
            <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">Kategori dipisahkan dengan jelas agar kamu lebih cepat menemukan jalur belajar yang dicari.</p>
          </div>
          <div class="rounded-[1.75rem] bg-gradient-to-br from-amber-100 to-orange-50 p-6 shadow-xl shadow-amber-100/80">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-700">Course</p>
            <p class="mt-4 text-4xl font-black text-slate-900">13</p>
            <p class="mt-2 text-sm leading-relaxed text-on-surface">Katalog campuran course yang bisa diarahkan langsung ke detail masing-masing.</p>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        @foreach($categories as $category)
        <a
          href="/courses?category={{ $category['label'] }}"
          class="group relative overflow-hidden rounded-[2rem] border p-7 shadow-xl transition-all duration-300 hover:-translate-y-2 {{ $category['surface'] }}"
        >
          <div class="absolute right-4 top-4 h-16 w-16 rounded-full bg-white/50 blur-2xl transition-transform duration-500 group-hover:scale-150"></div>
          <div class="relative z-10 space-y-4">
            <div class="flex items-center justify-between">
              <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white text-slate-900 shadow-md">
                @if($category['label'] === 'OSN')
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l1.8 5.54h5.82l-4.71 3.42 1.8 5.54L12 13.08 7.29 16.5l1.8-5.54L4.38 7.54H10.2L12 2z" />
                </svg>
                @elseif($category['label'] === 'UTBK')
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
                course
              </span>
            </div>
            <div>
              <p class="text-sm font-semibold uppercase tracking-[0.2em]">{{ $category['label'] }}</p>
              <h3 class="mt-2 text-3xl font-black leading-tight text-slate-900">{{ $category['title'] }}</h3>
              <p class="mt-3 text-sm leading-relaxed text-on-surface">{{ $category['description'] }}</p>
            </div>
          </div>
        </a>
        @endforeach
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        @foreach($courses as $course)
        <a
          href="/courses/{{ $course->slug }}"
          class="group rounded-[2rem] border border-outline-variant bg-brand-surface p-6 shadow-lg shadow-slate-200/40 transition-all hover:-translate-y-2 hover:shadow-2xl"
        >
          <div
            class="rounded-[1.5rem] bg-gradient-to-br p-5 text-white {{ $course->category === 'OSN' ? 'from-indigo-700 to-sky-400' : ($course->category === 'UTBK' ? 'from-amber-500 to-orange-400' : 'from-blue-700 to-cyan-400') }}"
          >
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white/70">{{ $course->category }}</p>
            <p class="mt-8 text-3xl font-black leading-none">{{ $course->subject }}</p>
            <p class="mt-2 text-sm text-white/80">{{ $course->level }}</p>
          </div>
          <div class="mt-6 space-y-3">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-light">Course Online</p>
            <h3 class="text-2xl font-bold leading-tight text-slate-900 group-hover:text-brand-blue">
              {{ $course->title }}
            </h3>
            <p class="text-sm leading-relaxed text-on-surface-variant line-clamp-2">
              {{ $course->short_description }}
            </p>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>