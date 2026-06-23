import fs from 'fs';
import path from 'path';

const srcDir = path.resolve('../nls-blog-vue/src/components');
const destDir = path.resolve('./resources/views/components');

if (!fs.existsSync(destDir)) {
    fs.mkdirSync(destDir, { recursive: true });
}

const files = fs.readdirSync(srcDir).filter(f => f.endsWith('.vue'));

function toKebabCase(str) {
    return str.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
}

for (const file of files) {
    // Skip Navbar, Footer, and HeroSection since I already created them
    if (file === 'Navbar.vue' || file === 'Footer.vue' || file === 'HeroSection.vue' || file === 'HelloWorld.vue') {
        continue;
    }

    const content = fs.readFileSync(path.join(srcDir, file), 'utf-8');
    
    // Extract template content
    const templateMatch = content.match(/<template>([\s\S]*?)<\/template>/);
    if (templateMatch) {
        let templateContent = templateMatch[1].trim();
        
        // Basic replacements for Vue specific syntax
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="[^"]*path:\s*'([^']+)'[^>]*>/g, '<a href="$1"');
        templateContent = templateContent.replace(/<RouterLink[^>]*:to="\{\s*name:\s*'([^']+)'\s*\}"[^>]*>/g, '<a href="/$1"');
        templateContent = templateContent.replace(/<\/RouterLink>/g, '</a>');
        
        // Save to blade file
        const basename = path.basename(file, '.vue');
        const bladeName = toKebabCase(basename) + '.blade.php';
        
        fs.writeFileSync(path.join(destDir, bladeName), templateContent);
        console.log(`Converted ${file} to ${bladeName}`);
    }
}
