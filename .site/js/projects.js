/**
 * Everything that /projects uses
 */
(function(window, document, undefined) {
	//We can never have more than 1 info open, so for performace, we'll keep track of the
	//single info that's open.
	var openInfo = null;
	
	//Initial binding
	var rolloverNodeList = document.getElementsByClassName('rollover');
	for (var i = 0; i < rolloverNodeList.length; i++)
		rolloverNodeList[i].onclick = onRolloverClick;
	
	//clear when anything else is clicked
	document.getElementById('global-content').onclick = function() {
		if (openInfo)
			openInfo.style.display = "none";
		openInfo = null;
	};
	
	function onRolloverClick(e) {
		//Prevent clickthrough
		e.stopPropagation();
		
		if (openInfo)
			openInfo.style.display = "none";
		
		//Show ours
		if (!this.attributes['data-rollover'])
			return;
		var rolloverNode = document.getElementById(this.attributes['data-rollover'].value);
		if (!rolloverNode)
			return;
		rolloverNode.style.display = "block";
		rolloverNode.onclick = function(e) {
			//We don't want it disappearing if you click inside the info box
			e.stopPropagation();
		}
		
		openInfo = rolloverNode;
	}
} (this, document));