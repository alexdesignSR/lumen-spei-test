"use strict";

$ = require("jquery");

const example = require('./site/example');
const sliders = require('./site/sliders');
const scrollto = require('./site/scrollto');
const counters = require('./site/counters');
const menu = require('./site/menu');

jQuery(function () {

  example.init();
  sliders.init();
  scrollto.init();
  counters.init();
  menu.init();
  
});
