/**
 * Written with love by Kodlee Yin.
 * 
 * Hi! Feel free to copy/paste/modify/redistribute all you like.
 * Just please leave it free and open so that others may learn and
 * make the world a better place :)
 * 
 * Copyleft Fru1tMe, 2014
 * Changelog available at https://github.com/fru1tstand/Fru1tMe
 */

/**
 * Utility methods
 */
(function(window, document, undefined) {
	function longTextAbbr(text) {
		return text.substr(0, 200) + "...";
	}
	
	window.longTextAbbr = longTextAbbr;
} (this, document));

/**
 * Console, Background
 * Provides basic interaction to the global console
 * Provides methods to manipulate the page's background
 */
(function(window, document, undefined) {
	var LOG_LEVEL = Object.freeze({
		NORMAL: "none",
		ERROR: "red",
		INFO: "blue",
		SUCCESS: "green",
		
		getClass: function(logLevel) {
			if (logLevel == this.ERROR) return this.ERROR;
			if (logLevel == this.INFO) return this.INFO;
			if (logLevel == this.SUCCESS) return this.SUCCESS;
			return this.NORMAL;
		}
	});
	var CONSOLE_POSITION = Object.freeze({
		FULLSCREEN: "anchor-fullscreen",
		TOP_LEFT: "anchor-upper-left",
		TOP_RIGHT: "anchor-upper-right",
		BOTTOM_LEFT: "anchor-lower-left",
		BOTTOM_RIGHT: "anchor-lower-right",
		
		getClass: function(consolePosition) {
			if (consolePosition == this.TOP_LEFT) return this.TOP_LEFT;
			if (consolePosition == this.TOP_RIGHT) return this.TOP_RIGHT;
			if (consolePosition == this.BOTTOM_LEFT) return this.BOTTOM_LEFT;
			if (consolePosition == this.BOTTOM_RIGHT) return this.BOTTOM_RIGHT;
			return this.FULLSCREEN;
		}
	});
	
	window.LOG_LEVEL = LOG_LEVEL;
	window.CONSOLE_POSITION = CONSOLE_POSITION;
	
	/**
	 * Adds a log message to the console with the passed LOG_LEVEL
	 */
	function log(message, logLevel) {
		//Create console entry and append to console
		var entry = document.createElement('div');
		var gConsole = document.getElementById('global-console');
		entry.innerHTML = escapeHtml(message);
		entry.classList.add(LOG_LEVEL.getClass(logLevel));
		gConsole.appendChild(entry);
		
		//Truncate console entries if needed
		var textHeight = 0;
		var consoleEntries = gConsole.getElementsByTagName('div');
		for (var key = consoleEntries.length; key >= 0; key--) {
			if (!consoleEntries.hasOwnProperty(key)) continue;
			if (textHeight > gConsole.offsetHeight) {
				consoleEntries[key].parentElement.removeChild(consoleEntries[key]);
				continue;
			}
			textHeight += consoleEntries[key].offsetHeight;
		}
		
		//Have the bottom flush when enough entries exist
		var calcConsoleMargin = gConsole.offsetHeight - textHeight;
		if (calcConsoleMargin < 0) gConsole.style.marginTop = calcConsoleMargin + "px";
		
		//We allow the caller to have the entry so that it may manipulate the content later
		return entry;
	}
	window.log = log;
	//Handle pre-method loggings
	var preLogs = getTempLogList();
	for (var i = 0; i < preLogs.length; i++) {
		log(preLogs[i]);
	}
	
	
	/**
	 * Credit: bjornd
	 * http://stackoverflow.com/questions/6234773/can-i-escape-html-special-chars-in-javascript
	 */
	function escapeHtml(unsafe) {
	    return unsafe
	         .replace(/&/g, "&amp;")
	         .replace(/</g, "&lt;")
	         .replace(/>/g, "&gt;")
	         .replace(/"/g, "&quot;")
	         .replace(/'/g, "&#039;");
	 }
	
	function resizeConsole(position) {
		var consoleClass = CONSOLE_POSITION.getClass(position);
		log("Re-anchoring console to \"" + consoleClass + "\"");
		
		var console = document.getElementById('global-console');
		console.classList.remove(CONSOLE_POSITION.TOP_LEFT);
		console.classList.remove(CONSOLE_POSITION.TOP_RIGHT);
		console.classList.remove(CONSOLE_POSITION.BOTTOM_LEFT);
		console.classList.remove(CONSOLE_POSITION.BOTTOM_RIGHT);
		
		console.classList.add(consoleClass);
	}

	window.escapeHtml = escapeHtml;
	window.resizeConsole = resizeConsole;
} (this, document));

/**
 * Nav specific
 * Ajax
 */
(function(window, document, undefined) {
	function navForceOpen() {
		log("Forcing navigation circle open");
		document.getElementById("global-nav").classList.add("hover");
	}
	function navForceClose() {
		log("Disabling forced open navigation");
		document.getElementById("global-nav").classList.remove("hover");
	}
	function navPeek(duration) {
		log("Peeking navigation circle...");
		navForceOpen();
		log("Set peek duration for " + duration + "ms");
		setTimeout(navForceClose, duration);
	}
	
	window.navForceOpen = navForceOpen;
	window.navForceClose = navForceClose;
	window.navPeek = navPeek;
} (this, document));

/**
 * Main window first loads
 * Binds and stuff
 */
(function(window, document, undefined) {
	//Remove the noscripts
	log("Javascript enabled! Removing noscript from flow.")
	var noscriptTags = document.getElementsByTagName("noscript");
	for (var k in noscriptTags) {
		if (!noscriptTags.hasOwnProperty(k)) continue;
		log("Found and removed " 
				+ longTextAbbr(noscriptTags[k].innerHTML));
		noscriptTags[k].parentElement.removeChild(noscriptTags[k]);
	}
	
	deferExecution(function() {
		log("Was going to peek nav. But that's getting annoying in the dev builds");
		//navPeek(2000);
	});
	window.onload = function() deferExecute();
} (this, document));
