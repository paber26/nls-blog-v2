import fs from 'fs';
import path from 'path';

const srcDir = path.resolve('../nls-blog-vue/src/views');
const destDir = path.resolve('./resources/views/pages');

if (!fs.existsSync(destDir)) {
    fs.mkdirSync(destDir, { recursive: true });
}

const files = fs.readdirSync(srcDir).filter(f => f.endsWith('.vue'));

function toKebabCase(str) {
    return str.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
}

for (const file of files) {
    if (file === 'HomeView.vue') continue;

    const content = fs.readFileSync(path.join(srcDir, file), 'utf-8');
    
    const templateMatch = content.match(/<template>([\s\S]*?)<\/template>/);
    if (templateMatch) {
        let templateContent = templateMatch[1].trim();
        
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="[^"]*path:\s*'([^']+)'[^>]*>/g, '<a href="$1"');
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="\{\s*name:\s*'([^']+)'\s*\}"[^>]*>/g, '<a href="/$1"');
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="\{\s*name:\s*'([^']+)',\s*params:\s*\{\s*slug:\s*([^\}]+)\s*\}\s*\}"[^>]*>/g, '<a href="/$1/{{ $2 }}"');
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="\{\s*name:\s*'([^']+)',\s*params:\s*\{\s*id:\s*([^\}]+)\s*\}\s*\}"[^>]*>/g, '<a href="/$1/{{ $2 }}"');
        templateContent = templateContent.replace(/<\/RouterLink>/g, '</a>');
        
        let basename = file.replace('View.vue', '');
        let dirName = '';
        let fileName = '';

        if (basename.endsWith('List')) {
            dirName = basename.replace('List', '').toLowerCase() + 's';
            if (dirName === 'tryouts') dirName = 'tryouts'; // simple plural
            if (dirName === 'achievements') dirName = 'achievements';
            if (dirName === 'articles') dirName = 'articles'; // 'ArticleList' -> articles
            fileName = 'index.blade.php';
        } else if (basename.endsWith('Detail')) {
            dirName = basename.replace('Detail', '').toLowerCase() + 's';
            if (dirName === 'articles') dirName = 'articles';
            fileName = 'show.blade.php';
        } else {
            dirName = '';
            fileName = toKebabCase(basename) + '.blade.php';
        }

        const outDir = dirName ? path.join(destDir, dirName) : destDir;
        if (!fs.existsSync(outDir)) {
            fs.mkdirSync(outDir, { recursive: true });
        }

        let finalContent = `<x-layouts.app>\n${templateContent}\n</x-layouts.app>`;

        fs.writeFileSync(path.join(outDir, fileName), finalContent);
        console.log(`Converted ${file} to ${path.join(dirName, fileName)}`);
    }
}
