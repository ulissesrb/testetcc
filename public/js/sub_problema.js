/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/sub_problema.js":
/*!**************************************!*\
  !*** ./resources/js/sub_problema.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var form = document.querySelector('#form_subproblema');
var subs = [1, 2, 3];
subs.map(function (el, index) {
  var sub = document.createElement("div");
  sub.id = "subproblema";
  sub.innerHTML = "\n        <div id=\"campos\">\n            <div id=\"texto_sub_problema\">\n                <h4>Subproblema ".concat(index + 1, "</h4>\n            </div>\n            <div id=\"caixa_texto\">\n                <input class=\"text-input\" type=\"text\" id=\"sub_problema\" maxlength=\"255\">\n            </div>\n        </div>\n        <div id=\"acrescimo_sub_problema\">\n            <input type=\"button\" name=\"botao_adiciona\"><img src=\"/img/mais.png\" width=\"30\" height=\"30\"/></>\n        </div>\n    ");
  form.appendChild(sub);
});

function updateEvents() {
  document.querySelectorAll('#acrescimo_sub_problema').forEach(function (el) {
    el.onclick = addSubProb;
  });
}

function addSubProb() {
  var sub = document.createElement("div");
  sub.id = "subproblema";
  sub.innerHTML = "\n        <div id=\"campos\">\n            <div id=\"texto_sub_problema\">\n                <h4>Subproblema ".concat(subs.length + 1, "</h4>\n            </div>\n            <div id=\"caixa_texto\">\n                <input class=\"text-input\" type=\"text\" id=\"sub_problema\" maxlength=\"255\">\n            </div>\n        </div>\n        <div id=\"acrescimo_sub_problema\">\n            <input type=\"button\" name=\"botao_adiciona\"><img src=\"/img/mais.png\" width=\"30\" height=\"30\"/></>\n        </div>\n    ");
  form.appendChild(sub);
  subs.push(subs.length + 1);
  updateEvents();
}

updateEvents();

/***/ }),

/***/ 3:
/*!*****************************************!*\
  !*** multi ./resources/js/sub_problema ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\TCC\resources\js\sub_problema */"./resources/js/sub_problema.js");


/***/ })

/******/ });