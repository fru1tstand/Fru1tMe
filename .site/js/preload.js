/**
 * This is a light file that defines everything needed before
 * everything else had been loaded
 */
(function(window, document, undefined) {	
	/**
	 * Temp log
	 */
	var logList = [];
	function log(s) {
		logList.push(s);
	}
	function getTempLogList() {
		window.getTempLogList = undefined;
		return logList;
	}
	window.log = log;
	window.getTempLogList = getTempLogList;
	
	/**
	 * Deferred execution
	 */
	var fnList = [];
	var hasExecuted = false;
	function deferExecution(fn) {
		if (hasExecuted) {
			window.log("Ignoring deferral of " + fn)
			fn();
		} else {
			window.log("Deferring execution of " + fn)
			fnList.push(fn);
		}
	}
	function execute() {
		window.log("Executing deferred calls")
		hasExecuted = true;
		for (var i = 0; i < fnList.length; i++) {
			fnList[i]();
		}
		this.fnList = null;
	}
	window.deferExecution = deferExecution;
	window.deferExecute = execute;

} (this, document));