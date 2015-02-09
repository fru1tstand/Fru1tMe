(function(window, document, undefined) {
	var STATUS_NOT_LOADED = 0,
		STATUS_LOADING = 1,
		STATUS_LOADED = 2;
	var BOARD_LETTER_ID_PREFIX = "board-letter-";
	
	var dictionaryUrl = "/.site/php/Pages/tools/wordhero-cheat/dictionary.txt";
	var dictionary = null,
		dictionaryLoadStatus = STATUS_NOT_LOADED;
	
	var letterWorth = {
		A: 1,
		B: 3,
		C: 2,
		D: 2,
		E: 1,
		F: 4,
		G: 2,
		H: 2,
		I: 2,
		J: 9,
		K: 6,
		L: 2,
		M: 2,
		N: 2,
		O: 2,
		P: 2,
		Q: 999,
		R: 2,
		S: 2,
		T: 1,
		U: 2,
		V: 5,
		W: 6,
		X: 9,
		Y: 3,
		Z: 999
	};
	
	/**
	 * Loads the dictionary if it hasn't been loaded already
	 */
	function loadDictionary() {
		if (dictionaryLoadStatus >= STATUS_LOADED
				|| dictionary != null)
			return;
		
		dictionaryLoadStatus = STATUS_LOADING;
		var dictionaryLog = log("Loading the dictionary: Downloading... ");
		load(dictionaryUrl, function(xhr) {
			if (xhr.readyState != 4)
				return;
			
			if (xhr.status == 200) {
				dictionaryLog.innerHTML += "Complete. Processing... ";
				dictionary = xhr.responseText.split(" ");
				dictionaryLoadStatus = STATUS_LOADED;
				for (var i = 0; i < dictionary.length; i++)
					dictionary[i] = dictionary[i].toUpperCase();
				dictionaryLog.innerHTML += "Complete. Dictionary loaded."
			}
		});
	}
	
	function findWords() {
		//Make letter nodes and validation
		var diagraph = false;
		var letters = [];
		var wordsFound = 0;
		for (var i = 1; i <= 16; i++) {
			var letterElement = document.getElementById(BOARD_LETTER_ID_PREFIX + i);
			if (letterElement.value == "" || letterElement.value.length < 1) {
				displayMessage("Tile " + i + " is blank.");
				return;
			}
			if (letterElement.value.length > 2) {
				displayMessage("Tile " + i + " shouldn't have more than 2 letters");
				return;
			}
			letterElement.value = letterElement.value.toUpperCase();
			if (letterElement.value.length == 2 && letterElement.value != "QU") {
				if (diagraph) {
					displayMessage("On a diagraph board, only 1 tile has double letters");
					return;
				}
				
				diagraph = true;
			}
			
			letters.push(letterElement.value);
		}
		
		//Get the words
		document.getElementById('wh-wordlist').innerHTML = "";
		var findWordsWorker = new Worker("/.site/js/tools/wordhero-cheat-findwords-worker.js");
		var wordsFoundNode = document.getElementById('wh-words-found');
		findWordsWorker.onmessage = function(e) {
			if (addWordToWordList(e.data))
				wordsFound++;
			wordsFoundNode.innerHTML = wordsFound;
		};
		findWordsWorker.postMessage([dictionary, letters]);
	}

	function addWordToWordList(word) {
		var wordListElem = document.getElementById('wh-wordlist'),
			entryNode = document.createElement('tr'),
			wordNode = document.createElement('td'),
			pointsNode = document.createElement('td');
		
		word = word.substring(0, 1) + word.substring(1).toLowerCase();
		entryNode.appendChild(wordNode);
		entryNode.appendChild(pointsNode);
		
		var wordPoints = 0,
			bonusMultiplier = 0,
			letterCount = 0;
		word.toUpperCase().split("").forEach(function(letter) {
			letterCount++;
			if (letterCount > 4)
				bonusMultiplier += 0.5;
			wordPoints += letterWorth[letter];
		});
		wordPoints += Math.floor(wordPoints * bonusMultiplier);
		
		wordNode.innerHTML = word;
		pointsNode.innerHTML = wordPoints;
		
		var displayWords = wordListElem.children;
		for (var i = 0; i < displayWords.length; i++) {
			var wordTdNodes = displayWords[i].getElementsByTagName("td");
			if (wordTdNodes[0].innerHTML == word)
				return false;
			if (parseInt(wordTdNodes[1].innerHTML) < wordPoints) {
				wordListElem.insertBefore(entryNode, wordTdNodes[0].parentNode);
				return true;
			}
		}
		wordListElem.appendChild(entryNode);
		return true;
	}
	
	function displayMessage(message) {
		var messageElem = document.createElement('div');
		messageElem.innerHTML = message;
		messageElem.onclick = messageOnClick;
		document.getElementById('wh-messages').appendChild(messageElem);
	}
	
	function messageOnClick() {
		document.getElementById('wh-messages').removeChild(this);
	}
	
	
	deferExecution(function() {
		loadDictionary();
		
		document.getElementById('wh-words-found').onclick = findWords;
	});
} (this, document));