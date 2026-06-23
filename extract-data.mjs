import fs from 'fs';
import path from 'path';

// Using dynamic imports since the source files are ES modules
async function extractData() {
    const dataDir = path.resolve('../nls-blog-vue/src/data');
    const outDir = path.resolve('./database/seeders/data');
    
    if (!fs.existsSync(outDir)) {
        fs.mkdirSync(outDir, { recursive: true });
    }

    const files = [
        { name: 'courses.js', exports: ['courses'] },
        { name: 'articles.js', exports: ['articles'] },
        { name: 'products.js', exports: ['products'] },
        { name: 'programs.js', exports: ['programs'] },
        { name: 'tryouts.js', exports: ['tryoutPlatforms'] }
    ];

    for (const file of files) {
        try {
            const module = await import(path.join(dataDir, file.name));
            for (const exportName of file.exports) {
                const data = module[exportName];
                const outPath = path.join(outDir, `${exportName}.json`);
                fs.writeFileSync(outPath, JSON.stringify(data, null, 2));
                console.log(`Exported ${exportName} to ${outPath}`);
            }
        } catch (e) {
            console.error(`Error processing ${file.name}:`, e);
        }
    }
}

extractData();
