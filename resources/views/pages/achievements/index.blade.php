<x-layouts.app>
@php
$galleryItems = [
  [
    'category' => 'Pembinaan',
    'title' => 'TEAM MATH OSN DKI',
    'caption' => 'Dokumentasi pembinaan tim OSN Matematika untuk delegasi tingkat DKI.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/matematika-dki-qw89ml63p297f2cpg0qfpinp19hhjy4d71c2yy6bio.jpeg'
  ],
  [
    'category' => 'Kemitraan Sekolah',
    'title' => 'TEAM SMAN 8 JAKARTA',
    'caption' => 'Kolaborasi pembinaan siswa bersama sekolah mitra untuk target seleksi dan prestasi.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/sman-8-jakarta-osn-qwxag600ldwjoykwhdtwbiz35u7xpgatijqx00iksw.jpeg'
  ],
  [
    'category' => 'Prestasi Internasional',
    'title' => 'GOLD IEO - SILVER IBO',
    'caption' => 'Capaian kompetisi internasional sebagai bukti bahwa pembinaan NLS diarahkan pada hasil nyata.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/internasional-juara-qwxaonhkajiqi895xjvnbvvw82e872zl0jrpyxxmmo.jpeg'
  ],
  [
    'category' => 'Prestasi Siswa',
    'title' => 'JUARA 1 MENYANYI',
    'caption' => 'Pendampingan siswa untuk ajang FLS2N dan kompetisi non-akademik secara lebih terstruktur.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/fls2n-nyanyi-scaled-qx8bcuvpnk1mddgjk8ze2bq11l2wi6ewd04be4j4k0.jpeg'
  ],
  [
    'category' => 'Prestasi Siswa',
    'title' => 'JUARA 2 BACA PUISI',
    'caption' => 'Pendampingan talenta siswa dalam lomba literasi dan seni dengan target prestasi yang jelas.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/fls2n-baca-puisi-scaled-qx8b9gooz3ecg2e1ds5w26k3tht6pixsk7b705kb0w.jpeg'
  ],
  [
    'category' => 'Prestasi Internasional',
    'title' => 'SILVER IAPHO',
    'caption' => 'NLS turut mendampingi siswa menuju capaian medali dalam ajang sains tingkat tinggi.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/SILVER-IAPHO-scaled-qx8b87kfv1okys7kp8nsqhxzazzkg1yodzzvyvf7bk.jpeg'
  ],
  [
    'category' => 'Prestasi Debat',
    'title' => 'GOLD & SILVER LDBI',
    'caption' => 'Prestasi debat dan kompetisi akademik lain yang memperlihatkan spektrum pembinaan NLS.',
    'image' => 'https://next-level-study.com/wp-content/uploads/elementor/thumbs/gold-ldbi-qx8b1yx0hn51vz9w51jyokmtbwquce6tv42u9qoamo.jpeg'
  ]
];
@endphp
<main class="bg-brand-surface py-20 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <h1 class="text-4xl md:text-5xl font-black text-brand-blue">
          Galeri Prestasi & Kegiatan
        </h1>
        <p class="text-lg text-slate-600 leading-relaxed">
          Bukti nyata dari komitmen NLS dalam membimbing siswa meraih prestasi tingkat nasional hingga internasional.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($galleryItems as $item)
        <article class="group bg-white rounded-3xl overflow-hidden shadow-xl shadow-slate-200/40 border border-slate-100 flex flex-col hover:-translate-y-2 transition-all duration-300">
          <div class="relative h-64 overflow-hidden bg-slate-100">
            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-bold text-brand-blue tracking-wide shadow-sm">
              {{ $item['category'] }}
            </div>
          </div>
          <div class="p-6 flex flex-col flex-grow">
            <h3 class="text-xl font-bold font-heading text-slate-800 mb-2 leading-snug">
              {{ $item['title'] }}
            </h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              {{ $item['caption'] }}
            </p>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </main>
</x-layouts.app>