const fs = require('fs');
const path = require('path');

const projectDir = 'C:\\Users\\gades\\Desktop\\Dev Websites\\clearskin-redesign';

// 1. Read header.php and footer.php
let headerTemplate = fs.readFileSync(path.join(projectDir, 'header.php'), 'utf8');
let footerTemplate = fs.readFileSync(path.join(projectDir, 'footer.php'), 'utf8');

// Function to convert local .php links to .html
function convertLocalPhpLinks(html) {
    // Only convert hrefs/actions that don't start with http:// or https://
    return html.replace(/(href|action)="([^":]+?)\.php(#?.*?)"/gi, (match, attr, page, hash) => {
        if (page.startsWith('http://') || page.startsWith('https://') || page.startsWith('//')) {
            return match;
        }
        return `${attr}="${page}.html${hash}"`;
    });
}

footerTemplate = convertLocalPhpLinks(footerTemplate);

// 2. Get all .php files (excluding header.php and footer.php and process-appointment.php)
const files = fs.readdirSync(projectDir).filter(f => f.endsWith('.php') && f !== 'header.php' && f !== 'footer.php' && f !== 'process-appointment.php');

console.log(`Found ${files.length} PHP files to build as static HTML...`);

files.forEach(file => {
    const pageName = file;
    const htmlFileName = file.replace('.php', '.html');
    let pageContent = fs.readFileSync(path.join(projectDir, file), 'utf8');

    // Remove <?php include 'header.php'; ?> and <?php include 'footer.php'; ?>
    pageContent = pageContent.replace(/<\?php\s*include\s*['"]header\.php['"]\s*;?\s*\?>/gi, '');
    pageContent = pageContent.replace(/<\?php\s*include\s*['"]footer\.php['"]\s*;?\s*\?>/gi, '');
    // Clean any residual opening/closing php blocks
    pageContent = pageContent.replace(/<\?php[\s\S]*?\?>/gi, '');

    // Generate page-specific header HTML by setting active classes
    let customHeader = headerTemplate;

    // Evaluate current_page in header
    const current_page = pageName;
    const isIndex = (current_page === 'index.php');
    const isAbout = (current_page === 'about.php');
    const isSkin = (current_page.includes('skin') || ['pigmentation-treatment.php', 'dermal-fillers-treatment.php', 'anti-aging-treatment.php', 'acne-scar-treatment.php', 'mole-removal-treatment.php'].includes(current_page));
    const isHair = current_page.includes('hair');
    const isClinical = (current_page.includes('clinical') || ['eczema-treatment.php', 'psoriasis-treatment.php', 'vitiligo-treatment.php', 'seborrheic-dermatitis-treatment.php', 'dandruff-treatment.php', 'tinea-infection-treatment.php', 'folliculitis-treatment.php', 'furuncles-treatment.php', 'nail-infection-treatment.php', 'herpes-infection-treatment.php', 'corn-removal-treatment.php'].includes(current_page));
    const isBlog = current_page.includes('blog');
    const isContact = (current_page === 'contact.php');

    customHeader = customHeader.replace(/<\?php \$current_page = basename\(\$_SERVER\['PHP_SELF'\]\); \?>/g, '');

    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(\$current_page == 'index\.php'\) \? 'active' : ''; \?>">/g, `<div class="nav-item ${isIndex ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(\$current_page == 'about\.php'\) \? 'active' : ''; \?>">/g, `<div class="nav-item ${isAbout ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(strpos\(\$current_page, 'skin'\)[\s\S]*?\?>">/g, `<div class="nav-item ${isSkin ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(strpos\(\$current_page, 'hair'\)[\s\S]*?\?>">/g, `<div class="nav-item ${isHair ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(strpos\(\$current_page, 'clinical'\)[\s\S]*?\?>">/g, `<div class="nav-item ${isClinical ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(strpos\(\$current_page, 'blog'\)[\s\S]*?\?>">/g, `<div class="nav-item ${isBlog ? 'active' : ''}">`);
    customHeader = customHeader.replace(/<div class="nav-item <\?php echo \(\$current_page == 'contact\.php'\) \? 'active' : ''; \?>">/g, `<div class="nav-item ${isContact ? 'active' : ''}">`);

    // Replace local .php links in customHeader and pageContent with .html links
    customHeader = convertLocalPhpLinks(customHeader);
    pageContent = convertLocalPhpLinks(pageContent);

    // Assemble complete HTML document
    const fullHtml = customHeader + '\n' + pageContent + '\n' + footerTemplate;

    fs.writeFileSync(path.join(projectDir, htmlFileName), fullHtml, 'utf8');
    console.log(`Generated: ${htmlFileName}`);
});

console.log('All static HTML files successfully compiled with pristine links!');
