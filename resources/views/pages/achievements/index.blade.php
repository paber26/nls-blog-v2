<x-layouts.app>
@php
$galleryItems = [
  [
    'category' => 'Pembinaan',
    'title' => 'TEAM MATH OSN DKI',
    'caption' => 'Dokumentasi pembinaan tim OSN Matematika untuk delegasi tingkat DKI.',
    'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Kemitraan Sekolah',
    'title' => 'TEAM SMAN 8 JAKARTA',
    'caption' => 'Kolaborasi pembinaan siswa bersama sekolah mitra untuk target seleksi dan prestasi.',
    'image' => 'https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Prestasi Internasional',
    'title' => 'GOLD IEO - SILVER IBO',
    'caption' => 'Capaian kompetisi internasional sebagai bukti bahwa pembinaan NLS diarahkan pada hasil nyata.',
    'image' => 'https://images.unsplash.com/photo-1561525140-c2a4cc68e4bd?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Prestasi Siswa',
    'title' => 'JUARA 1 MENYANYI',
    'caption' => 'Pendampingan siswa untuk ajang FLS2N dan kompetisi non-akademik secara lebih terstruktur.',
    'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Prestasi Siswa',
    'title' => 'JUARA 2 BACA PUISI',
    'caption' => 'Pendampingan talenta siswa dalam lomba literasi dan seni dengan target prestasi yang jelas.',
    'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead27d8?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Prestasi Internasional',
    'title' => 'SILVER IAPHO',
    'caption' => 'NLS turut mendampingi siswa menuju capaian medali dalam ajang sains tingkat tinggi.',
    'image' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=800&auto=format&fit=crop'
  ],
  [
    'category' => 'Prestasi Debat',
    'title' => 'GOLD & SILVER LDBI',
    'caption' => 'Prestasi debat dan kompetisi akademik lain yang memperlihatkan spektrum pembinaan NLS.',
    'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=800&auto=format&fit=crop'
  ]
];
@endphp
<main class="bg-brand-surface py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Galeri Prestasi & Kegiatan
        </h1>
        <p class="text-lg text-on-surface-variant leading-relaxed">
          Bukti nyata dari komitmen NLS dalam membimbing siswa meraih prestasi tingkat nasional hingga internasional.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($galleryItems as $item)
        <article class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-slate-200/40 border border-outline-variant flex flex-col hover:-translate-y-2 transition-all duration-300">
          <div class="relative h-64 overflow-hidden bg-surface-container">
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-bold text-brand-blue tracking-wide shadow-sm">
              {{ $item['category'] }}
            </div>
          </div>
          <div class="p-6 flex flex-col flex-grow">
            <h3 class="text-xl font-bold font-heading text-on-background mb-2 leading-snug">
              {{ $item['title'] }}
            </h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">
              {{ $item['caption'] }}
            </p>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </main>
</x-layouts.app>