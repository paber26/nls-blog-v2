import fs from 'fs';
import path from 'path';

function getAllFiles(dirPath, arrayOfFiles) {
    const files = fs.readdirSync(dirPath);

    arrayOfFiles = arrayOfFiles || [];

    files.forEach(function (file) {
        if (fs.statSync(dirPath + "/" + file).isDirectory()) {
            arrayOfFiles = getAllFiles(dirPath + "/" + file, arrayOfFiles);
        } else {
            if (file.endsWith('.blade.php')) {
                arrayOfFiles.push(path.join(dirPath, "/", file));
            }
        }
    });

    return arrayOfFiles;
}

const files = getAllFiles('resources/views');

const mappings = {
    // Brand colors
    'brand-blue': 'primary',
    'brand-light': 'primary-container',
    'brand-accent': 'secondary-container',
    'brand-surface': 'surface',
    
    // Slates (common tailwind gray) -> new theme colors
    'text-slate-800': 'text-on-background',
    'text-slate-700': 'text-on-surface',
    'text-slate-600': 'text-on-surface-variant',
    'text-slate-500': 'text-on-surface-variant',
    'text-slate-400': 'text-outline',
    
    'bg-slate-50': 'bg-surface-container-low',
    'bg-slate-100': 'bg-surface-container',
    'bg-slate-200': 'bg-surface-container-high',
    
    'border-slate-100': 'border-outline-variant',
    'border-slate-200': 'border-outline-variant',
    'border-slate-300': 'border-outline',
    
    'shadow-sm': 'shadow-sm',
    'shadow-md': 'shadow-md',
};

let replacedCount = 0;

for (const file of files) {
    let content = fs.readFileSync(file, 'utf8');
    let original = content;

    for (const [oldClass, newClass] of Object.entries(mappings)) {
        // We use a regex with word boundaries or class boundaries
        // To handle e.g. text-brand-blue, bg-brand-light/10
        // It's safer to just replace exact string occurrences because class names are bounded by spaces or quotes
        // E.g. 'bg-brand-surface' -> 'bg-surface'
        const regex = new RegExp(`(?<=[\"'\\s])${oldClass}(?=[\\s\"'/])`, 'g');
        content = content.replace(regex, newClass);
    }
    
    if (content !== original) {
        fs.writeFileSync(file, content);
        replacedCount++;
    }
}

console.log(`Replaced classes in ${replacedCount} files.`);
