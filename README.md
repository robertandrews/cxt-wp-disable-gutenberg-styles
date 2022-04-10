# Context WP Disable Gutenberg Styles

Tested up to: 5.9.1  
Tags: wordpress, gutenberg  
Contributors: robertandrews  

## Description

Tries to throw the kitchen sink at disabling unwanted WordPress Gutenberg / Full Site Editor (FSE) cruft - particularly, CSS.

It is becoming clear that opting out of Gutenberg requires more than just use of [Classic Editor](https://wordpress.org/plugins/classic-editor/) plugin.

Even when using Classic Editor, WordPress continues to serve Gutenberg/FSE-related styles to public sites. This carries unecessary overhead. This plugin aims to block them.

## Info

This plugin aims to:

### 1. Remove [global styles](https://github.com/WordPress/gutenberg/issues/36834)

For example:

```CSS
<style id='global-styles-inline-css'> 
body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
</style>
```

### 2. Remove [duotone support](https://github.com/WordPress/gutenberg/issues/38299) for Gutenberg blocks

Large volume of SVGs inserted by WordPress...

```HTML
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"
```

### 3. Remove Gutenberg [block library CSS](https://smartwp.com/remove-gutenberg-css/)

File block-library/style.min.css.

### 4. Disable Layout feature

Remove `wp-container-*` classes

### 4. Disable Layout feature, if Gutenberg active

Remove `wp-container-*` classes

## Installation

Add the plugin via *Plugins > Add New > Add Plugins > Upload Plugin*.
