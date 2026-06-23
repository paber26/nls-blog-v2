<section id="achievement" class="relative overflow-hidden bg-white py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(59,130,246,0.08),_transparent_32%),radial-gradient(circle_at_bottom_right,_rgba(245,158,11,0.10),_transparent_30%)]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-[0.85fr_1.15fr] gap-10 items-start">
        <div class="space-y-6">
          <div class="inline-flex rounded-full border border-brand-light/20 bg-brand-light/10 px-4 py-1.5 text-sm font-semibold text-brand-light">
            Achievement Preview
          </div>
          <div class="space-y-4">
            <h2 class="text-4xl md:text-5xl font-black text-brand-blue">
              Jejak Kegiatan dan Prestasi NLS
            </h2>
            <p class="text-lg leading-relaxed text-slate-600">
              Lihat ringkasan kegiatan dan capaian NLS langsung dari beranda. Jika ingin melihat dokumentasi yang lebih lengkap, kamu bisa membuka halaman Achievement.
            </p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="rounded-[1.5rem] bg-brand-surface p-5 shadow-lg shadow-slate-200/40">
              <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-light">Dokumentasi</p>
              <p class="mt-3 text-3xl font-black text-brand-blue">7+</p>
              <p class="mt-2 text-sm leading-relaxed text-slate-600">Foto kegiatan dan capaian yang memperlihatkan rekam jejak NLS.</p>
            </div>
            <div class="rounded-[1.5rem] bg-brand-surface p-5 shadow-lg shadow-slate-200/40">
              <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-light">Trust Signal</p>
              <p class="mt-3 text-3xl font-black text-brand-blue">Real</p>
              <p class="mt-2 text-sm leading-relaxed text-slate-600">Membantu kamu melihat aktivitas dan capaian NLS secara lebih nyata.</p>
            </div>
            <div class="rounded-[1.5rem] bg-brand-surface p-5 shadow-lg shadow-slate-200/40">
              <p class="text-sm font-semibold uppercase tracking-[0.2em] text-brand-light">Kerja Sama</p>
              <p class="mt-3 text-3xl font-black text-brand-blue">Ready</p>
              <p class="mt-2 text-sm leading-relaxed text-slate-600">Cocok dijadikan referensi saat kamu ingin mengenal layanan atau kerja sama NLS.</p>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4">
            <a href="/achievementList"
              Lihat Semua Achievement
            </a>
            <a
              href="https://wa.me/6285163070002"
              target="_blank"
              rel="noreferrer"
              class="inline-flex items-center justify-center rounded-full border border-slate-200 px-6 py-3 font-semibold text-slate-700 transition-colors hover:border-brand-light hover:text-brand-blue"
            >
              Diskusikan Kerja Sama
            </a>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
          <article
            v-for="item in previewItems"
            :key="item.title"
            class="group overflow-hidden rounded-[1.75rem] border border-slate-100 bg-brand-surface shadow-lg shadow-slate-200/40 transition-all hover:-translate-y-2 hover:shadow-2xl"
          >
            <div class="relative overflow-hidden">
              <img :src="item.image" :alt="item.title" class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105" />
              <div class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-slate-700">
                {{ item.category }}
              </div>
            </div>
            <div class="p-5 space-y-2">
              <h3 class="text-xl font-bold text-slate-900">{{ item.title }}</h3>
              <p class="text-sm leading-relaxed text-slate-600">{{ item.caption }}</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>