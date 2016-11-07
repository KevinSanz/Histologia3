window.onload = function(){

		function trace(t){
        	console.log(t);

    	}
    	var divs = document.getElementById("wrapper").getElementsByTagName("div");
    	for(var i = 0; i < divs.length; i++){
    		divs[i].style.position = "absolute";
    		divs[i].style.display = "block";
    	}

        var popUpImage = document.getElementById("popUpImage");
        var popUpHeadline = document.getElementById("popUpHeadline");
        var popUpBody = document.getElementById("popUpBody");
        var popUp = document.getElementById("popUp");
        popUp.style.display = "none";
        TweenMax.to(popUp, 0, {alpha: 0, rotationY:-180});
    	var cardWidth = 90;
    	var cardHeight = 90;
    	var spacingRight = 19;
    	var spacingTop = 23;
    	var numColumns = 4;
    	
    	var gameHolder = document.getElementById("game");
    	var anim = [];
    	var cards = [
    		{
    			id: 1,
    			headline: "Headline 1",
    			subhead: "",
    			copy: "",
    			image: arrayJS[0]['Direccion'],
                        largeImage: arrayJS[0]['Direccion'],
    			url: ""
    		},
            {
                id: 2,
                headline: "Headline 2",
                subhead: "",
                copy: "",
                image: arrayJS[1]['Direccion'],
                largeImage: arrayJS[1]['Direccion'],
                url: ""
            },
            {
                id: 3,
                headline: "Headline 3",
                subhead: "",
                copy: "",
                image: arrayJS[2]['Direccion'],
                largeImage: arrayJS[2]['Direccion'],
                url: ""
            },
            {
                id: 4,
                headline: "Headline 4",
                subhead: "",
                copy: "",
                image: arrayJS[3]['Direccion'],
                largeImage: arrayJS[3]['Direccion'],
                url: ""
            },
            {
                id: 5,
                headline: "Headline 5",
                subhead: "",
                copy: "",
                image: "imagenes/imagen00a23jpg",
                largeImage: "imagenes/imagen002a3.jpg",
                url: ""
            },
            {
                id: 6,
                headline: "Headline 6",
                subhead: "",
                copy: "",
                image: "mary.jpg",
                largeImage: "mary_lrg.jpg",
                url: ""
            }
    	];

        var firstClick = null;
        var secondClick = null;
        var matchedID;

        function flipCardsOver(){
            TweenMax.staggerTo(anim, flipTime, {rotationY:-180, repeat:1, yoyo:true}, 0.1);
        }

        function shuffleArray(array) {
            for (var i = array.length - 1; i > 0; i--) {
                var j = Math.floor(Math.random() * (i + 1));
                var temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
            return array;
        }

        var duplicateCards = createNewArray(cards);
        var totalCards = cards.concat(duplicateCards);
        shuffleArray(totalCards);

        var tl = new TimelineLite({onComplete:flipCardsOver});
            
    	for(var i = 0; i < totalCards.length; i++){
    		var cardWrapper = document.createElement("div");
    			cardWrapper.id = "cardWrapper" + i;
                cardWrapper.thisID = i;
                cardWrapper.className = "cardWrapper";
    			cardWrapper.style.position = "absolute";
                cardWrapper.style.overflow = "hidden";
    			cardWrapper.style.width =  cardWidth + "px";
	    		cardWrapper.style.height = cardHeight + "px";
    			cardWrapper.style.top = (parseInt(i / numColumns) * (cardHeight + spacingTop)) + "px";
	    		cardWrapper.style.left = ((i % numColumns) * (cardWidth + spacingRight)) + "px";
                cardWrapper.style.opacity = 0;
    			gameHolder.appendChild(cardWrapper);

    		var card = document.createElement("div");
    			card.id = "card" + i;
    			cardWrapper.appendChild(card);

    		var front = document.createElement("div");
				front.id = "front";
				front.style.position = "absolute";
        front.className = "front";
        front.style.width =  cardWidth + "px";
	    	front.style.height = cardHeight + "px";
	    	//front.innerHTML = "<img src=" + backofCard + ">";
        front.innerHTML = "<p></p>"
	    	card.appendChild(front);

	    	var back = document.createElement("div");
				back.id = "back";
				back.style.position = "absolute";
        back.className = "back";
        back.style.width =  cardWidth + "px";
	    	back.style.height = cardHeight + "px";
        back.innerHTML = "<p></p>";
	    	back.innerHTML = '<img src="' + totalCards[i].image + '" style="max-height: 290px; max-width: 280px;" >';
	    	card.appendChild(back); 
 
	    	totalCards[i].cardWrapper = cardWrapper;
	    	totalCards[i].card = card;
	    	totalCards[i].back = back;
	    	totalCards[i].front = front;

	    	anim.push(card);

	    	TweenLite.set(totalCards[i].cardWrapper, {perspective:800});
			TweenLite.set(totalCards[i].card, {transformStyle:"preserve-3d"});
			TweenLite.set(totalCards[i].back, {rotationY:-180});
			TweenLite.set([totalCards[i].back, totalCards[i].front], {backfaceVisibility:"hidden"});

	    	cardWrapper.style.cursor = "pointer";            
            cardWrapper.addEventListener('click', thisClick, false);

            insertionTime = (i * .1);
            tl.add(TweenLite.to(totalCards[i].cardWrapper, .5, {alpha: 1}), insertionTime);

    	}

        function thisClick(){
            this.style.cursor = "default";
            this.removeEventListener('click', thisClick, false);
            //flipCard(this.id, 180);
            flipCard(this.thisID, 180);
        }

        tl.totalDuration(2);

        TweenLite.set(popUp, {perspective:800});
        TweenLite.set(popUp, {transformStyle:"preserve-3d"});

        function flipCard(id, rotation){
            if(firstClick != null && secondClick == null){
                secondClick = id;
                checkpopUps();
            }else if (firstClick == null){
                firstClick = id;
            }
            TweenLite.to(totalCards[id].card , 1.2, {rotationY:rotation, ease:Back.easeOut});
        }

        function checkpopUps(){
            //trace(secondClick + " " + firstClick)
            if(totalCards[secondClick].id == totalCards[firstClick].id){
                trace("MATCH");
                popUpImage.innerHTML = '<img src=' + totalCards[firstClick].largeImage + ' style="max-height: 290px; max-width: 280px;" >'
                popUpHeadline.innerHTML = "<p>" + totalCards[firstClick].headline + " " + totalCards[firstClick].subhead + "</p>"
                popUpBody.innerHTML = "<p>" + totalCards[firstClick].copy +"</p>"
                TweenMax.to(popUp, 1.25, {alpha: 1, rotationY:0, delay: .35, ease:Back.easeOut, onStart:function(){popUp.style.display = "block"}});
                //remove from anim array so cards will not flip back if MATCH was made.
                anim.splice(anim.indexOf(document.getElementById("card" + firstClick)), 1);
                anim.splice(anim.indexOf(document.getElementById("card" + secondClick)), 1);
                matchedID = firstClick;
            }else{
                trace("MIS-MATCH");
                totalCards[firstClick].cardWrapper.style.cursor = "pointer";  
                totalCards[firstClick].cardWrapper.addEventListener('click', thisClick, false);
                totalCards[secondClick].cardWrapper.style.cursor = "pointer"; 
                totalCards[secondClick].cardWrapper.addEventListener('click', thisClick, false);   
                TweenMax.staggerTo(anim, 1, {rotationY:0, delay: .5});
            }

            firstClick = null;
            secondClick = null;
        }

        popUp.style.cursor = "pointer";
        popUp.onclick = function(){
            TweenMax.to(popUp, .75, {alpha: 0, rotationY:-180, ease:Back.easeOut, onComplete:function(){popUp.style.display = "none";}});
            TweenMax.staggerTo(anim, 1, {rotationY:0, delay: .5});

            if(totalCards[matchedID].url !== ""){
                window.open(totalCards[matchedID].url);
            }
        }

        function createNewArray(arr){
            var tmp = [];
            for (var i = 0; i<arr.length; i++){
                tmp.push(clone(arr[i]));
            }
           // trace("tmp.length: " + tmp.length)
            return tmp;
        }

        function clone(obj) {
           var target = {};
           for (var i in obj) {
                if (obj.hasOwnProperty(i)) {
                    //console.log(i)
                    target[i] = obj[i];
                }
           }
            return target;
        }

    }