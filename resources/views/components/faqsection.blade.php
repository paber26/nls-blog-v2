<section class="relative bg-brand-blue pt-20 pb-40 overflow-hidden">
    <!-- Decorative SVG Wave at the Bottom to blend with Footer bg-slate-900 -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-0">
      <svg class="relative block w-full h-[100px] md:h-[180px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V120H0Z" fill="#0f172a" opacity="0.25"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V120H0Z" fill="#0f172a" opacity="0.5"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V120H0Z" fill="#0f172a"></path>
      </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
        
        <!-- Image Container -->
        <div class="bg-white p-3 rounded-xl shadow-2xl shadow-black/30 transform -rotate-2 hidden lg:block">
          <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Komunitas NLS" class="w-full h-auto rounded-lg object-cover" />
        </div>

        <!-- FAQ Accordion -->
        <div class="text-white space-y-8 pl-0 lg:pl-10">
          
          <div class="space-y-4">
            <div v-for="(faq, index) in faqs" :key="index" class="border-b border-white/20 pb-4">
              <button 
                @click="toggleFaq(index)"
                class="w-full flex justify-between items-start text-left focus:outline-none group gap-4 mt-2"
              >
                <div class="flex items-start gap-4 mr-4 mt-1">
                  <svg class="w-4 h-4 transition-transform duration-300 flex-shrink-0 mt-1" :class="{'rotate-90': faq.isOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                </div>
                <span class="text-[1.1rem] font-semibold flex-1 font-heading border-none outline-none">
                  {{ faq.question }}
                </span>
              </button>
              
              <transition
                enter-active-class="transition-all duration-300 ease-out"
                enter-from-class="opacity-0 max-h-0"
                enter-to-class="opacity-100 max-h-[500px]"
                leave-active-class="transition-all duration-300 ease-in"
                leave-from-class="opacity-100 max-h-[500px]"
                leave-to-class="opacity-0 max-h-0"
              >
                <div 
                  v-show="faq.isOpen" 
                  class="pl-12 pt-4 text-brand-surface/90 leading-relaxed text-[0.95rem] whitespace-pre-line overflow-hidden"
                >
                  {{ faq.answer }}
                </div>
              </transition>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>