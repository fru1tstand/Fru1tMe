/**
 * Javascript rollover. When HTML/CSS just isn't enough.
 */
(function(window, document, undefined) {
	var rolloverNodeList = document.getElementsByClassName('rollover');
	for (var i = 0; i < rolloverNodeList.length; i++) {
		//Mouseover, show the node hinted
		rolloverNodeList[i].onmouseover = function() {
			if (!this.attributes['data-rollover'])
				return;
			var rolloverNode = document.getElementById(this.attributes['data-rollover'].value);
			if (!rolloverNode)
				return;
			
			rolloverNode.style.display = "block";
		};
		rolloverNodeList[i].onmouseout = function() {
			if (!this.attributes['data-rollover'])
				return;
			var rolloverNode = document.getElementById(this.attributes['data-rollover'].value);
			if (!rolloverNode)
				return;
			
			rolloverNode.style.display = "";
		}
	}
} (this, document));