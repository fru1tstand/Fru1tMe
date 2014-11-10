(function(window, document, undefined) {
	var batterySaver = false;
	
	var resizeLogElement = null,
		resizeLogTimer = null;
	
	var ballSize = 6,
		ballPadding = 2,
		ballRows = 50,
		ballCols = 35,
		waveHeight = 20,
		wavesPerRow = 1,
		wavesPerCol = 1;
	
	var canvas = document.getElementById("home-render-window"),
		ctx = canvas.getContext("2d");
	canvas.height = canvas.clientHeight;
	canvas.width = canvas.clientWidth;
	
	var lastFrameTime = 0,
		currentFrameTime = 0,
		deltaFrameTime = 0,
		drawOffsetX = canvas.width / 2 - 200,
		drawOffsetY = canvas.height / 2,
		ballSpacing = ballSize * 2 + ballPadding;
	
	var xPos = 0,
		yPos = 0,
		zPos = 0;
	
	function resize() {
		if (resizeLogElement == null) resizeLogElement = log("");
		if (resizeLogTimer != null) clearTimeout(resizeLogTimer);
		resizeLogTimer = setTimeout(function() {
			resizeLogElement = null;
			resizeLogTimer = null;
		}, 5000);
		resizeLogElement.innerHTML = "Resizing canvas to (" +
				canvas.clientWidth + ", " + canvas.clientHeight + ")";
		canvas.height = canvas.clientHeight;
		canvas.width = canvas.clientWidth;
		drawOffsetX = canvas.width / 2 - 200;
		drawOffsetY = canvas.height / 2;
	}
	function drawFrame() {
		currentFrameTime = Date.now();
		deltaFrameTime = currentFrameTime - lastFrameTime;
		
		xPos += deltaFrameTime / 3151;
		yPos += deltaFrameTime / 1333;
		zPos += deltaFrameTime / 642;
		xPos %= 2 * Math.PI;
		yPos %= 2 * Math.PI;
		zPos %= 2 * Math.PI;
		
		ctx.clearRect(0, 0, canvas.width, canvas.height);
		ctx.fillStyle = getColor(deltaFrameTime);
		
		for (var j = 0; j < ballRows; j++) {
			for (var i = 0; i < ballCols; i++) {
				ctx.beginPath();
				ctx.arc(drawOffsetX 
							+ ballSpacing * (i - ballCols / 2) * Math.sin(xPos)
							+ waveHeight * Math.sin(i / ballCols * 2 * Math.PI * wavesPerRow + zPos)
							+ waveHeight * Math.sin(j / ballCols * 2 * Math.PI * wavesPerCol + zPos)
							+ ballSpacing * j,
							//+ 150 * Math.cos(yPos * 2), 
						drawOffsetY 
							+ ballSpacing * (i - ballCols / 2) * Math.cos(xPos)
							+ waveHeight * Math.cos(i / ballCols * 2 * Math.PI * wavesPerRow  + zPos)
							+ waveHeight * Math.cos(j / ballCols * 2 * Math.PI * wavesPerCol  + zPos)
							+ ballSpacing * j,
							//+ 200 * Math.sin(yPos), 
						ballSize, 0, 2 * Math.PI);
				ctx.fill();
			}
		}
		
		lastFrameTime = currentFrameTime;
		if (batterySaver) {
			setTimeout(drawFrame, 2000);
		} else {
			requestAnimationFrame(drawFrame);
		}
	}
	
	function Color() {
		var self = this;
		this.value = 0;
		this.target = 0;
		this.rate = 0;
		
		this.setNew = function() {
			self.target = rndBit();
			self.rate = rndRate();
		}
		
		this.update = function(deltaTime) {
			var delta = deltaTime * self.rate;
			if (self.value > self.target) {
				self.value -= delta;
				if (self.value <= self.target) self.setNew();
			} else {
				self.value += delta;
				if (self.value >= self.target) self.setNew();
			}
			if (self.value < 0) self.value = 0;
			if (self.value > 255) self.value = 255;
			
			
		}
		this.get = function() {
			return self.value;
		}
		
		this.setNew();
	}
	
	//RGB
	var colors = [ new Color(), new Color(), new Color() ];
	function getColor(deltaTime) {
		for (var i = 0; i < 3; i++) {
			colors[i].update(deltaTime);
		}
		return "rgb(" 
				+ Math.round(colors[0].get())
				+ "," + Math.round(colors[1].get())
				+ "," + Math.round(colors[2].get())
				+ ")";
	}
	function rndBit() {
		return Math.random() * 255;
	}
	function rndRate() {
		var rnd = Math.random() * .1;
		return (rnd == 0) ? .001 : rnd;
	}
	deferExecution(function() {
		lastFrameTime = Date.now();
		drawFrame();
	});
	window.onresize = resize;
} (this, document));