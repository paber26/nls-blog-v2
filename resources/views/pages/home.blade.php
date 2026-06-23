<x-layouts.app>
    <main>
        <x-hero-section />
        <x-about-section />
        <x-products-section :products="$products" />
        <x-achievement-gallery-section />
        <x-online-learning-section :courses="$courses" />
        <x-tryout-section :tryouts="$tryouts" />
        <x-programs-section :programs="$programs" />
        <x-news-section :articles="$articles" />
        <x-faqsection />
    </main>
</x-layouts.app>
