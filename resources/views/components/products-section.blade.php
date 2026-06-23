@props(['products'])

<section id="produk" class="relative overflow-hidden bg-brand-surface py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_rgba(59,130,246,0.08),_transparent_28%),radial-gradient(circle_at_bottom_left,_rgba(16,185,129,0.08),_transparent_28%)]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
      <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
        <div class="max-w-3xl space-y-5">
          <div class="inline-flex rounded-full border border-brand-light/20 bg-brand-light/10 px-4 py-1.5 text-sm font-semibold text-brand-light">
            Produk Kami
          </div>
          <h2 class="text-4xl md:text-5xl font-black text-brand-blue">
            Layanan Utama Next Level Study
          </h2>
          <p class="text-lg leading-relaxed text-slate-600">
            Selain course online dan tryout, kamu juga bisa melihat layanan NLS untuk sekolah, guru, dan siswa. Dengan begitu, kamu lebih mudah memahami pilihan layanan yang paling sesuai.
          </p>
        </div>

        <a href="/productList"
          Lihat Semua Produk
          <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </a>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
        <article
          class="group flex h-full flex-col overflow-hidden rounded-[2rem] border border-slate-100 bg-white shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
        >
          <div class="relative p-6">
            <div class="absolute inset-6 rounded-[1.75rem] bg-gradient-to-br opacity-95"></div>
            <div class="relative z-10 flex min-h-[220px] flex-col justify-between rounded-[1.75rem] p-6 text-white">
              <div class="flex items-start justify-between gap-4">
                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/15 backdrop-blur-sm">
                  @if($product->slug === 'pelatihan-siswa')
                  <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  @elseif($product->slug === 'pelatihan-guru')
                  <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  </svg>
                  @else
                  <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6m4 6V7m4 10v-3M5 19h14" />
                  </svg>
                  @endif
                </div>
                <span class="rounded-full border border-white/20 bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em]">
                  {{ $product->badge }}
                </span>
              </div>

              <div class="space-y-3">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-white/70">Produk NLS</p>
                <h3 class="text-3xl font-black leading-tight text-white">{{ $product->title }}</h3>
                <p class="max-w-sm text-sm leading-relaxed text-white/80">{{ $product->summary }}</p>
              </div>
            </div>
          </div>

          <div class="flex flex-1 flex-col px-6 pb-6">
            <ul class="space-y-3 text-sm text-slate-600">
              @foreach($product->highlights as $highlight)
              <li
                class="flex gap-3 leading-relaxed"
              >
                <span class="mt-2 h-2.5 w-2.5 rounded-full bg-brand-light"></span>
                <span>{{ $highlight }}</span>
              </li>
              @endforeach
            </ul>

            <a
              href="/products/{{ $product->slug }}"
              class="mt-8 inline-flex items-center justify-center rounded-full border border-slate-200 px-6 py-3 font-semibold text-slate-700 transition-all hover:border-brand-light hover:text-brand-blue"
            >
              Lihat Produk
            </a>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </section>