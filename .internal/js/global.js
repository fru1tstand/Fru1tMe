/**
 * Written with love by Kodlee Yin.
 * 
 * Please don't take this, call it your own, and sell it. That would make me very sad.
 * Instead, take it, build upon it, and redestribute it for others to see and learn
 * and make the world a better place :)
 * 
 * Copyleft Fru1tMe, 2014
 * Changelog available at https://github.com/fru1tstand/Fru1tMe
 */

/**
 * Console
 * Provides basic interaction to the global console
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
	
	function log(message, logLevel) {
		//Create console entry and append to console
		var entry = document.createElement('div');
		var gConsole = document.getElementById('global-console');
		entry.innerHTML = escapeHtml(message);
		entry.classList.add("entry");
		entry.classList.add(LOG_LEVEL.getClass(logLevel));
		gConsole.appendChild(entry);
		
		//Truncate console if needed
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
		if (calcConsoleMargin > 0) return;
		gConsole.style.marginTop = calcConsoleMargin + "px";
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

	window.log = log;
	window.escapeHtml = escapeHtml;
	window.LOG_LEVEL = LOG_LEVEL;
} (this, document));