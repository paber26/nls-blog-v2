@props(['tryouts'])
@php
    $tryoutHighlights = [
        ['title' => 'CBT Mirip Asli', 'description' => 'Sistem CBT yang didesain agar mirip dengan platform UTBK maupun OSN yang sebenarnya.', 'accent' => 'text-amber-400'],
        ['title' => 'Update 2024', 'description' => 'Soal-soal terbaru yang relevan dengan kisi-kisi dan materi tahun 2024.', 'accent' => 'text-emerald-400'],
        ['title' => 'Evaluasi', 'description' => 'Dapatkan laporan hasil tryout dan pembahasan soal untuk perbaikan.', 'accent' => 'text-cyan-400']
    ];
@endphp
<section id="tryout" class="relative overflow-hidden bg-slate-950 py-24 text-white">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.22),_transparent_28%),radial-gradient(circle_at_bottom_right,_rgba(245,158,11,0.16),_transparent_32%)]"></div>

    <div class="relative z-10 mx-auto max-w-7xl space-y-14 px-4 sm:px-6 lg:px-8">
      <div class="grid gap-10 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
        <div class="space-y-6">
          <div class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/8 px-4 py-2 text-sm font-semibold text-cyan-200">
            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
            Tryout NLS
          </div>
          <h2 class="text-4xl font-black leading-tight md:text-5xl">
            Bukan Hanya Belajar,
            <span class="bg-gradient-to-r from-cyan-300 via-white to-amber-300 bg-clip-text text-transparent">Peserta Juga Bisa Tryout Seperti Ujian Asli</span>
          </h2>
          <p class="max-w-2xl text-lg leading-relaxed text-slate-300">
            Siapkan dirimu lewat tryout UTBK dan OSN yang dirancang menyerupai suasana ujian. Kamu bisa mulai dari tryout gratis, lalu lanjut ke paket yang lebih lengkap sesuai kebutuhan latihanmu.
          </p>
          <div class="flex flex-col gap-4 sm:flex-row">
            <a href="/tryouts" class="inline-flex items-center justify-center rounded-full bg-cyan-500 px-7 py-4 text-base font-bold text-white shadow-lg transition-all hover:-translate-y-1 hover:bg-cyan-400">
              Lihat Semua Tryout
            </a>
            <a
              href="https://utbk.next-level-study.com"
              target="_blank"
              rel="noreferrer"
              class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/10 px-7 py-4 text-base font-semibold text-white transition-all hover:-translate-y-1 hover:bg-white/15"
            >
              Coba Tryout UTBK
            </a>
          </div>
        </div>

        <div class="grid gap-4 md:grid-cols-3">
          @foreach($tryoutHighlights as $item)
          <div
            class="rounded-[1.75rem] border border-white/10 bg-white/10 p-6 shadow-xl shadow-slate-950/30 backdrop-blur-sm"
          >
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white/50">Keunggulan</p>
            <h3 class="mt-4 text-2xl font-black {{ $item['accent'] }}">{{ $item['title'] }}</h3>
            <p class="mt-3 text-sm leading-relaxed text-slate-300">{{ $item['description'] }}</p>
          </div>
          @endforeach
        </div>
      </div>

      <div class="grid gap-6 lg:grid-cols-2">
        @foreach($tryouts as $platform)
        <a
          href="{{ $platform->url }}"
          target="_blank"
          rel="noreferrer"
          class="group rounded-[2rem] border p-7 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl {{ $platform->surface }}"
        >
          <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
            <div class="space-y-4">
              <div class="inline-flex items-center gap-2 rounded-full bg-white/80 px-4 py-2 text-xs font-semibold uppercase tracking-[0.25em] text-slate-700">
                {{ $platform->label }}
              </div>
              <div>
                <h3 class="text-3xl font-black leading-tight text-slate-900">{{ $platform->title }}</h3>
                <p class="mt-3 max-w-2xl text-sm leading-relaxed text-slate-600">{{ $platform->description }}</p>
              </div>
            </div>

            <div class="rounded-[1.5rem] bg-white p-5 shadow-lg shadow-slate-200/70 lg:w-56">
              <p class="text-xs font-semibold uppercase tracking-[0.22em] text-slate-400">Akses</p>
              <p class="mt-2 text-xl font-black text-slate-900">{{ $platform->access }}</p>
              <p class="mt-3 text-sm text-slate-500">{{ $platform->mode }}</p>
            </div>
          </div>

          <div class="mt-6 grid gap-3 md:grid-cols-3">
            <div class="rounded-2xl bg-white/80 px-4 py-4 shadow-sm">
              <p class="text-xs font-semibold uppercase tracking-[0.22em] text-slate-400">Target</p>
              <p class="mt-2 font-bold text-slate-900">{{ $platform->audience }}</p>
            </div>
            @foreach(array_slice($platform->points, 0, 2) as $point)
            <div
              class="rounded-2xl bg-white/80 px-4 py-4 shadow-sm"
            >
              <p class="text-sm leading-relaxed text-slate-700">{{ $point }}</p>
            </div>
            @endforeach
          </div>

          <div class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-slate-900">
            Masuk ke platform tryout
            <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>