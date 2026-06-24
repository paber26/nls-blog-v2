import fs from 'fs';

const configStr = `{
    darkMode: "class",
    theme: {
        extend: {
            "colors": {
                "on-secondary-fixed": "#2a1700",
                "on-background": "#131b2e",
                "surface-container-low": "#f2f3ff",
                "on-tertiary": "#ffffff",
                "secondary-fixed-dim": "#fdb965",
                "tertiary-fixed": "#a3f3c9",
                "nls-blue-light": "#EFF6FF",
                "on-primary-container": "#b8c8ff",
                "on-tertiary-container": "#8ad9b1",
                "on-primary-fixed": "#00174b",
                "on-secondary-container": "#754900",
                "outline": "#737685",
                "inverse-primary": "#b4c5ff",
                "on-secondary-fixed-variant": "#653e00",
                "surface-variant": "#dae2fc",
                "surface-container-lowest": "#ffffff",
                "surface-container-high": "#e1e7ff",
                "tertiary-fixed-dim": "#87d7ae",
                "secondary": "#855300",
                "primary-fixed": "#dbe1ff",
                "surface-container": "#eaedff",
                "badge-best": "#EC4899",
                "background": "#faf8ff",
                "surface": "#faf8ff",
                "on-error": "#ffffff",
                "outline-variant": "#c3c6d6",
                "primary-container": "#004ac6",
                "primary-fixed-dim": "#b4c5ff",
                "surface-bright": "#faf8ff",
                "tertiary-container": "#006141",
                "tertiary": "#00472f",
                "on-surface-variant": "#434654",
                "error-container": "#ffdad6",
                "on-surface": "#131b2e",
                "glass-bg": "rgba(255, 255, 255, 0.7)",
                "secondary-container": "#fdb965",
                "secondary-fixed": "#ffddb8",
                "on-tertiary-fixed": "#002113",
                "surface-dim": "#d2d9f4",
                "surface-tint": "#1b55d0",
                "inverse-surface": "#283044",
                "inverse-on-surface": "#eef0ff",
                "on-error-container": "#93000a",
                "on-primary-fixed-variant": "#003ea8",
                "on-primary": "#ffffff",
                "on-tertiary-fixed-variant": "#005236",
                "nls-blue-deep": "#1E40AF",
                "on-secondary": "#ffffff",
                "badge-populer": "#F59E0B",
                "error": "#ba1a1a",
                "surface-container-highest": "#dae2fc",
                "surface-gray": "#F8FAFC",
                "primary": "#003594"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            "spacing": {
                "gutter": "24px",
                "section-gap-lg": "120px",
                "container-max": "1280px",
                "card-padding": "32px",
                "section-gap-sm": "64px",
                "base": "8px"
            },
            "fontFamily": {
                "display-lg": ["Plus Jakarta Sans"],
                "button": ["Plus Jakarta Sans"],
                "headline-lg": ["Plus Jakarta Sans"],
                "body-md": ["Plus Jakarta Sans"],
                "label-caps": ["Plus Jakarta Sans"],
                "headline-md": ["Plus Jakarta Sans"],
                "display-lg-mobile": ["Plus Jakarta Sans"],
                "body-lg": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                "display-lg": ["48px", { "lineHeight": "60px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                "button": ["16px", { "lineHeight": "20px", "fontWeight": "600" }],
                "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "700" }],
                "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
            }
        }
    }
}`;
const config = new Function('return ' + configStr)();

let cssContent = `@import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
@import "tailwindcss";

@theme {
`;

// Extract colors
const colors = config.theme.extend.colors;
for (const [key, value] of Object.entries(colors)) {
    cssContent += `  --color-${key}: ${value};\n`;
}

// Map the old brand colors to the new colors so we don't break everything instantly
cssContent += `
  /* Legacy mappings */
  --color-brand-blue: var(--color-primary);
  --color-brand-light: var(--color-primary-container);
  --color-brand-accent: var(--color-secondary-container);
  --color-brand-surface: var(--color-surface);
`;

// Font families
const fontFamilies = config.theme.extend.fontFamily;
for (const [key, value] of Object.entries(fontFamilies)) {
    cssContent += `  --font-${key}: ${value.map(f => `"${f}"`).join(', ')};\n`;
}
cssContent += `  --font-sans: "Plus Jakarta Sans", "sans-serif";\n`;

// Spacing
const spacing = config.theme.extend.spacing;
for (const [key, value] of Object.entries(spacing)) {
    cssContent += `  --spacing-${key}: ${value};\n`;
}

cssContent += `}

@layer base {
  body {
    @apply font-sans antialiased text-on-background bg-background;
    scroll-behavior: smooth;
  }

  h1, h2, h3, h4, h5, h6 {
    @apply font-display-lg text-primary;
  }
}

@layer utilities {
  .text-gradient {
    @apply text-transparent bg-clip-text bg-gradient-to-r from-primary-container to-primary;
  }
  
  .glass-card {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.3);
  }

  .bento-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 24px;
  }

  .reveal-on-scroll {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
  }

  .reveal-on-scroll.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .hover-lift:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  }
}
`;

fs.writeFileSync('resources/css/app.css', cssContent);
console.log('Successfully updated resources/css/app.css');
