import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                primary: "0 3px 10px rgba(0,0,0,0.1)",
            },
        },
    },

    plugins: [
        forms,
        function ({ addComponents }) {
            addComponents({
                ".transition-5s": {
                    transitionProperty: "all",
                    transitionDuration: "500ms",
                    transitionTimingFunction: "ease-in-out",
                },
                ".transition-3s": {
                    transitionProperty: "all",
                    transitionDuration: "300ms",
                    transitionTimingFunction: "ease-in-out",
                },
            });
        },
    ],
};
