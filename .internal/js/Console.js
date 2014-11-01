/**
 * Kodlee Yin
 * Console.js
 * Defines methods to itneract with the global console
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
		var entry = document.createElement('div');
		entry.innerHTML = message;
		entry.classList.add("entry");
		entry.classList.add(LOG_LEVEL.getClass(logLevel));
		
		var console = document.getElementById('global-console');
		console.appendChild(entry);
		
		var textHeight = 0;
		var consoleEntries = console.getElementsByTagName('div');
		for (key in consoleEntries) {
			textHeight += consoleEntries[key].offsetHeight;
		}
		
		console.log(textHeight);
	}
	
	window.log = log;
	window.LOG_LEVEL = LOG_LEVEL;
} (this, document));