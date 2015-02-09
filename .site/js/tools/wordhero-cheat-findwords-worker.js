//LetterNode "class"
function LetterNode(letter) {
	var self = this;
	
	this.adjacentLetters = [];
	this.letter = letter;
	this.isUsed = false;
	
	/**
	 * Sets the letter for the current node
	 */
	this.setLetter = function(letter) {
		self.letter = letter;
	};
	
	/**
	 * Sets a node near this one
	 */
	this.setNear = function(node) {
		self.adjacentLetters.push(node);
	};
}

function findWordsInNode(node, wordPath, dictionary) {
	//Is our current node empty or in use?
	if (node == null || node.isUsed)
		return;
	
	//Set it as used and try to find words
	node.isUsed = true;
	wordPath += node.letter;
	var newDictionary = [];
	dictionary.forEach(function(word) {
		if (word == wordPath) {
			postMessage(word);
		} else if (word.indexOf(wordPath) == 0) {
			newDictionary.push(word);
		}
	});
	
	//Check if words remain.
	if (newDictionary.length > 0) {
		node.adjacentLetters.forEach(function(childNode) {
			findWordsInNode(childNode, wordPath, newDictionary);
		});
	}
	
	node.isUsed = false;
}

//Worker methods
onmessage = function(e) {
	if (!e.data || e.data.length < 2) //0: dictionary; 1: words
		close();
	
	var letterNodes = {};
	for (var i = 1; i <= 16; i++) {
		letterNodes[i] = new LetterNode(e.data[1][i - 1]);
	}
	
	/**
	 * 1  2  3  4
	 * 5  6  7  8
	 * 9  10 11 12
	 * 13 14 15 16
	 */
	//Bind letter nodes to each other
	
	//4 Corners
	letterNodes[1].setNear(letterNodes[2]);
	letterNodes[1].setNear(letterNodes[6]);
	letterNodes[1].setNear(letterNodes[5]);
	
	letterNodes[4].setNear(letterNodes[8]);
	letterNodes[4].setNear(letterNodes[7]);
	letterNodes[4].setNear(letterNodes[3]);
	
	letterNodes[13].setNear(letterNodes[9]);
	letterNodes[13].setNear(letterNodes[10]);
	letterNodes[13].setNear(letterNodes[14]);
	
	letterNodes[16].setNear(letterNodes[15]);
	letterNodes[16].setNear(letterNodes[11]);
	letterNodes[16].setNear(letterNodes[12]);
	
	//4 sides
		//top
	[2, 3].forEach(function(i) {
		//Left and right
		letterNodes[i].setNear(letterNodes[i - 1]);
		letterNodes[i].setNear(letterNodes[i + 1]);
		//Bottom {left, middle, right}
		letterNodes[i].setNear(letterNodes[i + 3]);
		letterNodes[i].setNear(letterNodes[i + 4]);
		letterNodes[i].setNear(letterNodes[i + 5]);
	});
		//right
	[8, 12].forEach(function(i) {
		//Top and bottom
		letterNodes[i].setNear(letterNodes[i - 4]);
		letterNodes[i].setNear(letterNodes[i + 4]);
		//left {top, middle, bottom}
		letterNodes[i].setNear(letterNodes[i - 5]);
		letterNodes[i].setNear(letterNodes[i - 1]);
		letterNodes[i].setNear(letterNodes[i + 3]);
	});
		//bottom
	[14, 15].forEach(function(i) {
		//left and right
		letterNodes[i].setNear(letterNodes[i + 1]);
		letterNodes[i].setNear(letterNodes[i - 1]);
		//top {left, middle, right}
		letterNodes[i].setNear(letterNodes[i - 5]);
		letterNodes[i].setNear(letterNodes[i - 4]);
		letterNodes[i].setNear(letterNodes[i - 3]);
	});
		//left
	[5, 9].forEach(function(i) {
		//Top and bottom
		letterNodes[i].setNear(letterNodes[i - 4]);
		letterNodes[i].setNear(letterNodes[i + 4]);
		//right {top, middle, bottom{
		letterNodes[i].setNear(letterNodes[i - 3]);
		letterNodes[i].setNear(letterNodes[i + 1]);
		letterNodes[i].setNear(letterNodes[i + 5]);
	});
	
	//Center pieces
	[6, 7, 10, 11].forEach(function(i) {
		//top {left, middle, right}
		letterNodes[i].setNear(letterNodes[i - 5]);
		letterNodes[i].setNear(letterNodes[i - 4]);
		letterNodes[i].setNear(letterNodes[i - 3]);
		
		//middle {left, right}
		letterNodes[i].setNear(letterNodes[i - 1]);
		letterNodes[i].setNear(letterNodes[i + 1]);
		
		//bottom {left, middle, right}
		letterNodes[i].setNear(letterNodes[i + 3]);
		letterNodes[i].setNear(letterNodes[i + 4]);
		letterNodes[i].setNear(letterNodes[i + 5]);
	});
	
	//Finally, find the words
	
	for (index in letterNodes) {
		if (!letterNodes.hasOwnProperty(index))
			continue;
		
		findWordsInNode(letterNodes[index], "", e.data[0]);
	}
};