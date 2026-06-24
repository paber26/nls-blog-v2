<x-layouts.app>
@php
    $programStyles = [
        'bimbel-utbk-snbt' => [
            'card' => 'ring-2 ring-amber-400',
            'badge' => 'bg-amber-100 text-amber-700',
            'iconWrapper' => 'bg-amber-50 border-amber-200 group-hover:bg-amber-500',
            'iconColor' => 'text-amber-500',
            'bulletBg' => 'bg-amber-100',
            'bulletColor' => 'bg-amber-500',
            'action' => 'bg-amber-500 text-white hover:bg-amber-600'
        ],
        'pelatihan-osn' => [
            'card' => 'border-indigo-100',
            'badge' => 'bg-indigo-100 text-indigo-700',
            'iconWrapper' => 'bg-indigo-50 border-indigo-200 group-hover:bg-indigo-500',
            'iconColor' => 'text-indigo-500',
            'bulletBg' => 'bg-indigo-100',
            'bulletColor' => 'bg-indigo-500',
            'action' => 'bg-indigo-50 text-indigo-700 hover:bg-indigo-100'
        ],
        'pendampingan-tka' => [
            'card' => 'border-blue-100',
            'badge' => 'bg-blue-100 text-blue-700',
            'iconWrapper' => 'bg-blue-50 border-blue-200 group-hover:bg-blue-500',
            'iconColor' => 'text-blue-500',
            'bulletBg' => 'bg-blue-100',
            'bulletColor' => 'bg-blue-500',
            'action' => 'bg-blue-50 text-blue-700 hover:bg-blue-100'
        ]
    ];
@endphp

<main class="bg-brand-surface py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Program Terbaik NLS
        </h1>
        <p class="text-lg text-on-surface-variant leading-relaxed">
          Pilih program intensif yang paling sesuai dengan target akademismu, dari persiapan UTBK, OSN, hingga evaluasi komprehensif.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @foreach($programs as $program)
        @php
            $style = $programStyles[$program->slug] ?? $programStyles['pelatihan-osn'];
        @endphp
        <div class="bg-white rounded-3xl p-8 shadow-xl shadow-slate-200/50 border border-outline-variant transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-brand-light/30 group flex flex-col h-full relative overflow-hidden {{ $style['card'] }}">
          @if($program->badge === 'Populer')
          <div class="absolute top-4 right-4 text-xs font-bold px-3 py-1 rounded-full {{ $style['badge'] }}">
            POPULER
          </div>
          @endif

          <div class="w-16 h-16 rounded-2xl border flex items-center justify-center mb-6 group-hover:scale-110 group-hover:text-white transition-all duration-300 {{ $style['iconWrapper'] }}">
            <svg class="w-8 h-8 group-hover:text-white transition-colors {{ $style['iconColor'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
          </div>
          <h3 class="text-2xl font-bold text-on-background mb-3 font-heading">{{ $program->title }}</h3>
          <p class="text-on-surface-variant mb-6 flex-grow">{{ $program->summary }}</p>
          <ul class="space-y-3 mb-8 text-sm text-on-surface-variant font-medium">
            @if($program->features)
              @foreach(array_slice($program->features, 0, 4) as $feature)
              <li class="flex items-center gap-3">
                <span class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center {{ $style['bulletBg'] }}">
                  <span class="w-2 h-2 rounded-full {{ $style['bulletColor'] }}"></span>
                </span>
                {{ $feature }}
              </li>
              @endforeach
            @endif
          </ul>
          <a href="/programs/{{ $program->slug }}" class="inline-flex w-full items-center justify-center px-6 py-3 rounded-xl transition-all font-semibold shadow-sm {{ $style['action'] }}">
            {{ $program->slug === 'bimbel-utbk-snbt' ? 'Daftar SNBT Sekarang' : 'Lihat Detail Program' }}
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </main>
</x-layouts.app>