
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

const feather = require("feather-icons");
feather.replace();

const highlightjs = require("highlight.js");
highlightjs.initHighlightingOnLoad();

require('highlight.js/styles/github.css');

const turbolinks = require("turbolinks")
turbolinks.start()