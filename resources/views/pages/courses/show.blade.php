<x-layouts.app>
<main class="bg-brand-surface pt-10 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="/courses" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-brand-blue mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Katalog
      </a>

      <div class="grid grid-cols-1 lg:grid-cols-[1.5fr_1fr] gap-12 items-start">
        <div class="space-y-8">
          <div class="space-y-6">
            <div class="flex items-center gap-3">
              <span class="px-3 py-1 bg-brand-light/10 text-brand-light text-xs font-bold uppercase tracking-[0.2em] rounded-full border border-brand-light/20">
                {{ $course->category }}
              </span>
              <span class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold uppercase tracking-[0.2em] rounded-full">
                {{ $course->level }}
              </span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight">
              {{ $course->title }}
            </h1>
            
            <p class="text-lg leading-relaxed text-slate-600">
              {{ $course->short_description }}
            </p>
          </div>

          <div class="prose prose-lg prose-slate max-w-none prose-headings:font-bold prose-headings:text-brand-blue prose-a:text-brand-light">
            {!! $course->content !!}
          </div>
        </div>

        <div class="bg-white rounded-[2rem] p-8 shadow-xl shadow-slate-200/40 border border-slate-100 sticky top-28 space-y-8">
          <div class="space-y-2 pb-6 border-b border-slate-100">
            <p class="text-sm font-semibold uppercase tracking-widest text-slate-400">Investasi Belajar</p>
            <p class="text-4xl font-black text-slate-900">{{ $course->price }}</p>
          </div>

          <div class="space-y-4">
            <h3 class="font-bold text-slate-900 flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              Highlight Materi
            </h3>
            <ul class="space-y-3">
              @if($course->highlights)
                @foreach($course->highlights as $hl)
                <li class="flex items-start gap-3 text-slate-600 text-sm">
                  <span class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-2 flex-shrink-0"></span>
                  <span class="leading-relaxed">{{ $hl }}</span>
                </li>
                @endforeach
              @endif
            </ul>
          </div>

          <a href="https://wa.me/6285163070002" target="_blank" rel="noreferrer" class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-brand-blue px-6 py-4 font-semibold text-white transition-all hover:-translate-y-1 hover:bg-brand-light shadow-lg">
            Daftar Course Ini
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </main>
</x-layouts.app>