import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue2";

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.js",
            refresh: true
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false
                }
            }
        })
    ]
    /*IF USING Windows with WSL*/
    // server: {
    //   host: "0.0.0.0", //'localhost'
    //   https: true,
    //   hmr: {
    //     host: "localhost",
    //   },
    //   watch: {
    //     usePolling: true,
    // },
    // },
});
