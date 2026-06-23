<section id="program" class="py-24 bg-brand-surface relative overflow-hidden">
    <!-- Subtle background pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiM5NGExYjIiIGZpbGwtb3BhY2l0eT0iMC41Ii8+PC9zdmc+')] opacity-[0.03]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-4xl md:text-5xl font-black text-brand-blue mb-5">Pilihan Program Terbaik</h2>
        <p class="text-lg text-slate-600">Berbagai program unggulan dari Next Level Study untuk persiapan menuju jenjang yang lebih tinggi dan perlombaan bergengsi tingkat nasional.</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div
          v-for="program in programs"
          :key="program.slug"
          class="bg-white rounded-3xl p-8 shadow-xl shadow-slate-200/50 border border-slate-100 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:border-brand-light/30 group flex flex-col h-full relative overflow-hidden"
          :class="programStyles[program.slug].card"
        >
          <div
            v-if="program.badge === 'Populer'"
            class="absolute top-4 right-4 text-xs font-bold px-3 py-1 rounded-full"
            :class="programStyles[program.slug].badge"
          >
            POPULER
          </div>

          <div class="w-16 h-16 rounded-2xl border flex items-center justify-center mb-6 group-hover:scale-110 group-hover:text-white transition-all duration-300" :class="programStyles[program.slug].iconWrapper">
            <svg class="w-8 h-8 group-hover:text-white transition-colors" :class="programStyles[program.slug].iconColor" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
          </div>
          <h3 class="text-2xl font-bold text-slate-800 mb-3 font-heading">{{ program.title }}</h3>
          <p class="text-slate-600 mb-6 flex-grow">{{ program.summary }}</p>
          <ul class="space-y-3 mb-8 text-sm text-slate-600 font-medium">
            <li v-for="feature in program.features.slice(0, 4)" :key="feature" class="flex items-center gap-3">
              <span class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center" :class="programStyles[program.slug].bulletBg">
                <span class="w-2 h-2 rounded-full" :class="programStyles[program.slug].bulletColor"></span>
              </span>
              {{ feature }}
            </li>
          </ul>
          <RouterLink :to="{ name: 'programDetail', params: { slug: program.slug } }" class="inline-flex w-full items-center justify-center px-6 py-3 rounded-xl transition-all font-semibold shadow-sm" :class="programStyles[program.slug].action">
            {{ program.slug === 'bimbel-utbk-snbt' ? 'Daftar SNBT Sekarang' : 'Lihat Detail Program' }}
          </a>
        </div>
      </div>
    </div>
  </section>