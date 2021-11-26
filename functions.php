<?php
function enqueue_theme_fonts(){
    wp_enqueue_style(
        "typekitfont",
        "https://use.typekit.net/rwa7hfg.css",
        array(),
        "1.0.0"
    );
    wp_enqueue_style(
        "theme-styles",
        get_stylesheet_uri(),
        array("typekitfont"),
        time()
    );
}
add_action("init", "enqueue_theme_fonts");

function add_custom_theme_supports(){
    add_theme_support("editor-styles");
}

add_action("after_theme_setup", "add_custom_theme_supports");

function load_editor_styles() {
    add_editor_style(
        array(
            "https://use.typekit.net/rwa7hfg.css",
            "style.css"
        )
    );
}
add_action("admin_init", "load_editor_styles");