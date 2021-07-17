module.exports = {
    mode: "jit",
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", "sans-serif"],
            },
        },
    },
    variants: {},
    plugins: [require("@tailwindcss/ui"), require("@tailwindcss/line-clamp")],
};
