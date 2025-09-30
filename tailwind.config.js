/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.css",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Instrument Sans", "ui-sans-serif", "system-ui"],
            },
        },
    },
    plugins: [],
};
