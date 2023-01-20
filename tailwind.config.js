/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            sm: '480px',
            md: '779px',
            lg: '976px',
            xl: '1440px'
        },
        extend: {

        },
    },
    plugins: [],
}