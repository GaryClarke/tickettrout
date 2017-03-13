/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(3);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('artist-list', __webpack_require__(4));
Vue.component('offer-sidebar', __webpack_require__(16));

var app = new Vue({
  el: '#app'
});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    data: function data() {

        return {

            artists: ''

        };
    },
    mounted: function mounted() {

        this.fetchArtists();
    },


    methods: {
        fetchArtists: function fetchArtists() {

            axios.get('/fetchartists').then(this.handleFetchedArtists).catch(this.handleFailedFetchedArtists);
        },
        handleFetchedArtists: function handleFetchedArtists(response) {
            console.log(response.data);

            this.artists = response.data;
        },
        handleFailedFetchedArtists: function handleFailedFetchedArtists(error) {
            console.log(error);
        }
    }
};

/***/ }),
/* 3 */
/***/ (function(module, exports) {


// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// window.$ = window.jQuery = require('jquery');
//
// require('bootstrap-sass');

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

// window.Vue = require('vue');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios');

window.axios.defaults.headers.common = {
  'X-CSRF-TOKEN': window.Laravel.csrfToken,
  'X-Requested-With': 'XMLHttpRequest'
};

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(5)(
  /* script */
  __webpack_require__(2),
  /* template */
  __webpack_require__(6),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/gc/Code/trout2/resources/assets/js/vue-components/artist-list.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] artist-list.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-d6bdbfb6", Component.options)
  } else {
    hotAPI.reload("data-v-d6bdbfb6", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 5 */
/***/ (function(module, exports) {

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = options.computed || (options.computed = {})
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "tab-pane active",
    attrs: {
      "role": "tabpanel"
    }
  }, [_c('div', {
    staticClass: "content"
  }, _vm._l((_vm.artists), function(artist) {
    return _c('div', {
      staticClass: "card-wrap card-sm-wrap"
    }, [_c('article', {
      staticClass: "card card-league panel panel-default"
    }, [_c('img', {
      staticClass: "img-responsive card-image",
      attrs: {
        "src": artist.banner,
        "alt": "Artist banner"
      }
    }), _vm._v(" "), _c('div', {
      staticClass: "card-details card-content panel-body"
    }, [_c('a', {
      attrs: {
        "href": ("/avatars/" + (artist.id))
      }
    }, [_c('img', {
      staticClass: "img-responsive img-circle card-avatar",
      attrs: {
        "src": artist.avatar,
        "alt": "League creator image"
      }
    })]), _vm._v(" "), _c('h2', {
      staticStyle: {
        "margin-top": "0"
      }
    }, [_c('a', {
      staticStyle: {
        "color": "#444"
      },
      attrs: {
        "href": ("/artists/" + (artist.id))
      }
    }, [_vm._v(_vm._s(artist.name))])]), _vm._v(" "), _c('div', {
      staticClass: "card-author"
    }, [_vm._v("\n                        Some spiel\n                        "), _c('a', {
      attrs: {
        "href": "#"
      }
    }, [_vm._v("about something")]), _vm._v(" "), _c('span', {
      staticClass: "card-block"
    }, [_vm._v(_vm._s(artist.touring))])]), _vm._v(" "), _c('h3', [_c('a', {
      attrs: {
        "href": ("/artists/" + (artist.id) + "/add")
      }
    }, [_c('i', {
      staticClass: "fa fa-plus-circle",
      attrs: {
        "aria-hidden": "true"
      }
    }), _vm._v("\n                            Wishlist\n                        ")])])])])])
  }))])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-d6bdbfb6", module.exports)
  }
}

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ }),
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    props: ['user'],

    data: function data() {

        return {

            ticketAmount: 4,
            seconds: 59,
            minutes: 22,
            bought: false
        };
    },


    computed: {
        totalCost: function totalCost() {

            return this.ticketAmount * 44;
        }
    },

    mounted: function mounted() {

        setInterval(function () {

            if (this.seconds == 0) {

                this.seconds = 59;
            } else {

                --this.seconds;
            }
        }.bind(this), 1000);

        setInterval(function () {

            if (this.minutes == 0) {

                this.minutes = 59;
            } else {

                --this.minutes;
            }
        }.bind(this), 1000 * 60);
    },


    methods: {
        buyTickets: function buyTickets() {

            this.bought = true;

            swal({
                title: "Great!",
                text: "You're going to see Adele. Your tickets will be emailed to " + this.user.email,
                imageUrl: "/banners/Adele400.jpg",
                imageSize: "250x150",
                confirmButtonText: 'Confirm',
                html: true
            });
        }
    }
};

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(5)(
  /* script */
  __webpack_require__(15),
  /* template */
  __webpack_require__(17),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/gc/Code/trout2/resources/assets/js/vue-components/offer-sidebar.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] offer-sidebar.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-299323ec", Component.options)
  } else {
    hotAPI.reload("data-v-299323ec", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "sidebar",
    attrs: {
      "id": "sidebar-offers"
    }
  }, [_c('div', {
    staticClass: "sidebar-banner card side-card card-pseudo"
  }, [_c('div', {
    staticClass: "card-details card-content panel-body"
  }, [_c('div', {
    attrs: {
      "id": "profile-avatar"
    }
  }, [_vm._m(0), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.bought),
      expression: "!bought"
    }]
  }, [_c('h3', {
    staticStyle: {
      "margin-top": "0"
    }
  }, [_vm._v("Left:")]), _vm._v(" "), _c('h1', [_vm._v("4h " + _vm._s(_vm.minutes) + "m " + _vm._s(_vm.seconds) + "s")])]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.bought),
      expression: "bought"
    }]
  }, [_c('h2', [_vm._v("Great!")]), _vm._v(" "), _c('h3', [_vm._v("You've bought Adele tickets at face value")])])]), _vm._v(" "), _c('div', {
    staticStyle: {
      "margin-top": "20px"
    }
  }, [_c('div', [_vm._m(1), _vm._v(" "), _vm._m(2), _vm._v(" "), _vm._m(3), _vm._v(" "), _vm._m(4), _vm._v(" "), _vm._m(5), _vm._v(" "), _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Quantity")]), _vm._v(" "), _c('p', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.bought),
      expression: "!bought"
    }]
  }, [_c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.ticketAmount),
      expression: "ticketAmount"
    }],
    staticStyle: {
      "min-width": "80px",
      "background-color": "white"
    },
    attrs: {
      "name": "quantity",
      "id": "quantity"
    },
    on: {
      "change": function($event) {
        var $$selectedVal = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        });
        _vm.ticketAmount = $event.target.multiple ? $$selectedVal : $$selectedVal[0]
      }
    }
  }, [_c('option', {
    attrs: {
      "value": "1"
    }
  }, [_vm._v("1")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "2"
    }
  }, [_vm._v("2")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "3"
    }
  }, [_vm._v("3")]), _vm._v(" "), _c('option', {
    attrs: {
      "value": "4"
    }
  }, [_vm._v("4")])])]), _vm._v(" "), _c('p', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.bought),
      expression: "bought"
    }]
  }, [_vm._v("\n                                    " + _vm._s(_vm.ticketAmount) + "\n                                ")])])])])]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (!_vm.bought),
      expression: "!bought"
    }],
    staticStyle: {
      "text-align": "center"
    }
  }, [_c('h2', [_vm._v("Total to Pay £ " + _vm._s(_vm.totalCost))]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-success btn-block",
    staticStyle: {
      "margin-top": "20px"
    },
    attrs: {
      "type": "submit"
    },
    on: {
      "click": function($event) {
        $event.preventDefault();
        _vm.buyTickets($event)
      }
    }
  }, [_vm._v("\n                        BUY NOW\n                    ")]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary btn-block",
    staticStyle: {
      "margin-top": "50px"
    },
    attrs: {
      "type": "submit",
      "onclick": "this.blur();"
    }
  }, [_vm._v("\n                        RELEASE TO OTHERS (400 points)\n                    ")])]), _vm._v(" "), _c('div', {
    directives: [{
      name: "show",
      rawName: "v-show",
      value: (_vm.bought),
      expression: "bought"
    }],
    staticStyle: {
      "text-align": "center"
    }
  }, [_c('h2', [_vm._v("Total Cost: £" + _vm._s(_vm.totalCost))])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('img', {
    staticClass: "profile-avatar",
    staticStyle: {
      "float": "left",
      "margin-right": "5px"
    },
    attrs: {
      "src": "/avatars/Adele.jpg",
      "alt": "User image"
    }
  })])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Show")]), _vm._v(" "), _c('p', [_c('span', {
    staticClass: "profile-attributes"
  }, [_c('b', [_vm._v("Adele")])])])])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Venue")]), _vm._v(" "), _c('p', [_c('span', {
    staticClass: "profile-attributes"
  }, [_vm._v("\n                            Liverpool Echo Arena\n                        ")])])])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Date")]), _vm._v(" "), _c('p', [_c('span', {
    staticClass: "profile-attributes"
  }, [_vm._v("\n                            01/07/2017 - 7.30pm\n                        ")])])])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Ticket")]), _vm._v(" "), _c('p', [_c('span', {
    staticClass: "profile-attributes"
  }, [_vm._v("\n                            Seated (Lower Tier) "), _c('a', {
    staticClass: "name-link float-right",
    attrs: {
      "href": "#"
    }
  }, [_vm._v("Full Details")])])])])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "editable-attribute"
  }, [_c('div', {
    staticClass: "media"
  }, [_c('div', {
    staticClass: "media-body"
  }, [_c('p', {
    staticClass: "attribute-title"
  }, [_vm._v("Price")]), _vm._v(" "), _c('p', [_c('span', {
    staticClass: "profile-attributes"
  }, [_vm._v("\n                            £44 (inc fees)\n                        ")])])])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-299323ec", module.exports)
  }
}

/***/ })
/******/ ]);