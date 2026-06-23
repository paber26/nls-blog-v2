import fs from 'fs';
import path from 'path';

function fixFile(filePath) {
    if (!fs.existsSync(filePath)) return;
    let content = fs.readFileSync(filePath, 'utf-8');

    // Replace basic {{ variable }} with {{ $variable }} if it's a simple word or dot notation
    content = content.replace(/\{\{\s*([a-zA-Z_][a-zA-Z0-9_\.]*)\s*\}\}/g, (match, p1) => {
        let parts = p1.split('.');
        if (parts.length > 1) {
            let base = parts.shift();
            let rest = parts.map(p => `->${p}`).join('');
            return `{{ $${base}${rest} }}`;
        }
        // If it's a function call or array access, we skip for safety or handle later
        return `{{ $${p1} }}`;
    });

    // Replace v-if
    content = content.replace(/v-if="([^"]+)"/g, (match, p1) => {
        let cond = p1.replace(/([a-zA-Z_][a-zA-Z0-9_]*)\./g, '$$$1->');
        return `@if(${cond})`;
    });
    // Replace v-else-if
    content = content.replace(/v-else-if="([^"]+)"/g, (match, p1) => {
        let cond = p1.replace(/([a-zA-Z_][a-zA-Z0-9_]*)\./g, '$$$1->');
        return `@elseif(${cond})`;
    });
    // Replace v-else
    content = content.replace(/v-else/g, '@else');

    // Remove :class="...", :key="..."
    content = content.replace(/\s*:key="[^"]+"/g, '');
    
    // Fix src and href
    content = content.replace(/:src="([^"]+)"/g, (match, p1) => {
        let cond = p1.replace(/([a-zA-Z_][a-zA-Z0-9_]*)\./g, '$$$1->');
        return `src="{{ ${cond} }}"`;
    });
    content = content.replace(/:href="([^"]+)"/g, (match, p1) => {
        let cond = p1.replace(/([a-zA-Z_][a-zA-Z0-9_]*)\./g, '$$$1->');
        return `href="{{ ${cond} }}"`;
    });

    fs.writeFileSync(filePath, content);
}

const pagesDir = path.resolve('./resources/views/pages');

function walkDir(dir) {
    const files = fs.readdirSync(dir);
    for (const file of files) {
        const filePath = path.join(dir, file);
        const stat = fs.statSync(filePath);
        if (stat.isDirectory()) {
            walkDir(filePath);
        } else if (file.endsWith('.blade.php')) {
            fixFile(filePath);
        }
    }
}

walkDir(pagesDir);
console.log("Basic Blade fixes applied.");
