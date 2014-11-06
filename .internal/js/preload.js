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
		return logList;
	}
	window.log = log;
	window.getTempLogList = getTempLogList;
	
	/**
	 * Deferred execution
	 */
	var fnList = [];
	function deferExecution(fn) {
		log("Deferring execution of " + fn)
		fnList.push(fn);
	}
	function execute() {
		for (var i = 0; i < fnList.length; i++) {
			fnList[i]();
		}
	}
	window.deferExecution = deferExecution;
	window.deferExecute = execute;

} (this, document));