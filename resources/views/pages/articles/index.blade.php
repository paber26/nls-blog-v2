<x-layouts.app>
<main class="bg-brand-surface py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Berita & Edukasi
        </h1>
        <p class="text-lg text-on-surface-variant leading-relaxed">
          Kumpulan artikel inspiratif, tips belajar, informasi beasiswa, dan panduan menembus PTN impian.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <a href="/articles/{{ $article->slug }}" class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-slate-200/40 border border-outline-variant flex flex-col hover:-translate-y-2 transition-all duration-300">
          <div class="relative h-60 overflow-hidden bg-surface-container">
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-bold text-brand-blue tracking-wide shadow-sm">
              {{ $article->category }}
            </div>
          </div>
          <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-xl font-bold font-heading text-on-background mb-4 group-hover:text-brand-light transition-colors leading-snug">
              {{ $article->title }}
            </h3>
            <p class="text-on-surface-variant mb-6 text-sm line-clamp-3 leading-relaxed">
              {{ $article->summary }}
            </p>
            <div class="mt-auto flex items-center justify-between text-sm font-medium">
              <span class="flex items-center gap-2 text-on-surface-variant">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                {{ $article->date }}
              </span>
              <span class="text-brand-light group-hover:text-brand-blue flex items-center gap-1 transition-colors">
                Baca
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
              </span>
            </div>
          </div>
        </a>
        @endforeach
      </div>

      <div class="mt-12">
        {{ $articles->links() }}
      </div>
    </div>
  </main>
</x-layouts.app>