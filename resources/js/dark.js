// Define an object called HSThemeAppearance
const HSThemeAppearance = {
    // Initialization method
    init() {
        // Set the default theme to 'default'
        const defaultTheme = 'default';
        // Retrieve the theme from localStorage or use the default theme if not found
        let theme = localStorage.getItem('hs_theme') || defaultTheme;

        // If the 'dark' class is present on the HTML element, return early
        if (document.querySelector('html').classList.contains('dark')) return;
        // Call the setAppearance method to apply the theme
        this.setAppearance(theme);
    },

    // Method to reset styles on page load
    _resetStylesOnLoad() {
        const $resetStyles = document.createElement('style');
        $resetStyles.innerText = `*{transition: unset !important;}`;
        $resetStyles.setAttribute('data-hs-appearance-onload-styles', '');
        document.head.appendChild($resetStyles);
        return $resetStyles;
    },

    // Method to set the appearance/theme
    setAppearance(theme, saveInStore = true, dispatchEvent = true) {
        // Create a style element to reset styles on page load
        const $resetStylesEl = this._resetStylesOnLoad();

        // Save the theme in localStorage if saveInStore is true
        if (saveInStore) {
            localStorage.setItem('hs_theme', theme);
        }

        // If the theme is 'auto', determine the theme based on user's system preference
        if (theme === 'auto') {
            theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default';
        }

        // Remove existing classes and add the original appearance class
        document.querySelector('html').classList.remove('dark', 'default', 'auto');
        document.querySelector('html').classList.add(this.getOriginalAppearance());

        // Remove the reset styles after a short delay
        setTimeout(() => {
            $resetStylesEl.remove();
        });

        // Dispatch a custom event to notify of appearance change
        if (dispatchEvent) {
            window.dispatchEvent(new CustomEvent('on-hs-appearance-change', { detail: theme }));
        }
    },

    // Method to get the current appearance/theme
    getAppearance() {
        let theme = this.getOriginalAppearance();
        // If the theme is 'auto', determine the theme based on user's system preference
        if (theme === 'auto') {
            theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default';
        }
        return theme;
    },

    // Method to get the original appearance/theme from localStorage
    getOriginalAppearance() {
        const defaultTheme = 'default';
        return localStorage.getItem('hs_theme') || defaultTheme;
    }
};

// Initialize the HSThemeAppearance object
HSThemeAppearance.init();

// Listen for changes in system color scheme and update appearance accordingly
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    if (HSThemeAppearance.getOriginalAppearance() === 'auto') {
        HSThemeAppearance.setAppearance('auto', false);
    }
});

// Perform actions on page load
window.addEventListener('load', () => {
    // Select clickable and switchable elements for theme changes
    const $clickableThemes = document.querySelectorAll('[data-hs-theme-click-value]');
    const $switchableThemes = document.querySelectorAll('[data-hs-theme-switch]');

    // Attach click event listeners for clickable themes
    $clickableThemes.forEach($item => {
        $item.addEventListener('click', () => HSThemeAppearance.setAppearance($item.getAttribute('data-hs-theme-click-value'), true, $item));
    });

    // Attach change event listeners for switchable themes
    $switchableThemes.forEach($item => {
        $item.addEventListener('change', (e) => {
            HSThemeAppearance.setAppearance(e.target.checked ? 'dark' : 'default');
        });

        // Set the initial state based on the current appearance
        $item.checked = HSThemeAppearance.getAppearance() === 'dark';
    });

    // Update switchable themes when appearance changes
    window.addEventListener('on-hs-appearance-change', e => {
        $switchableThemes.forEach($item => {
            $item.checked = e.detail === 'dark';
        });
    });
});
