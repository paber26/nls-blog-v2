<x-layouts.app>
@php
    $programStyles = [
        'bimbel-utbk-snbt' => [
            'bg' => 'bg-amber-500',
            'text' => 'text-amber-600',
            'light' => 'bg-amber-50'
        ],
        'pelatihan-osn' => [
            'bg' => 'bg-indigo-600',
            'text' => 'text-indigo-600',
            'light' => 'bg-indigo-50'
        ],
        'pendampingan-tka' => [
            'bg' => 'bg-blue-600',
            'text' => 'text-blue-600',
            'light' => 'bg-blue-50'
        ]
    ];
    $style = $programStyles[$program->slug] ?? $programStyles['pelatihan-osn'];
@endphp

<main class="bg-slate-50 pt-10 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="/programs" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-brand-blue mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Program
      </a>

      <div class="bg-white rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        <div class="p-8 md:p-14 lg:p-20 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
          <div class="space-y-8">
            @if($program->badge)
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-slate-200 bg-white shadow-sm">
              <span class="w-2.5 h-2.5 rounded-full {{ $style['bg'] }} animate-pulse"></span>
              <span class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">{{ $program->badge }}</span>
            </div>
            @endif
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 leading-tight">
              {{ $program->title }}
            </h1>
            
            <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
              {{ $program->summary }}
            </p>

            <div class="pt-6 border-t border-slate-100">
              <h3 class="font-bold text-slate-900 mb-6 flex items-center gap-2">
                <svg class="w-5 h-5 {{ $style['text'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Fasilitas & Keunggulan Program
              </h3>
              <ul class="space-y-4">
                @if($program->features)
                  @foreach($program->features as $feature)
                  <li class="flex items-start gap-4">
                    <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center {{ $style['light'] }}">
                      <svg class="w-4 h-4 {{ $style['text'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <span class="text-slate-600 leading-relaxed font-medium">{{ $feature }}</span>
                  </li>
                  @endforeach
                @endif
              </ul>
            </div>

            <div class="pt-8">
              <a href="https://wa.me/6285163070002" target="_blank" rel="noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 rounded-full px-8 py-4 font-semibold text-white transition-all hover:-translate-y-1 hover:shadow-lg {{ $style['bg'] }}">
                Daftar Program Sekarang
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          </div>

          <div class="space-y-8">
            <div class="relative h-[300px] md:h-[400px] rounded-[2rem] overflow-hidden group shadow-2xl">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="{{ $program->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
            </div>

            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-100">
              <h3 class="font-bold text-slate-900 mb-6">Target Capaian (Outcomes)</h3>
              <div class="grid grid-cols-1 gap-4">
                @if($program->outcomes)
                  @foreach($program->outcomes as $index => $outcome)
                  <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm">
                    <div class="flex-shrink-0 w-8 h-8 rounded-xl flex items-center justify-center font-black {{ $style['light'] }} {{ $style['text'] }}">
                      {{ $index + 1 }}
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed pt-1.5">{{ $outcome }}</p>
                  </div>
                  @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-layouts.app>