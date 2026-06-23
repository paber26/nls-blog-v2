<x-layouts.app>
@php
$accentClasses = [
    'amber' => ['bg' => 'bg-amber-500', 'text' => 'text-amber-600', 'light' => 'bg-amber-50'],
    'blue' => ['bg' => 'bg-blue-600', 'text' => 'text-blue-600', 'light' => 'bg-blue-50'],
    'indigo' => ['bg' => 'bg-indigo-600', 'text' => 'text-indigo-600', 'light' => 'bg-indigo-50']
];
$accent = $accentClasses[$product->accent] ?? $accentClasses['blue'];
@endphp
<main class="bg-slate-50 pt-10 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <a href="/products" class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-brand-blue mb-8 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
        Kembali ke Produk
      </a>

      <div class="bg-white rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
        <div class="p-8 md:p-14 lg:p-20 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div class="space-y-8">
            <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-slate-200 bg-white">
              <span class="w-2.5 h-2.5 rounded-full {{ $accent['bg'] }}"></span>
              <span class="text-xs font-bold uppercase tracking-[0.2em] text-slate-700">{{ $product->badge }}</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 leading-tight">
              {{ $product->title }}
            </h1>
            
            <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
              {{ $product->summary }}
            </p>

            <div class="pt-6 border-t border-slate-100">
              <h3 class="font-bold text-slate-900 mb-4">Yang Akan Anda Dapatkan:</h3>
              <ul class="space-y-4">
                @if($product->outcomes)
                  @foreach($product->outcomes as $outcome)
                  <li class="flex items-start gap-4">
                    <div class="mt-1 flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center {{ $accent['light'] }}">
                      <svg class="w-4 h-4 {{ $accent['text'] }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                    <span class="text-slate-600 leading-relaxed">{{ $outcome }}</span>
                  </li>
                  @endforeach
                @endif
              </ul>
            </div>

            <div class="pt-8">
              <a href="https://wa.me/6285163070002" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center gap-2 rounded-full bg-slate-900 px-8 py-4 font-semibold text-white transition-all hover:-translate-y-1 hover:shadow-lg hover:bg-brand-blue">
                Konsultasikan Kebutuhan
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          </div>

          <div class="relative h-[400px] lg:h-[600px] rounded-[2rem] overflow-hidden group hidden lg:block">
            <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 p-10 text-white">
              <h3 class="text-2xl font-bold mb-3 font-heading">Solusi Komprehensif</h3>
              <p class="text-white/80 leading-relaxed text-sm max-w-md">Pendekatan yang disesuaikan dengan kebutuhan spesifik individu maupun lembaga untuk hasil yang optimal.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-layouts.app>