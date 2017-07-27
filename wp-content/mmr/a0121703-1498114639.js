/*!
 * jQuery Cookie Plugin v1.3.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as anonymous module.
        define(['jquery'], factory);
    } else {
        // Browser globals.
        factory(jQuery);
    }
}(function ($) {

    var pluses = /\+/g;

    function raw(s) {
        return s;
    }

    function decoded(s) {
        return decodeURIComponent(s.replace(pluses, ' '));
    }

    function converted(s) {
        if (s.indexOf('"') === 0) {
            // This is a quoted cookie as according to RFC2068, unescape
            s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
        }
        try {
            return config.json ? JSON.parse(s) : s;
        } catch(er) {}
    }

    var config = $.cookie = function (key, value, options) {

        // write
        if (value !== undefined) {
            options = $.extend({}, config.defaults, options);

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = config.json ? JSON.stringify(value) : String(value);

            return (document.cookie = [
                config.raw ? key : encodeURIComponent(key),
                '=',
                config.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // read
        var decode = config.raw ? raw : decoded;
        var cookies = document.cookie.split('; ');
        var result = key ? undefined : {};
        for (var i = 0, l = cookies.length; i < l; i++) {
            var parts = cookies[i].split('=');
            var name = decode(parts.shift());
            var cookie = decode(parts.join('='));

            if (key && key === name) {
                result = converted(cookie);
                break;
            }

            if (!key) {
                result[name] = converted(cookie);
            }
        }

        return result;
    };

    config.defaults = {};

    $.removeCookie = function (key, options) {
        if ($.cookie(key) !== undefined) {
            // Must not alter options, thus extending a fresh object...
            $.cookie(key, '', $.extend({}, options, { expires: -1 }));
            return true;
        }
        return false;
    };

}));;
/*globals wpml_browser_redirect_params, jQuery, ajaxurl, window */

/** @namespace wpml_browser_redirect_params.pageLanguage */
/** @namespace wpml_browser_redirect_params.expiration */
/** @namespace wpml_browser_redirect_params.languageUrls */
/** @namespace navigator.browserLanguage */

var WPMLBrowserRedirect = function () {
	"use strict";

	var self = this;

	self.getExpirationDate = function () {
		var date = new Date();
		var currentTime = date.getTime();
		date.setTime(currentTime + (wpml_browser_redirect_params.cookie.expiration * 60 * 60 * 1000));
		return date;
	};

    self.getRedirectUrl = function (browserLanguage) {
        var redirectUrl = false;
        var languageUrls = wpml_browser_redirect_params.languageUrls;
        var languageFirstPart = browserLanguage.substr(0, 2);
        var languageLastPart = browserLanguage.substr(3, 2);

        if (languageUrls[browserLanguage] === undefined) {
            if (languageUrls[languageLastPart] !== undefined) {
                redirectUrl = languageUrls[languageLastPart];
            } else if (languageUrls[languageFirstPart] !== undefined) {
                redirectUrl = languageUrls[languageFirstPart];
            }
        } else {
            redirectUrl = languageUrls[browserLanguage];
        }
        if ( window.location.href === redirectUrl ) {
            return false;
        } else {
            return redirectUrl;
        }
    };

	self.init = function () {

		if (self.cookiesAreEnabled() && !self.cookieExists()) {
            self.getBrowserLanguage(function (browserLanguages) {
				var redirectUrl;
				var pageLanguage;
                var browserLanguage;

				pageLanguage = wpml_browser_redirect_params.pageLanguage.toLowerCase();

                var browserLanguagesLength = browserLanguages.length;
                for (var i = 0; i < browserLanguagesLength; i++) {
                    browserLanguage = browserLanguages[i];

					if ( pageLanguage === browserLanguage ) {
						self.setCookie(browserLanguage);
						break;
					} else {
						redirectUrl = self.getRedirectUrl(browserLanguage);
						if (false !== redirectUrl) {
							self.setCookie(browserLanguage);
							window.location = redirectUrl;
							break;
						}
					}
                }

            });
		}
	};

	self.cookieExists = function () {
		var cookieParams = wpml_browser_redirect_params.cookie;
		var cookieName = cookieParams.name;
		return jQuery.cookie(cookieName);
	};

	self.setCookie = function (browserLanguage) {
		var cookieOptions;
		var cookieParams = wpml_browser_redirect_params.cookie;
		var cookieName = cookieParams.name;
		var path = '/';
		var domain = '';

		if (cookieParams.path) {
			path = cookieParams.path;
		}

		if (cookieParams.domain) {
			domain = cookieParams.domain;
		}

		cookieOptions = {
			expires: self.getExpirationDate(),
			path:    path,
			domain:  domain
		};
		jQuery.cookie(cookieName, browserLanguage, cookieOptions);
	};

	self.getBrowserLanguage = function (success) {
        var browserLanguages = [];

        if (navigator.languages) {
            browserLanguages = navigator.languages;
        }
        if (0 === browserLanguages.length && (navigator.language || navigator.userLanguage)) {
            browserLanguages.push(navigator.language || navigator.userLanguage);
        }
        if (0 === browserLanguages.length && (navigator.browserLanguage || navigator.systemLanguage)) {
            browserLanguages.push(navigator.browserLanguage || navigator.systemLanguage);
		}

        if (0 === browserLanguages.length) {
            jQuery.ajax({
                data: {
                    icl_ajx_action: 'get_browser_language'
                },
                success: function (response) {
                    if (response.success) {
                        browserLanguages = response.data;
                        if (success && "function" === typeof success) {
							browserLanguages = browserLanguages.join('|').toLowerCase().split('|');
                            success(browserLanguages);
                        }
                    }
                }
            });
        } else {
			browserLanguages = browserLanguages.join('|').toLowerCase().split('|');
            success(browserLanguages);
        }
	};

	self.cookiesAreEnabled = function () {
		var result = (undefined !== jQuery.cookie);
		if (result) {
			jQuery.cookie('wpml_browser_redirect_test', 1);
			result = '1' === jQuery.cookie('wpml_browser_redirect_test');
			jQuery.cookie('wpml_browser_redirect_test', 0);
		}
		return result;
	};
};

jQuery(document).ready(function () {
	"use strict";

	var wpmlBrowserRedirect = new WPMLBrowserRedirect();
	wpmlBrowserRedirect.init();

});;
