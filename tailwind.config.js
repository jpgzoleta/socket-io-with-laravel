/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: "#333",
                primary: {
                    100: "#FCE1D3",
                    200: "#F9BEA9",
                    300: "#ED8F7B",
                    400: "#DC6458",
                    500: "#C62828",
                    600: "#AA1D29",
                    700: "#8E1429",
                    800: "#720C27",
                    900: "#5F0725",
                },
                success: {
                    100: "#E7FAD3",
                    200: "#CAF5AA",
                    300: "#9FE17A",
                    400: "#74C453",
                    500: "#3F9E25",
                    600: "#2A871B",
                    700: "#197112",
                    800: "#0B5B0C",
                    900: "#074B0C",
                },
                info: {
                    100: "#C9FBF7",
                    200: "#94F7F7",
                    300: "#5DDEE8",
                    400: "#34BBD2",
                    500: "#008DB5",
                    600: "#006D9B",
                    700: "#005282",
                    800: "#003A68",
                    900: "#002A56",
                },
                warning: {
                    100: "#FEF5CB",
                    200: "#FDEA98",
                    300: "#FBD964",
                    400: "#F8C93E",
                    500: "#F4AF00",
                    600: "#D19000",
                    700: "#AF7300",
                    800: "#8D5900",
                    900: "#754600",
                },
                danger: {
                    100: "#FBE3D3",
                    200: "#F8C2A8",
                    300: "#EC957A",
                    400: "#D96A56",
                    500: "#C13126",
                    600: "#A51B1D",
                    700: "#8A131E",
                    800: "#6F0C1D",
                    900: "#5C071D",
                },
            },
        },
    },
    plugins: [],
};
