<x-layouts.app>
<main class="bg-brand-surface pt-10 pb-24">
    <article class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="/articles" class="inline-flex items-center gap-2 text-sm font-semibold text-on-surface-variant hover:text-brand-blue mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Berita
      </a>

      <header class="mb-10 text-center">
        <div class="mb-6 flex items-center justify-center gap-3">
          <span class="px-3 py-1 bg-brand-light/10 text-brand-light text-xs font-bold uppercase tracking-[0.2em] rounded-full border border-brand-light/20">
            {{ $article->category }}
          </span>
          <span class="text-sm font-medium text-on-surface-variant flex items-center gap-1.5">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            {{ $article->date }}
          </span>
        </div>
        <h1 class="text-3xl md:text-5xl font-black text-slate-900 leading-tight mb-6">
          {{ $article->title }}
        </h1>
        <p class="text-xl text-on-surface-variant leading-relaxed max-w-2xl mx-auto">
          {{ $article->summary }}
        </p>
      </header>

      <div class="rounded-3xl overflow-hidden mb-12 shadow-2xl">
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-auto md:h-[500px] object-cover" />
      </div>

      <div class="prose prose-lg prose-slate mx-auto prose-headings:font-bold prose-headings:text-brand-blue prose-a:text-brand-light prose-img:rounded-2xl">
        {!! $article->content !!}
      </div>

      <hr class="my-12 border-outline-variant" />

      <div class="bg-white rounded-3xl p-8 border border-outline-variant shadow-xl shadow-slate-200/40 text-center">
        <h3 class="text-2xl font-bold text-slate-900 mb-3">Punya Pertanyaan?</h3>
        <p class="text-on-surface-variant mb-6 max-w-md mx-auto">Konsultasikan kebutuhan belajarmu dengan tim ahli NLS sekarang juga.</p>
        <a href="https://wa.me/6285163070002" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-blue px-8 py-3 font-semibold text-white transition-all hover:-translate-y-1 hover:bg-brand-light hover:shadow-lg">
          Tanya Kami di WhatsApp
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </a>
      </div>
    </article>
  </main>
</x-layouts.app>