<x-layouts.app>
@php
$accentClasses = [
    'amber' => ['card' => 'from-amber-500 to-orange-400', 'dot' => 'bg-amber-400'],
    'blue' => ['card' => 'from-blue-600 to-cyan-500', 'dot' => 'bg-cyan-400'],
    'indigo' => ['card' => 'from-indigo-600 to-sky-500', 'dot' => 'bg-sky-400']
];
@endphp
<main class="bg-brand-surface py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Produk & Layanan NLS
        </h1>
        <p class="text-lg text-on-surface-variant leading-relaxed">
          Eksplorasi layanan utama kami yang didesain untuk berbagai kebutuhan belajar, baik untuk siswa, guru, maupun lembaga pendidikan.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        @foreach($products as $product)
        @php
            $accent = $accentClasses[$product->accent] ?? $accentClasses['blue'];
        @endphp
        <article
          class="group flex h-full flex-col overflow-hidden rounded-[2rem] border border-outline-variant bg-white shadow-xl shadow-slate-200/40 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
        >
          <div class="relative p-6">
            <div class="absolute inset-6 rounded-[1.75rem] bg-gradient-to-br opacity-95 {{ $accent['card'] }}"></div>
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
            <ul class="space-y-3 text-sm text-on-surface-variant">
              @if($product->highlights)
                @foreach($product->highlights as $highlight)
                <li class="flex gap-3 leading-relaxed">
                  <span class="mt-2 h-2.5 w-2.5 rounded-full flex-shrink-0 {{ $accent['dot'] }}"></span>
                  <span>{{ $highlight }}</span>
                </li>
                @endforeach
              @endif
            </ul>

            <a
              href="/products/{{ $product->slug }}"
              class="mt-8 inline-flex items-center justify-center rounded-full border border-outline-variant px-6 py-3 font-semibold text-on-surface transition-all hover:border-brand-light hover:text-brand-blue"
            >
              Lihat Produk
            </a>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </main>
</x-layouts.app>