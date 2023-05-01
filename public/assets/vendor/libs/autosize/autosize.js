(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(self, function() {
return /******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/autosize/dist/autosize.js":
/*!************************************************!*\
  !*** ./node_modules/autosize/dist/autosize.js ***!
  \************************************************/
/***/ (function(module) {

(function (global, factory) {
	 true ? module.exports = factory() :
	0;
}(this, (function () {
	var map = typeof Map === "function" ? new Map() : function () {
	  var keys = [];
	  var values = [];
	  return {
	    has: function has(key) {
	      return keys.indexOf(key) > -1;
	    },
	    get: function get(key) {
	      return values[keys.indexOf(key)];
	    },
	    set: function set(key, value) {
	      if (keys.indexOf(key) === -1) {
	        keys.push(key);
	        values.push(value);
	      }
	    },
	    "delete": function _delete(key) {
	      var index = keys.indexOf(key);

	      if (index > -1) {
	        keys.splice(index, 1);
	        values.splice(index, 1);
	      }
	    }
	  };
	}();

	var createEvent = function createEvent(name) {
	  return new Event(name, {
	    bubbles: true
	  });
	};

	try {
	  new Event('test');
	} catch (e) {
	  // IE does not support `new Event()`
	  createEvent = function createEvent(name) {
	    var evt = document.createEvent('Event');
	    evt.initEvent(name, true, false);
	    return evt;
	  };
	}

	function assign(ta) {
	  if (!ta || !ta.nodeName || ta.nodeName !== 'TEXTAREA' || map.has(ta)) return;
	  var heightOffset = null;
	  var clientWidth = null;
	  var cachedHeight = null;

	  function init() {
	    var style = window.getComputedStyle(ta, null);

	    if (style.resize === 'vertical') {
	      ta.style.resize = 'none';
	    } else if (style.resize === 'both') {
	      ta.style.resize = 'horizontal';
	    }

	    if (style.boxSizing === 'content-box') {
	      heightOffset = -(parseFloat(style.paddingTop) + parseFloat(style.paddingBottom));
	    } else {
	      heightOffset = parseFloat(style.borderTopWidth) + parseFloat(style.borderBottomWidth);
	    } // Fix when a textarea is not on document body and heightOffset is Not a Number


	    if (isNaN(heightOffset)) {
	      heightOffset = 0;
	    }

	    update();
	  }

	  function changeOverflow(value) {
	    {
	      // Chrome/Safari-specific fix:
	      // When the textarea y-overflow is hidden, Chrome/Safari do not reflow the text to account for the space
	      // made available by removing the scrollbar. The following forces the necessary text reflow.
	      var width = ta.style.width;
	      ta.style.width = '0px'; // Force reflow:
	      /* jshint ignore:end */

	      ta.style.width = width;
	    }
	    ta.style.overflowY = value;
	  }

	  function getParentOverflows(el) {
	    var arr = [];

	    while (el && el.parentNode && el.parentNode instanceof Element) {
	      if (el.parentNode.scrollTop) {
	        arr.push({
	          node: el.parentNode,
	          scrollTop: el.parentNode.scrollTop
	        });
	      }

	      el = el.parentNode;
	    }

	    return arr;
	  }

	  function resize() {
	    if (ta.scrollHeight === 0) {
	      // If the scrollHeight is 0, then the element probably has display:none or is detached from the DOM.
	      return;
	    }

	    var overflows = getParentOverflows(ta);
	    var docTop = document.documentElement && document.documentElement.scrollTop; // Needed for Mobile IE (ticket #240)

	    ta.style.height = '';
	    ta.style.height = ta.scrollHeight + heightOffset + 'px'; // used to check if an update is actually necessary on window.resize

	    clientWidth = ta.clientWidth; // prevents scroll-position jumping

	    overflows.forEach(function (el) {
	      el.node.scrollTop = el.scrollTop;
	    });

	    if (docTop) {
	      document.documentElement.scrollTop = docTop;
	    }
	  }

	  function update() {
	    resize();
	    var styleHeight = Math.round(parseFloat(ta.style.height));
	    var computed = window.getComputedStyle(ta, null); // Using offsetHeight as a replacement for computed.height in IE, because IE does not account use of border-box

	    var actualHeight = computed.boxSizing === 'content-box' ? Math.round(parseFloat(computed.height)) : ta.offsetHeight; // The actual height not matching the style height (set via the resize method) indicates that 
	    // the max-height has been exceeded, in which case the overflow should be allowed.

	    if (actualHeight < styleHeight) {
	      if (computed.overflowY === 'hidden') {
	        changeOverflow('scroll');
	        resize();
	        actualHeight = computed.boxSizing === 'content-box' ? Math.round(parseFloat(window.getComputedStyle(ta, null).height)) : ta.offsetHeight;
	      }
	    } else {
	      // Normally keep overflow set to hidden, to avoid flash of scrollbar as the textarea expands.
	      if (computed.overflowY !== 'hidden') {
	        changeOverflow('hidden');
	        resize();
	        actualHeight = computed.boxSizing === 'content-box' ? Math.round(parseFloat(window.getComputedStyle(ta, null).height)) : ta.offsetHeight;
	      }
	    }

	    if (cachedHeight !== actualHeight) {
	      cachedHeight = actualHeight;
	      var evt = createEvent('autosize:resized');

	      try {
	        ta.dispatchEvent(evt);
	      } catch (err) {// Firefox will throw an error on dispatchEvent for a detached element
	        // https://bugzilla.mozilla.org/show_bug.cgi?id=889376
	      }
	    }
	  }

	  var pageResize = function pageResize() {
	    if (ta.clientWidth !== clientWidth) {
	      update();
	    }
	  };

	  var destroy = function (style) {
	    window.removeEventListener('resize', pageResize, false);
	    ta.removeEventListener('input', update, false);
	    ta.removeEventListener('keyup', update, false);
	    ta.removeEventListener('autosize:destroy', destroy, false);
	    ta.removeEventListener('autosize:update', update, false);
	    Object.keys(style).forEach(function (key) {
	      ta.style[key] = style[key];
	    });
	    map["delete"](ta);
	  }.bind(ta, {
	    height: ta.style.height,
	    resize: ta.style.resize,
	    overflowY: ta.style.overflowY,
	    overflowX: ta.style.overflowX,
	    wordWrap: ta.style.wordWrap
	  });

	  ta.addEventListener('autosize:destroy', destroy, false); // IE9 does not fire onpropertychange or oninput for deletions,
	  // so binding to onkeyup to catch most of those events.
	  // There is no way that I know of to detect something like 'cut' in IE9.

	  if ('onpropertychange' in ta && 'oninput' in ta) {
	    ta.addEventListener('keyup', update, false);
	  }

	  window.addEventListener('resize', pageResize, false);
	  ta.addEventListener('input', update, false);
	  ta.addEventListener('autosize:update', update, false);
	  ta.style.overflowX = 'hidden';
	  ta.style.wordWrap = 'break-word';
	  map.set(ta, {
	    destroy: destroy,
	    update: update
	  });
	  init();
	}

	function destroy(ta) {
	  var methods = map.get(ta);

	  if (methods) {
	    methods.destroy();
	  }
	}

	function update(ta) {
	  var methods = map.get(ta);

	  if (methods) {
	    methods.update();
	  }
	}

	var autosize = null; // Do nothing in Node.js environment and IE8 (or lower)

	if (typeof window === 'undefined' || typeof window.getComputedStyle !== 'function') {
	  autosize = function autosize(el) {
	    return el;
	  };

	  autosize.destroy = function (el) {
	    return el;
	  };

	  autosize.update = function (el) {
	    return el;
	  };
	} else {
	  autosize = function autosize(el, options) {
	    if (el) {
	      Array.prototype.forEach.call(el.length ? el : [el], function (x) {
	        return assign(x);
	      });
	    }

	    return el;
	  };

	  autosize.destroy = function (el) {
	    if (el) {
	      Array.prototype.forEach.call(el.length ? el : [el], destroy);
	    }

	    return el;
	  };

	  autosize.update = function (el) {
	    if (el) {
	      Array.prototype.forEach.call(el.length ? el : [el], update);
	    }

	    return el;
	  };
	}

	var autosize$1 = autosize;

	return autosize$1;

})));


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!***********************************************************!*\
  !*** ./resources/assets/vendor/libs/autosize/autosize.js ***!
  \***********************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "autosize": function() { return /* reexport module object */ autosize_dist_autosize__WEBPACK_IMPORTED_MODULE_0__; }
/* harmony export */ });
/* harmony import */ var autosize_dist_autosize__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! autosize/dist/autosize */ "./node_modules/autosize/dist/autosize.js");
/* harmony import */ var autosize_dist_autosize__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(autosize_dist_autosize__WEBPACK_IMPORTED_MODULE_0__);


}();
/******/ 	return __webpack_exports__;
/******/ })()
;
});