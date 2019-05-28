# Ardent Ani Wordpress Backend

## Objective:

Using the Air BnB Lottie Library and web player as a foundation, 
create a straight forward process and tools to build and control both static and interactive animations for wordpress sites.

## Install:

Clone or download the repo into a new directory inside an AC Child theme.

Edit init.php and set ```ani_base``` to the name of the new directory.
This by default is set to '/animations'.

## Usage:

### Structure:

*  config (js inside of php)
    - ani_js (javascript after lottie is loaded but before it's used)
*   css
    - utils (z-index and other helper classes for animation div layers)
    - base (width:1601px +)
    - laptop (width: 1001px - 1600px)
    - tablet (width:601px - 1000px)
    - mobile (width:600px and below)
    - overrides
*   js
    - lottie_animations (the declaration of the lottie animations to be used)
    - animation_controllers (the timing and handler functions for the animations)
    - inputs (binding of controllers to DOM input elements)
    - events (binding of controllers to Browser Events)
*   json (directory to contain all lottie After Effects exports)
*   lib
    - ani_enqueue (loads css and js resources including lottie)
    - helpers (template helper functions, so far there is ac-child shortcode helpers)
    - loader (```this``` library's resource loader)
    - ani_js_api (front end data helpers, get meta fields and other dynamic data with js)
    - ani_js_api_functions (function declarations for the api)
    - Meta (registers shortcode param fields as post meta prefixed with 'ani_')
*   template (For front end templates, currently supports ac-child shortcode $args)
*   styles.php (for dynamic styles using php for variables etc.. useful for dynamic resource location.)

### Shortcode example: [TRWD AC Child](https://gitlab.it.ardentcreative.com/incubating/tommy/ac-child-lottie-animations-integration/backend/wikis/TRWD-Example-Shortcode)