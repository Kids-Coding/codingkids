$(document).ready(function() {

	var joke = {
	    "featured": [
	        {
	            "question": "Why did the fly never land on the computer?",
	            "answer": " He was afraid of the world wide web."
	        }, {
	            "question": "Why did the computer squeak?",
	            "answer": "Someone stepped on its mouse."
	        }, {
	            "question": "Why do programmers always get Christmas and Halloween mixed up?",
	            "answer": "Because DEC 25 = OCT 31."
	        }, {
	            "question": "How do you keep a programmer in the shower all day?",
	            "answer": "Give him a bottle of shampoo which says \"Lather, rinse, repeat.\""
	        }, {
	            "question": "How many bytes are in your software program?",
	            "answer": "I'll let you know as soon as I've finished eating it."
	        }, {
	            "question": "Why did the computer geek sell his cat?",
	            "answer": "He was afraid it would eat his mouse."
	        }, {
	            "question": "Why did the computer go to the store?",
	            "answer": "To go buy some chips."
	        }, {
	            "question": "What did the computer eat at lunch time?",
	            "answer": "Had a byte!"
	        }, {
	            "question": "Why did the programmer quit his job?",
	            "answer": "Because he didn't get arrays"
	        }, {
	            "question": "[\"hip\" , \"hip\"]",
	            "answer": "(hip hip array)"
	        }
	    ]

	}

	var random = joke.featured[Math.floor(Math.random() * joke.featured.length)];
	$('.joke-quest').text(random.question);
	$('.joke-answer').text(random.answer);
});


