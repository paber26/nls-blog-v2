<nav x-data="{ isMobileMenuOpen: false, activeDesktopMenu: null }"
    @click.outside="activeDesktopMenu = null"
    :class="[
      'fixed top-0 z-50 w-full border-b transition-all',
      isMobileMenuOpen
        ? 'border-transparent bg-[#0caabf]'
        : 'border-slate-100 bg-white/95 shadow-sm backdrop-blur-md'
    ]"
  >
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex h-20 items-center justify-between gap-4">
        <a href="/" class="flex shrink-0 items-center gap-3">
          <img
            src="/nls-logo-300.png"
            alt="Logo Next Level Study"
            class="h-10 w-10 rounded-xl object-cover shadow-lg md:h-11 md:w-11"
          />
          <div class="flex flex-col leading-none">
            <span
              class="font-heading text-lg font-black tracking-tight md:text-[1.7rem]"
              :class="isMobileMenuOpen ? 'text-white' : 'text-brand-blue'"
            >
              Next Level
            </span>
            <span
              class="font-heading text-xs font-bold tracking-[0.28em] md:text-sm"
              :class="isMobileMenuOpen ? 'text-white/80' : 'text-brand-light'"
            >
              STUDY
            </span>
          </div>
        </a>

        <div class="hidden items-center gap-4 text-[15px] font-medium text-slate-600 md:flex lg:gap-6">
          <div class="relative">
            <button
              type="button"
              class="inline-flex items-center gap-2 whitespace-nowrap rounded-full px-3 py-2 transition-colors hover:bg-slate-50 hover:text-brand-light"
              :class="activeDesktopMenu === 'about' ? 'text-brand-light' : ''"
              @click.stop="activeDesktopMenu = activeDesktopMenu === 'about' ? null : 'about'"
            >
              Tentang
              <svg class="h-4 w-4 transition-transform" :class="activeDesktopMenu === 'about' ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div
              x-show="activeDesktopMenu === 'about'"
              x-cloak
              class="fixed inset-x-0 top-20 z-50 px-4 sm:px-6 lg:px-8"
            >
              <div class="mx-auto max-w-7xl">
                <div class="w-full max-w-5xl overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_28px_80px_rgba(15,23,42,0.18)]" @click.stop>
                  <div class="mb-4 flex items-center justify-between px-1">
                    <div>
                      <p class="text-xs font-semibold uppercase tracking-[0.25em] text-brand-light">Tentang NLS</p>
                      <p class="mt-1 text-sm text-slate-500">Profil, layanan, dan rekam jejak Next Level Study.</p>
                    </div>
                  </div>

                  <div class="grid grid-cols-3 gap-3">
                    <a href="/#tentang" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-brand-light/30 hover:shadow-lg hover:shadow-slate-200/50" @click="activeDesktopMenu = null">
                      <p class="font-bold text-slate-900">Tentang Kami</p>
                      <p class="mt-1 text-sm leading-relaxed text-slate-500">Profil singkat, nilai, dan pendekatan belajar NLS.</p>
                    </a>
                    <a href="/products" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-brand-light/30 hover:shadow-lg hover:shadow-slate-200/50" @click="activeDesktopMenu = null">
                      <p class="font-bold text-slate-900">Produk</p>
                      <p class="mt-1 text-sm leading-relaxed text-slate-500">Layanan untuk sekolah, guru, siswa, dan orang tua.</p>
                    </a>
                    <a href="/achievements" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-brand-light/30 hover:shadow-lg hover:shadow-slate-200/50" @click="activeDesktopMenu = null">
                      <p class="font-bold text-slate-900">Achievement</p>
                      <p class="mt-1 text-sm leading-relaxed text-slate-500">Dokumentasi kegiatan dan capaian Next Level Study.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="relative">
            <button
              type="button"
              class="inline-flex items-center gap-2 whitespace-nowrap rounded-full px-3 py-2 transition-colors hover:bg-slate-50 hover:text-brand-light"
              :class="activeDesktopMenu === 'learn' ? 'text-brand-light' : ''"
              @click.stop="activeDesktopMenu = activeDesktopMenu === 'learn' ? null : 'learn'"
            >
              Belajar
              <svg class="h-4 w-4 transition-transform" :class="activeDesktopMenu === 'learn' ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div
              x-show="activeDesktopMenu === 'learn'"
              x-cloak
              class="fixed inset-x-0 top-20 z-50 px-4 sm:px-6 lg:px-8"
            >
              <div class="mx-auto max-w-7xl">
                <div class="w-full max-w-6xl overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white p-5 shadow-[0_28px_80px_rgba(15,23,42,0.18)]" @click.stop>
                  <div class="mb-4 flex items-center justify-between px-1">
                    <div>
                      <p class="text-xs font-semibold uppercase tracking-[0.25em] text-brand-light">Belajar di NLS</p>
                      <p class="mt-1 text-sm text-slate-500">Pilih jalur belajar yang paling sesuai dengan tujuan belajarmu.</p>
                    </div>
                  </div>

                  <div class="grid grid-cols-3 gap-3 lg:grid-cols-5">
                    <a href="/courses" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-brand-light/30 hover:shadow-lg hover:shadow-slate-200/50 lg:col-span-2" @click="activeDesktopMenu = null">
                      <p class="font-bold text-slate-900">Course Online</p>
                      <p class="mt-1 text-sm leading-relaxed text-slate-500">LMS NLS untuk OSN, UTBK, dan TKA.</p>
                    </a>
                    <a href="/tryouts" class="block rounded-[1.25rem] border border-emerald-100 bg-emerald-50 px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-emerald-200 hover:bg-emerald-100/70" @click="activeDesktopMenu = null">
                      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-emerald-600">Tryout</p>
                      <p class="mt-1 font-bold text-slate-900">Simulasi Ujian</p>
                    </a>
                    <a href="/courses?category=OSN" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-indigo-100 hover:bg-indigo-50/80" @click="activeDesktopMenu = null">
                      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-600">OSN</p>
                      <p class="mt-1 font-bold text-slate-900">Course Olimpiade</p>
                    </a>
                    <a href="/courses?category=UTBK" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-amber-100 hover:bg-amber-50/80" @click="activeDesktopMenu = null">
                      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-amber-600">UTBK</p>
                      <p class="mt-1 font-bold text-slate-900">Course SNBT</p>
                    </a>
                    <a href="/courses?category=TKA" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-blue-100 hover:bg-blue-50/80" @click="activeDesktopMenu = null">
                      <p class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">TKA</p>
                      <p class="mt-1 font-bold text-slate-900">Pendalaman Akademik</p>
                    </a>
                    <a href="/programs" class="block rounded-[1.25rem] border border-slate-200 bg-white px-5 py-5 transition-all hover:-translate-y-0.5 hover:border-brand-light/30 hover:shadow-lg hover:shadow-slate-200/50" @click="activeDesktopMenu = null">
                      <p class="font-bold text-slate-900">Program</p>
                      <p class="mt-1 text-sm leading-relaxed text-slate-500">Pendampingan belajar dan pembinaan terarah.</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="/tryouts" class="whitespace-nowrap rounded-full bg-emerald-50 px-4 py-2 font-semibold text-emerald-700 transition-colors hover:bg-emerald-100">
            Tryout
          </a>
          <a href="/articles" class="whitespace-nowrap rounded-full px-3 py-2 transition-colors hover:bg-slate-50 hover:text-brand-light">
            Artikel
          </a>
          <a href="/#kontak" class="whitespace-nowrap rounded-full px-3 py-2 transition-colors hover:bg-slate-50 hover:text-brand-light">
            Kontak
          </a>

          <a
            href="https://wa.me/6285163070002"
            target="_blank"
            rel="noreferrer"
            class="inline-flex items-center justify-center rounded-full bg-brand-light px-4 py-3 text-sm font-semibold text-white shadow-md transition-all hover:bg-brand-blue lg:px-5 lg:text-base"
          >
            Hubungi Kami
          </a>
        </div>

        <div class="flex items-center md:hidden">
          <button
            @click="isMobileMenuOpen = !isMobileMenuOpen"
            class="relative z-[60] p-2 transition-colors focus:outline-none"
            :class="isMobileMenuOpen ? 'text-white hover:text-white/80' : 'text-slate-600 hover:text-brand-blue'"
          >
            <template x-if="!isMobileMenuOpen">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
            </template>
            <template x-if="isMobileMenuOpen">
              <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </template>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <template x-teleport="body">
        <div x-show="isMobileMenuOpen" 
            x-transition:enter="transition-opacity duration-300 ease-in-out"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-300 ease-in-out"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-40 h-full w-full overflow-y-auto bg-[#0caabf] px-6 pb-8 pt-28 md:hidden"
            x-cloak
        >
            <div class="mx-auto flex max-w-sm flex-col space-y-5 text-white">
            <a @click="isMobileMenuOpen = false" href="/#beranda" class="rounded-2xl bg-white/10 px-5 py-4 text-xl font-semibold">
                Beranda
            </a>
            <a @click="isMobileMenuOpen = false" href="/tryouts" class="rounded-2xl bg-white px-5 py-4 text-xl font-semibold text-[#0caabf]">
                Tryout
            </a>

            <div class="rounded-[1.75rem] border border-white/15 bg-white/10 p-5">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white/70">Tentang NLS</p>
                <div class="mt-4 space-y-2 text-lg font-semibold">
                <a @click="isMobileMenuOpen = false" href="/#tentang" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Tentang Kami</a>
                <a @click="isMobileMenuOpen = false" href="/products" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Produk</a>
                <a @click="isMobileMenuOpen = false" href="/achievements" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Achievement</a>
                </div>
            </div>

            <div class="rounded-[1.75rem] border border-white/15 bg-white/10 p-5">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white/70">Belajar</p>
                <div class="mt-4 space-y-2 text-lg font-semibold">
                <a @click="isMobileMenuOpen = false" href="/courses" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Course Online</a>
                <a @click="isMobileMenuOpen = false" href="/tryouts" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Tryout</a>
                <a @click="isMobileMenuOpen = false" href="/courses?category=OSN" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">OSN</a>
                <a @click="isMobileMenuOpen = false" href="/courses?category=UTBK" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">UTBK</a>
                <a @click="isMobileMenuOpen = false" href="/courses?category=TKA" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">TKA</a>
                <a @click="isMobileMenuOpen = false" href="/programs" class="block rounded-xl px-3 py-2 transition-colors hover:bg-white/10">Program</a>
                </div>
            </div>

            <a @click="isMobileMenuOpen = false" href="/articles" class="rounded-2xl bg-white/10 px-5 py-4 text-xl font-semibold">
                Info & Tips
            </a>
            <a @click="isMobileMenuOpen = false" href="/#kontak" class="rounded-2xl bg-white/10 px-5 py-4 text-xl font-semibold">
                Kontak
            </a>

            <a
                @click="isMobileMenuOpen = false"
                href="https://wa.me/6285163070002"
                target="_blank"
                rel="noreferrer"
                class="inline-flex w-full items-center justify-center rounded-full bg-white px-8 py-3.5 text-center font-bold text-[#0caabf] shadow-lg"
            >
                Hubungi Kami via WA
            </a>
            </div>
        </div>
    </template>
</nav>
