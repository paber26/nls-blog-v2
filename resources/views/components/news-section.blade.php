@props(['articles'])
<section id="berita" class="py-24 bg-surface-container-low relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
        <div class="max-w-2xl">
          <div class="inline-block px-4 py-1.5 rounded-full bg-brand-light/10 text-brand-light font-semibold text-sm tracking-wide mb-3 uppercase border border-brand-light/20">
            Perkembangan Terkini
          </div>
          <h2 class="text-4xl md:text-5xl font-black text-brand-blue leading-tight mb-4">
            Berita & <span class="text-brand-light">Tips Belajar</span>
          </h2>
          <p class="text-lg text-on-surface-variant">Temukan info beasiswa, tips belajar, strategi lomba, dan artikel persiapan akademik yang bisa kamu baca kapan saja.</p>
        </div>
        <a href="/articles" class="inline-flex items-center gap-2 font-bold text-brand-light hover:text-brand-blue transition-colors group">
          Lihat Semua Artikel
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <article
          class="bg-white rounded-3xl overflow-hidden shadow-xl shadow-slate-200/40 border border-outline-variant group flex flex-col hover:-translate-y-2 transition-all duration-300"
        >
          <div class="relative h-60 overflow-hidden">
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-blue">
              {{ $article->category }}
            </div>
          </div>
          <div class="p-8 flex flex-col flex-grow">
            <h3 class="text-xl font-bold font-heading text-on-background mb-3 group-hover:text-brand-light transition-colors">{{ $article->title }}</h3>
            <p class="text-on-surface-variant mb-6 text-sm line-clamp-3">{{ $article->summary }}</p>
            <div class="mt-auto flex items-center justify-between text-sm text-on-surface-variant">
              <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg> {{ $article->date }}</span>
              <a href="/articles/{{ $article->slug }}" class="text-brand-light font-semibold hover:underline">Baca Selengkapnya</a>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>