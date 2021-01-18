(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var lodash_debounce__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lodash/debounce */ "./node_modules/lodash/debounce.js");
/* harmony import */ var lodash_debounce__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(lodash_debounce__WEBPACK_IMPORTED_MODULE_1__);


function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

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

/* harmony default export */ __webpack_exports__["default"] = ({
  props: ['value', 'api', 'params', 'placeholder'],
  data: function data() {
    return {
      active: null,
      loading: false,
      options: []
    };
  },
  mounted: function mounted() {
    this.fetchOptions();
  },
  methods: {
    fetchOptions: function fetchOptions() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee() {
        var _yield$axios$get, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return axios.get("".concat(_this.api), {
                  params: _objectSpread({
                    'page[size]': 5
                  }, _this.params)
                });

              case 2:
                _yield$axios$get = _context.sent;
                data = _yield$axios$get.data;
                _this.options = data.data.items;

              case 5:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    },
    search: lodash_debounce__WEBPACK_IMPORTED_MODULE_1___default()( /*#__PURE__*/function () {
      var _ref = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2(e) {
        var params, _yield$axios$get2, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                if (!(e.target.value.length === 0)) {
                  _context2.next = 3;
                  break;
                }

                this.options = [];
                return _context2.abrupt("return");

              case 3:
                if (!(e.target.value.length <= 2)) {
                  _context2.next = 5;
                  break;
                }

                return _context2.abrupt("return");

              case 5:
                params = _objectSpread(_objectSpread({}, this.params), {}, {
                  'filter[search]': e.target.value
                });
                this.loading = true;
                _context2.prev = 7;
                _context2.next = 10;
                return axios.get(this.api, {
                  params: params
                });

              case 10:
                _yield$axios$get2 = _context2.sent;
                data = _yield$axios$get2.data;
                this.options = data.data.items;
                _context2.next = 18;
                break;

              case 15:
                _context2.prev = 15;
                _context2.t0 = _context2["catch"](7);
                this.options = [];

              case 18:
                this.loading = false;

              case 19:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this, [[7, 15]]);
      }));

      return function (_x) {
        return _ref.apply(this, arguments);
      };
    }(), 350),
    select: function select(option) {
      this.$emit('input', option);
    },
    up: function up() {
      if (this.active === null) {
        this.active = this.options.length;
        return;
      }

      if (this.active - 1 < 0) {
        return;
      }

      this.active--;
    },
    down: function down() {
      if (this.active === null) {
        this.active = 0;
        return;
      }

      if (this.active + 1 >= this.options.length) {
        return;
      }

      this.active++;
    },
    enter: function enter() {
      if (this.active === null) {
        return;
      }

      var option = this.options[this.active];

      if (!option) {
        return;
      }

      this.select(option);
    }
  },
  computed: {
    selected: function selected() {
      return this.value;
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338&":
/*!*************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338& ***!
  \*************************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "autocomplete",
      on: {
        keydown: [
          function($event) {
            if (
              !$event.type.indexOf("key") &&
              _vm._k($event.keyCode, "up", 38, $event.key, ["Up", "ArrowUp"])
            ) {
              return null
            }
            $event.preventDefault()
            return _vm.up($event)
          },
          function($event) {
            if (
              !$event.type.indexOf("key") &&
              _vm._k($event.keyCode, "down", 40, $event.key, [
                "Down",
                "ArrowDown"
              ])
            ) {
              return null
            }
            $event.preventDefault()
            return _vm.down($event)
          },
          function($event) {
            if (
              !$event.type.indexOf("key") &&
              _vm._k($event.keyCode, "enter", 13, $event.key, "Enter")
            ) {
              return null
            }
            $event.preventDefault()
            return _vm.enter($event)
          }
        ]
      }
    },
    [
      _c("input", {
        staticClass: "form-control mb-3",
        attrs: {
          id: "addStr1",
          placeholder: _vm.placeholder,
          autocomplete: "off",
          type: "text"
        },
        on: { input: _vm.search }
      }),
      _vm._v(" "),
      _vm.loading
        ? _c(
            "div",
            { staticClass: "d-flex align-items-center justify-content-center" },
            [_vm._m(0)]
          )
        : _c(
            "div",
            { staticClass: "autocomplete-items" },
            _vm._l(_vm.options, function(option, index) {
              return _c(
                "div",
                {
                  key: index,
                  staticClass:
                    "option rounded d-flex align-items-center px-2 py-1",
                  class: [
                    _vm.active === index && "active",
                    _vm.selected && _vm.selected.id === option.id && "selected"
                  ],
                  on: {
                    click: function($event) {
                      return _vm.select(option)
                    },
                    mousemove: function($event) {
                      _vm.active = index
                    }
                  }
                },
                [
                  _vm.selected && _vm.selected.id === option.id
                    ? _c(
                        "div",
                        { staticClass: "icon white" },
                        [
                          _c("Icon", {
                            attrs: { size: "16", name: "RadioButtonChecked" }
                          })
                        ],
                        1
                      )
                    : _c(
                        "div",
                        { staticClass: "icon gray" },
                        [
                          _c("Icon", {
                            attrs: { size: "16", name: "RadioButton" }
                          })
                        ],
                        1
                      ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "ml-2" },
                    [_vm._t("default", null, { option: option })],
                    2
                  )
                ]
              )
            }),
            0
          )
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "spinner-border", attrs: { role: "status" } },
      [_c("span", { staticClass: "sr-only" }, [_vm._v("Loading...")])]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue":
/*!************************************************************************************!*\
  !*** ./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Autocomplete.vue?vue&type=template&id=37af3338& */ "./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338&");
/* harmony import */ var _Autocomplete_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Autocomplete.vue?vue&type=script&lang=js& */ "./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Autocomplete_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/vendor/back-components/components/modal/form/Autocomplete.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************!*\
  !*** ./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Autocomplete_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Autocomplete.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Autocomplete_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338&":
/*!*******************************************************************************************************************!*\
  !*** ./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338& ***!
  \*******************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./Autocomplete.vue?vue&type=template&id=37af3338& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/vendor/back-components/components/modal/form/Autocomplete.vue?vue&type=template&id=37af3338&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Autocomplete_vue_vue_type_template_id_37af3338___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);