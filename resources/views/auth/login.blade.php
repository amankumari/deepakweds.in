<html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CRM</title>
<script src="js/prefixfree.min.js"></script>
<style>
    /*! normalize.css v2.1.2 | MIT License | git.io/normalize */

/* ==========================================================================
   HTML5 display definitions
   ========================================================================== */

/**
 * Correct `block` display not defined in IE 8/9.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
    display: block;
}

/**
 * Correct `inline-block` display not defined in IE 8/9.
 */

audio,
canvas,
video {
    display: inline-block;
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
    display: none;
    height: 0;
}

/**
 * Address styling not present in IE 8/9.
 */

[hidden] {
    display: none;
}

/* ==========================================================================
   Base
   ========================================================================== */

/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
    font-family: sans-serif; /* 1 */
    -ms-text-size-adjust: 100%; /* 2 */
    -webkit-text-size-adjust: 100%; /* 2 */
}

/**
 * Remove default margin.
 */

body {
    margin: 0;
}

/* ==========================================================================
   Links
   ========================================================================== */

/**
 * Address `outline` inconsistency between Chrome and other browsers.
 */

a:focus {
    outline: thin dotted;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
    outline: 0;
}

/* ==========================================================================
   Typography
   ========================================================================== */

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari 5, and Chrome.
 */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9, Safari 5, and Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
 */

b,
strong {
    font-weight: bold;
}

/**
 * Address styling not present in Safari 5 and Chrome.
 */

dfn {
    font-style: italic;
}

/**
 * Address differences between Firefox and other browsers.
 */

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
}

/**
 * Address styling not present in IE 8/9.
 */

mark {
    background: #ff0;
    color: #000;
}

/**
 * Correct font family set oddly in Safari 5 and Chrome.
 */

code,
kbd,
pre,
samp {
    font-family: monospace, serif;
    font-size: 1em;
}

/**
 * Improve readability of pre-formatted text in all browsers.
 */

pre {
    white-space: pre-wrap;
}

/**
 * Set consistent quote types.
 */

q {
    quotes: "\201C" "\201D" "\2018" "\2019";
}

/**
 * Address inconsistent and variable font size in all browsers.
 */

small {
    font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* ==========================================================================
   Embedded content
   ========================================================================== */

/**
 * Remove border when inside `a` element in IE 8/9.
 */

img {
    border: 0;
}

/**
 * Correct overflow displayed oddly in IE 9.
 */

svg:not(:root) {
    overflow: hidden;
}

/* ==========================================================================
   Figures
   ========================================================================== */

/**
 * Address margin not present in IE 8/9 and Safari 5.
 */

figure {
    margin: 0;
}

/* ==========================================================================
   Forms
   ========================================================================== */

/**
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct `color` not being inherited in IE 8/9.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
    border: 0; /* 1 */
    padding: 0; /* 2 */
}

/**
 * 1. Correct font family not being inherited in all browsers.
 * 2. Correct font size not being inherited in all browsers.
 * 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
 */

button,
input,
select,
textarea {
    font-family: inherit; /* 1 */
    font-size: 100%; /* 2 */
    margin: 0; /* 3 */
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

button,
input {
    line-height: normal;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Chrome, Safari 5+, and IE 8+.
 * Correct `select` style inheritance in Firefox 4+ and Opera.
 */

button,
select {
    text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button; /* 2 */
    cursor: pointer; /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
    cursor: default;
}

/**
 * 1. Address box sizing set to `content-box` in IE 8/9.
 * 2. Remove excess padding in IE 8/9.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
 *    (include `-moz` to future-proof).
 */

input[type="search"] {
    -webkit-appearance: textfield; /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box; /* 2 */
    box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari 5 and Chrome
 * on OS X.
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/**
 * 1. Remove default vertical scrollbar in IE 8/9.
 * 2. Improve readability and alignment in all browsers.
 */

textarea {
    overflow: auto; /* 1 */
    vertical-align: top; /* 2 */
}

/* ==========================================================================
   Tables
   ========================================================================== */

/**
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}
</style>

    <style>
@import "https://fonts.googleapis.com/css?family=Ubuntu:400,700italic";
@import "https://fonts.googleapis.com/css?family=Cabin:400";
* {
  box-sizing: border-box;
}

html {
  background: #000;
  background-size: cover;
  font-size: 10px;
  height: 100%;
  overflow: hidden;
  position: absolute;
  text-align: center;
  width: 100%;
}

/* =========================================
Stark Industries Logo
========================================= */
#logo {
  animation: logo-entry 4s ease-in;
  width: 500px;
  margin: 0 auto;
  position: relative;
  z-index: 40;
}

h1 {
  animation: text-glow 2s ease-out infinite alternate;
  font-family: 'Ubuntu', sans-serif;
  color: #74ebe6;
  font-size: 48px;
  font-size: 4.8rem;
  font-weight: bold;
  position: absolute;
  text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #000, 0 0 40px #000, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000;
  top: 50px;
}
h1:before {
  animation: before-glow 2s ease-out infinite alternate;
  border-left: 535px solid transparent;
  border-bottom: 10px solid #74ebe6;
  content: ' ';
  height: 0;
  position: absolute;
  right: -74px;
  top: -10px;
  width: 0;
}
h1:after {
  animation: after-glow 2s ease-out infinite alternate;
  border-left: 100px solid transparent;
  border-top: 16px solid #74ebe6;
  content: ' ';
  height: 0;
  position: absolute;
  right: -85px;
  top: 24px;
  transform: rotate(-47deg);
  width: 0;
}

/* =========================================
Log in form
========================================= */
#fade-box {
  animation: input-entry 3s ease-in;
  z-index: 4;
}

.stark-login form {
  animation: form-entry 3s ease-in-out;
  background: #111;
  background: linear-gradient(#74ebe6, #74ebe6);
  border: 6px solid #74ebe6;
  box-shadow: 0 0 15px #74ebe6;
  border-radius: 5px;
  display: inline-block;
  height: 220px;
  margin: 270px auto 0;
  position: relative;
  z-index: 4;
  width: 500px;
  transition: 1s all;
}
.stark-login form:hover {
  border: 6px solid #74ebe6;
  box-shadow: 0 0 25px #74ebe6;
  transition: 1s all;
}
.stark-login input {
  background: #222;
  background: linear-gradient(#333333, #222222);
  border: 1px solid #444;
  border-radius: 5px;
  box-shadow: 0 2px 0 #000;
  color: #888;
  display: block;
  font-family: 'Cabin', helvetica, arial, sans-serif;
  font-size: 13px;
  font-size: 1.3rem;
  height: 40px;
  margin: 20px auto 10px;
  padding: 0 10px;
  text-shadow: 0 -1px 0 #000;
  width: 400px;
}
.stark-login input:focus {
  animation: box-glow 1s ease-out infinite alternate;
  background: #0B4252;
  background: linear-gradient(#333933, #222922);
  border-color: #00fffc;
  box-shadow: 0 0 5px rgba(0, 255, 253, 0.2), inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 black;
  color: #efe;
  outline: none;
}
.stark-login input:invalid {
  border: 2px solid  #00fffc;
  box-shadow: 0 0 5px rgba(255, 0, 0, 0.2), inset 0 0 5px rgba(255, 0, 0, 0.1), 0 2px 0 black;
}
.stark-login button {
  animation: input-entry 3s ease-in;
  background: #222;
  background: linear-gradient(#333333, #222222);
  box-sizing: content-box;
  border: 1px solid #444;
  border-left-color: #000;
  border-radius: 5px;
  box-shadow: 0 2px 0 #000;
  color: #fff;
  display: block;
  font-family: 'Cabin', helvetica, arial, sans-serif;
  font-size: 13px;
  font-weight: 400;
  height: 40px;
  line-height: 40px;
  margin: 20px auto;
  padding: 0;
  position: relative;
  text-shadow: 0 -1px 0 #000;
  width: 400px;
  transition: 1s all;
}
.stark-login button:hover,
.stark-login button:focus {
  background: #0C6125;
  background: linear-gradient(#393939, #292929);
  color: #00fffc;
  outline: none;
  transition: 1s all;
}
.stark-login button:active {
  background: #292929;
  background: linear-gradient(#393939, #292929);
  box-shadow: 0 1px 0 #000, inset 1px 0 1px #222;
  top: 1px;
}

/* =========================================
Spinner
========================================= */
#circle1 {
  animation: circle1 4s linear infinite, circle-entry 6s ease-in-out;
  background: #74ebe6;
  border-radius: 100%;
  border: 10px solid #74ebe6;
  box-shadow: 0 0 0 2px black, 0 0 0 6px #74ebe6;
  height: 500px;
  width: 500px;
  position: absolute;
  top: 120px;
  left: 50%;
  margin-left: -250px;
  overflow: hidden;
  opacity: 1.5;
  z-index: -3;
}

#inner-cirlce1 {
  background: #000;
  border-radius: 100%;
  border: 36px solid #74ebe6;
  height: 460px;
  width: 460px;
  margin: 10px;
}
#inner-cirlce1:before {
  content: ' ';
  width: 240px;
  height: 480px;
  background: #000;
  position: absolute;
  top: 0;
  left: 0;
}
#inner-cirlce1:after {
  content: ' ';
  width: 480px;
  height: 240px;
  background: #000;
  position: absolute;
  top: 0;
  left: 0;
}

/* =========================================
Hexagon Mesh
========================================= */
.hexagons {
  animation: logo-entry 4s ease-in;
  /*background:url(http://fc03.deviantart.net/fs71/i/2012/237/c/7/jarvis_rainmeter_skin_by_ingwey-d5cc571.png);*/
  color: #000;
  font-size: 52px;
  font-size: 5.1rem;
  letter-spacing: -0.2em;
  line-height: 0.7;
  position: absolute;
  text-shadow: 0 0 6px #74ebe6;
  top: 1px;
  width: 100%;
  /*transform: perspective(60px)  scale(2.4);*/
  z-index: -3;
}

/* =========================================
Animation Keyframes
========================================= */
@keyframes logo-entry {
  0% {
    opacity: 0;
  }

  80% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes circle-entry {
  0% {
    opacity: 0;
  }

  20% {
    opacity: 0;
  }

  100% {
    opacity: 0.4;
  }
}

@keyframes input-entry {
  0% {
    opacity: 0;
  }

  90% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes form-entry {
  0% {
    height: 0;
    width: 0;
    opacity: 0;
    padding: 0;
  }

  20% {
    height: 0;
    border: 1px solid #00a4a2;
    width: 0;
    opacity: 0;
    padding: 0;
  }

  40% {
    width: 0;
    height: 220px;
    border: 6px solid #00a4a2;
    opacity: 1;
    padding: 0;
  }

  100% {
    height: 220px;
    width: 500px;
  }
}

@keyframes box-glow {
  0% {
    border-color: #00b8b6;
    box-shadow: 0 0 5px rgba(0, 255, 253, 0.2), inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 black;
  }

  100% {
    border-color: #00fffc;
    box-shadow: 0 0 20px rgba(0, 255, 253, 0.6), inset 0 0 10px rgba(0, 255, 253, 0.4), 0 2px 0 black;
  }
}

@keyframes text-glow {
  0% {
    color: #00a4a2;
    text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #000, 0 0 40px #000, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000;
  }

  100% {
    color: #00fffc;
    text-shadow: 0 0 20px rgba(0, 255, 253, 0.6), 0 0 10px rgba(0, 255, 253, 0.4), 0 2px 0 black;
  }
}

@keyframes before-glow {
  0% {
    border-bottom: 10px solid #00a4a2;
  }

  100% {
    border-bottom: 10px solid #00fffc;
  }
}

@keyframes after-glow {
  0% {
    border-top: 16px solid #00a4a2;
  }

  100% {
    border-top: 16px solid #00fffc;
  }
}

@keyframes circle1 {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}


</style>

</head>

<body>

  <div id="logo">
  <h1><i>PRADEEP VISH</i></h1>
</div>
<section class="stark-login">

  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
      @csrf
    <div id="fade-box">
      <input id="email" type="email"  placeholder="email id" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>


          <button type="submit">Log In</button>
        </div>
      </form>
      <div class="hexagons">

                 <img src="http://i34.photobucket.com/albums/d133/RavenLionheart/NX-Desktop-BG.png" height="768px" width="1366px"/>
              </div>
            </section>

            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>

            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>

  <script src='https://codepen.io/assets/libs/fullpage/jquery.js'></script>

  <script src="js/index.js"></script>
  <script>
      /**
 * StyleFix 1.0.3 & PrefixFree 1.0.7
 * @author Lea Verou
 * MIT license
 */

(function(){

if(!window.addEventListener) {
  return;
}

var self = window.StyleFix = {
  link: function(link) {
    try {
      // Ignore stylesheets with data-noprefix attribute as well as alternate stylesheets
      if(link.rel !== 'stylesheet' || link.hasAttribute('data-noprefix')) {
        return;
      }
    }
    catch(e) {
      return;
    }

    var url = link.href || link.getAttribute('data-href'),
        base = url.replace(/[^\/]+$/, ''),
        base_scheme = (/^[a-z]{3,10}:/.exec(base) || [''])[0],
        base_domain = (/^[a-z]{3,10}:\/\/[^\/]+/.exec(base) || [''])[0],
        base_query = /^([^?]*)\??/.exec(url)[1],
        parent = link.parentNode,
        xhr = new XMLHttpRequest(),
        process;

    xhr.onreadystatechange = function() {
      if(xhr.readyState === 4) {
        process();
      }
    };

    process = function() {
        var css = xhr.responseText;

        if(css && link.parentNode && (!xhr.status || xhr.status < 400 || xhr.status > 600)) {
          css = self.fix(css, true, link);

          // Convert relative URLs to absolute, if needed
          if(base) {
            css = css.replace(/url\(\s*?((?:"|')?)(.+?)\1\s*?\)/gi, function($0, quote, url) {
              if(/^([a-z]{3,10}:|#)/i.test(url)) { // Absolute & or hash-relative
                return $0;
              }
              else if(/^\/\//.test(url)) { // Scheme-relative
                // May contain sequences like /../ and /./ but those DO work
                return 'url("' + base_scheme + url + '")';
              }
              else if(/^\//.test(url)) { // Domain-relative
                return 'url("' + base_domain + url + '")';
              }
              else if(/^\?/.test(url)) { // Query-relative
                return 'url("' + base_query + url + '")';
              }
              else {
                // Path-relative
                return 'url("' + base + url + '")';
              }
            });

            // behavior URLs shoudn’t be converted (Issue #19)
            // base should be escaped before added to RegExp (Issue #81)
            var escaped_base = base.replace(/([\\\^\$*+[\]?{}.=!:(|)])/g,"\\$1");
            css = css.replace(RegExp('\\b(behavior:\\s*?url\\(\'?"?)' + escaped_base, 'gi'), '$1');
            }

          var style = document.createElement('style');
          style.textContent = css;
          style.media = link.media;
          style.disabled = link.disabled;
          style.setAttribute('data-href', link.getAttribute('href'));

          parent.insertBefore(style, link);
          parent.removeChild(link);

          style.media = link.media; // Duplicate is intentional. See issue #31
        }
    };

    try {
      xhr.open('GET', url);
      xhr.send(null);
    } catch (e) {
      // Fallback to XDomainRequest if available
      if (typeof XDomainRequest != "undefined") {
        xhr = new XDomainRequest();
        xhr.onerror = xhr.onprogress = function() {};
        xhr.onload = process;
        xhr.open("GET", url);
        xhr.send(null);
      }
    }

    link.setAttribute('data-inprogress', '');
  },

  styleElement: function(style) {
    if (style.hasAttribute('data-noprefix')) {
      return;
    }
    var disabled = style.disabled;

    style.textContent = self.fix(style.textContent, true, style);

    style.disabled = disabled;
  },

  styleAttribute: function(element) {
    var css = element.getAttribute('style');

    css = self.fix(css, false, element);

    element.setAttribute('style', css);
  },

  process: function() {
    // Linked stylesheets
    $('link[rel="stylesheet"]:not([data-inprogress])').forEach(StyleFix.link);

    // Inline stylesheets
    $('style').forEach(StyleFix.styleElement);

    // Inline styles
    $('[style]').forEach(StyleFix.styleAttribute);
  },

  register: function(fixer, index) {
    (self.fixers = self.fixers || [])
      .splice(index === undefined? self.fixers.length : index, 0, fixer);
  },

  fix: function(css, raw, element) {
    for(var i=0; i<self.fixers.length; i++) {
      css = self.fixers[i](css, raw, element) || css;
    }

    return css;
  },

  camelCase: function(str) {
    return str.replace(/-([a-z])/g, function($0, $1) { return $1.toUpperCase(); }).replace('-','');
  },

  deCamelCase: function(str) {
    return str.replace(/[A-Z]/g, function($0) { return '-' + $0.toLowerCase() });
  }
};

/**************************************
 * Process styles
 **************************************/
(function(){
  setTimeout(function(){
    $('link[rel="stylesheet"]').forEach(StyleFix.link);
  }, 10);

  document.addEventListener('DOMContentLoaded', StyleFix.process, false);
})();

function $(expr, con) {
  return [].slice.call((con || document).querySelectorAll(expr));
}

})();

/**
 * PrefixFree
 */
(function(root){

if(!window.StyleFix || !window.getComputedStyle) {
  return;
}

// Private helper
function fix(what, before, after, replacement, css) {
  what = self[what];

  if(what.length) {
    var regex = RegExp(before + '(' + what.join('|') + ')' + after, 'gi');

    css = css.replace(regex, replacement);
  }

  return css;
}

var self = window.PrefixFree = {
  prefixCSS: function(css, raw, element) {
    var prefix = self.prefix;

    // Gradient angles hotfix
    if(self.functions.indexOf('linear-gradient') > -1) {
      // Gradients are supported with a prefix, convert angles to legacy
      css = css.replace(/(\s|:|,)(repeating-)?linear-gradient\(\s*(-?\d*\.?\d*)deg/ig, function ($0, delim, repeating, deg) {
        return delim + (repeating || '') + 'linear-gradient(' + (90-deg) + 'deg';
      });
    }

    css = fix('functions', '(\\s|:|,)', '\\s*\\(', '$1' + prefix + '$2(', css);
    css = fix('keywords', '(\\s|:)', '(\\s|;|\\}|$)', '$1' + prefix + '$2$3', css);
    css = fix('properties', '(^|\\{|\\s|;)', '\\s*:', '$1' + prefix + '$2:', css);

    // Prefix properties *inside* values (issue #8)
    if (self.properties.length) {
      var regex = RegExp('\\b(' + self.properties.join('|') + ')(?!:)', 'gi');

      css = fix('valueProperties', '\\b', ':(.+?);', function($0) {
        return $0.replace(regex, prefix + "$1")
      }, css);
    }

    if(raw) {
      css = fix('selectors', '', '\\b', self.prefixSelector, css);
      css = fix('atrules', '@', '\\b', '@' + prefix + '$1', css);
    }

    // Fix double prefixing
    css = css.replace(RegExp('-' + prefix, 'g'), '-');

    // Prefix wildcard
    css = css.replace(/-\*-(?=[a-z]+)/gi, self.prefix);

    return css;
  },

  property: function(property) {
    return (self.properties.indexOf(property)? self.prefix : '') + property;
  },

  value: function(value, property) {
    value = fix('functions', '(^|\\s|,)', '\\s*\\(', '$1' + self.prefix + '$2(', value);
    value = fix('keywords', '(^|\\s)', '(\\s|$)', '$1' + self.prefix + '$2$3', value);

    // TODO properties inside values

    return value;
  },

  // Warning: Prefixes no matter what, even if the selector is supported prefix-less
  prefixSelector: function(selector) {
    return selector.replace(/^:{1,2}/, function($0) { return $0 + self.prefix })
  },

  // Warning: Prefixes no matter what, even if the property is supported prefix-less
  prefixProperty: function(property, camelCase) {
    var prefixed = self.prefix + property;

    return camelCase? StyleFix.camelCase(prefixed) : prefixed;
  }
};

/**************************************
 * Properties
 **************************************/
(function() {
  var prefixes = {},
    properties = [],
    shorthands = {},
    style = getComputedStyle(document.documentElement, null),
    dummy = document.createElement('div').style;

  // Why are we doing this instead of iterating over properties in a .style object? Cause Webkit won't iterate over those.
  var iterate = function(property) {
    if(property.charAt(0) === '-') {
      properties.push(property);

      var parts = property.split('-'),
        prefix = parts[1];

      // Count prefix uses
      prefixes[prefix] = ++prefixes[prefix] || 1;

      // This helps determining shorthands
      while(parts.length > 3) {
        parts.pop();

        var shorthand = parts.join('-');

        if(supported(shorthand) && properties.indexOf(shorthand) === -1) {
          properties.push(shorthand);
        }
      }
    }
  },
  supported = function(property) {
    return StyleFix.camelCase(property) in dummy;
  }

  // Some browsers have numerical indices for the properties, some don't
  if(style.length > 0) {
    for(var i=0; i<style.length; i++) {
      iterate(style[i])
    }
  }
  else {
    for(var property in style) {
      iterate(StyleFix.deCamelCase(property));
    }
  }

  // Find most frequently used prefix
  var highest = {uses:0};
  for(var prefix in prefixes) {
    var uses = prefixes[prefix];

    if(highest.uses < uses) {
      highest = {prefix: prefix, uses: uses};
    }
  }

  self.prefix = '-' + highest.prefix + '-';
  self.Prefix = StyleFix.camelCase(self.prefix);

  self.properties = [];

  // Get properties ONLY supported with a prefix
  for(var i=0; i<properties.length; i++) {
    var property = properties[i];

    if(property.indexOf(self.prefix) === 0) { // we might have multiple prefixes, like Opera
      var unprefixed = property.slice(self.prefix.length);

      if(!supported(unprefixed)) {
        self.properties.push(unprefixed);
      }
    }
  }

  // IE fix
  if(self.Prefix == 'Ms'
    && !('transform' in dummy)
    && !('MsTransform' in dummy)
    && ('msTransform' in dummy)) {
    self.properties.push('transform', 'transform-origin');
  }

  self.properties.sort();
})();

/**************************************
 * Values
 **************************************/
(function() {
// Values that might need prefixing
var functions = {
  'linear-gradient': {
    property: 'backgroundImage',
    params: 'red, teal'
  },
  'calc': {
    property: 'width',
    params: '1px + 5%'
  },
  'element': {
    property: 'backgroundImage',
    params: '#foo'
  },
  'cross-fade': {
    property: 'backgroundImage',
    params: 'url(a.png), url(b.png), 50%'
  }
};


functions['repeating-linear-gradient'] =
functions['repeating-radial-gradient'] =
functions['radial-gradient'] =
functions['linear-gradient'];

// Note: The properties assigned are just to *test* support.
// The keywords will be prefixed everywhere.
var keywords = {
  'initial': 'color',
  'zoom-in': 'cursor',
  'zoom-out': 'cursor',
  'box': 'display',
  'flexbox': 'display',
  'inline-flexbox': 'display',
  'flex': 'display',
  'inline-flex': 'display',
  'grid': 'display',
  'inline-grid': 'display',
  'min-content': 'width'
};

self.functions = [];
self.keywords = [];

var style = document.createElement('div').style;

function supported(value, property) {
  style[property] = '';
  style[property] = value;

  return !!style[property];
}

for (var func in functions) {
  var test = functions[func],
    property = test.property,
    value = func + '(' + test.params + ')';

  if (!supported(value, property)
    && supported(self.prefix + value, property)) {
    // It's supported, but with a prefix
    self.functions.push(func);
  }
}

for (var keyword in keywords) {
  var property = keywords[keyword];

  if (!supported(keyword, property)
    && supported(self.prefix + keyword, property)) {
    // It's supported, but with a prefix
    self.keywords.push(keyword);
  }
}

})();

/**************************************
 * Selectors and @-rules
 **************************************/
(function() {

var
selectors = {
  ':read-only': null,
  ':read-write': null,
  ':any-link': null,
  '::selection': null
},

atrules = {
  'keyframes': 'name',
  'viewport': null,
  'document': 'regexp(".")'
};

self.selectors = [];
self.atrules = [];

var style = root.appendChild(document.createElement('style'));

function supported(selector) {
  style.textContent = selector + '{}';  // Safari 4 has issues with style.innerHTML

  return !!style.sheet.cssRules.length;
}

for(var selector in selectors) {
  var test = selector + (selectors[selector]? '(' + selectors[selector] + ')' : '');

  if(!supported(test) && supported(self.prefixSelector(test))) {
    self.selectors.push(selector);
  }
}

for(var atrule in atrules) {
  var test = atrule + ' ' + (atrules[atrule] || '');

  if(!supported('@' + test) && supported('@' + self.prefix + test)) {
    self.atrules.push(atrule);
  }
}

root.removeChild(style);

})();

// Properties that accept properties as their value
self.valueProperties = [
  'transition',
  'transition-property'
]

// Add class for current prefix
root.className += ' ' + self.prefix;

StyleFix.register(self.prefixCSS);


})(document.documentElement);
      </script>

</body>

</html>
