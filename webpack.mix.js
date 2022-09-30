let mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/app.js")
    .postCss("resources/css/app.css", "public/css/app.css", [
        require("tailwindcss"),
    ])
    .autoload({
        jquery: ["$", "window.jQuery", "jQuery"],
    })
    .copyDirectory(
        "node_modules/slick-carousel/slick/ajax-loader.gif",
    )
    .copyDirectory(
        "node_modules/summernote/dist/font/summernote.woff",
    )
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")],
    });
