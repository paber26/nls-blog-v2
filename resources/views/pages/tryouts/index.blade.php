<x-layouts.app>
<main class="bg-surface-container-low py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Platform Tryout NLS
        </h1>
        <p class="text-lg text-on-surface-variant leading-relaxed">
          Ukur kemampuanmu dengan sistem tryout terintegrasi yang mensimulasikan kondisi tes sebenarnya.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($tryouts as $platform)
        <a
          href="{{ $platform->url }}"
          target="_blank"
          rel="noopener noreferrer"
          class="group bg-white rounded-[2rem] p-8 shadow-xl shadow-slate-200/50 border border-outline-variant transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col h-full"
        >
          <div class="w-16 h-16 rounded-2xl bg-brand-light/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            @if($platform->id === 1)
            <svg class="w-8 h-8 text-brand-light" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            @elseif($platform->id === 2)
            <svg class="w-8 h-8 text-brand-light" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            @else
            <svg class="w-8 h-8 text-brand-light" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            @endif
          </div>
          <h3 class="text-2xl font-bold text-on-background mb-3">{{ $platform->name }}</h3>
          <p class="text-on-surface-variant mb-8 flex-grow">{{ $platform->description }}</p>
          <div class="inline-flex items-center text-brand-light font-semibold group-hover:text-brand-blue transition-colors">
            Akses Platform
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </main>
</x-layouts.app>