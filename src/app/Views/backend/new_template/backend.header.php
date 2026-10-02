<!DOCTYPE html>

<div class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_dashboard" name="shell-type"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
    <style>@layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#262a34",
                        "surface-container": "#1b2029",
                        "error": "#ffb4ab",
                        "primary": "#adc6ff",
                        "on-secondary-container": "#00424e",
                        "secondary-fixed": "#acedff",
                        "inverse-surface": "#dfe2f0",
                        "primary-fixed": "#d8e2ff",
                        "outline": "#8c909f",
                        "on-surface-variant": "#c2c6d6",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#004395",
                        "on-primary-container": "#00285d",
                        "outline-variant": "#424754",
                        "on-tertiary-fixed": "#000767",
                        "on-tertiary-container": "#081486",
                        "error-container": "#93000a",
                        "on-secondary-fixed": "#001f26",
                        "on-error": "#690005",
                        "on-tertiary-fixed-variant": "#2f3aa3",
                        "tertiary-fixed": "#e0e0ff",
                        "on-tertiary": "#131e8c",
                        "on-primary-fixed": "#001a42",
                        "surface-container-highest": "#31353f",
                        "on-surface": "#dfe2f0",
                        "background": "#0f131d",
                        "primary-container": "#4d8eff",
                        "on-secondary": "#003640",
                        "on-background": "#dfe2f0",
                        "primary-fixed-dim": "#adc6ff",
                        "surface-container-lowest": "#0a0e17",
                        "tertiary-container": "#7c87f3",
                        "surface-bright": "#353944",
                        "on-primary": "#002e6a",
                        "surface-container-low": "#171c25",
                        "tertiary-fixed-dim": "#bdc2ff",
                        "surface-dim": "#0f131d",
                        "secondary-container": "#03b5d3",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-secondary-fixed-variant": "#004e5c",
                        "inverse-primary": "#005ac2",
                        "tertiary": "#bdc2ff",
                        "inverse-on-surface": "#2c303b",
                        "surface-variant": "#31353f",
                        "surface-tint": "#adc6ff",
                        "surface": "#0f131d",
                        "secondary": "#4cd7f6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "1.25rem",
                        "space-md": "1rem",
                        "space-sm": "0.5rem",
                        "space-xs": "0.25rem",
                        "space-xl": "2.5rem",
                        "gutter-mobile": "0.75rem",
                        "gutter": "1.25rem",
                        "margin": "3.5rem",
                        "space-lg": "1.5rem"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-sm": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "label-badge": ["Inter"],
                        "label-lg": ["Inter"],
                        "display-hero-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-xl": ["Inter"],
                        "body-md": ["Inter"],
                        "display-hero": ["Inter"]
                    },
                    "fontSize": {
                        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-lg": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "headline-sm": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "headline-xl-mobile": ["26px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "700"
                        }],
                        "label-badge": ["10px", {"lineHeight": "12px", "letterSpacing": "0.05em", "fontWeight": "700"}],
                        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "display-hero-mobile": ["32px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                        "headline-xl": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "display-hero": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "800"
                        }]
                    }
                }
            }
        }</script>
</head>