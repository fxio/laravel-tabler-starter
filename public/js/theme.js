let selectedTheme = localStorage.getItem('theme') || 'light';
document.body.classList.remove('theme-dark', 'theme-light');
document.body.classList.add(`theme-${selectedTheme}`);

document.addEventListener('DOMContentLoaded', () => {
    const themeLinks = document.querySelectorAll('[data-theme-value]');

    themeLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const theme = e.currentTarget.getAttribute('data-theme-value');
            localStorage.setItem('theme', theme);

            if (theme === 'auto') {
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.body.classList.add('theme-dark');
                    document.body.classList.remove('theme-light');
                } else {
                    document.body.classList.add('theme-light');
                    document.body.classList.remove('theme-dark');
                }
            } else {
                document.body.classList.remove('theme-dark', 'theme-light');
                document.body.classList.add(`theme-${theme}`);
            }
        });
    });
});
