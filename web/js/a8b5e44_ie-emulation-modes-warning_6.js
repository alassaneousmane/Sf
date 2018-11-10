/*!
 * Copyright 2014-2015 Twitter, Inc.
 *
 * Licensed under the Creative Commons Attribution 3.0 Unported License. For
 * details, see https://creativecommons.org/licenses/by/3.0/.
 */
(function(){"use strict";function t(){var e=/MSIE ([0-9.]+)/.exec(window.navigator.userAgent);if(e===null){return null};var n=parseInt(e[1],10),r=Math.floor(n);return r};function i(){var e=new Function("/*@cc_on return @_jscript_version; @*/")();if(e===undefined){return 11};if(e<9){return 8};return e};var r=window.navigator.userAgent;if(r.indexOf("Opera")>-1||r.indexOf("Presto")>-1){return};var e=t();if(e===null){return};var n=i();if(e!==n){window.alert("WARNING: You appear to be using IE"+n+" in IE"+e+" emulation mode.\nIE emulation modes can behave significantly differently from ACTUAL older versions of IE.\nPLEASE DON'T FILE BOOTSTRAP BUGS based on testing in IE emulation modes!")}})();