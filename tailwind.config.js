/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./*.{html,js,php}",
        "./src/views//*.{html,js,php}",
        "./php/*.{html,js,php}",
    ],
    theme: {
        extend: {
            fontFamily: {
                'ubuntu-sans': ['Ubuntu Sans', 'sans-serif'],
            },
        },
    },
    plugins: [],
}

