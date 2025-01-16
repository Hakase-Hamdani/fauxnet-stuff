        /*
		  //This portion of the code was generated with the assistance of an AI model (OpenAI's ChatGPT), and therefore should be in public domain.
		  
          toggleVisibility() - For toggling visibility of an element at button click, while also changing the text in the button.
          usage:
          toggleVisibility('buttonId', 'paragraphToShowId', 'TextWhenParagraphIsShown', 'TextWhenParagraphIsHidden');
          
          unhideText() - Similar to toggleVisibilty(), but only for regular, non-button elements, works without changing the text in the activator element.
          usage:
          unhideText('clickableId', 'targetToToggleId');

          startBlip() -  To create blipping text with a predetermined interval.
          usage:
          startBlip(`targetId`, interval(integer, in ms))

          cycleText() -  To create "glitch" effect where an text element cycle through other texts. 
          usage:
          cycleText('targetId', ["text1", "text2", "text3", "...."]);

          startFlicker() - To make an elemet flicker with an interval.
          usage:
          startFlicker('targetElementId', interval(integer, in ms));


		  The clause underneath is to cover jurisdiction where Public Domain is not recognized.
          Written in 2024 by Pengkhayal Pasif/Muhammad Hamdani/Hakase-Hamdani

		  To the extent possible under law, the author(s) have dedicated all copyright and related and neighboring rights to this software to the public domain worldwide. This software is distributed without any warranty.
		  You should have received a copy of the CC0 Public Domain Dedication along with this software. If not, see <http://creativecommons.org/publicdomain/zero/1.0/>. 
		  */

          function toggleVisibility(buttonId, paragraphId, showText, hideText) {
            const button = document.getElementById(buttonId);
            const paragraphs = document.getElementById(paragraphId);
            button.addEventListener('click', () => {
              if (paragraphs.classList.contains('hidden')) {
                paragraphs.classList.remove('hidden'); // Unhide paragraphs
                button.textContent = showText; // Change button text to 'showText'
              } else {
                paragraphs.classList.add('hidden'); // Hide paragraphs
                button.textContent = hideText; // Change button text to 'hideText'
              }
            });
          }
          
          function unhideText(clickableId, targetId) {
            const clickableText = document.getElementById(clickableId);
            const targetText = document.getElementById(targetId);
            clickableText.addEventListener('click', () => {
              targetText.classList.toggle('hidden');
            });
          }

          function startBlip(id, interval = 500) {
            const element = document.getElementById(id);
            if (!element) return;
            // Set an interval to toggle visibility
            setInterval(() => {
              element.classList.toggle('hidden');
            }, interval);
          }

          function cycleText(elementId, words, intervalBetweenWords = 500, letterChangeSpeed = 75) {
            const textElement = document.getElementById(elementId);
            const letters = "abcdefghijklmnopqrstuvwxyz";
            let currentIndex = 0;
            let currentWord = words[currentIndex].split('');
            let isCycling = false;

            function changeLetter(nextWord) {
              isCycling = true;
              const targetWord = nextWord.split('');
              const maxLength = Math.max(currentWord.length, targetWord.length);
              for (let i = 0; i < maxLength; i++) {
                if (!currentWord[i]) currentWord[i] = letters[Math.floor(Math.random() * letters.length)];
                setTimeout(() => {
                  currentWord[i] = targetWord[i] || '';
                  textElement.textContent = currentWord.join('');
                  if (i === maxLength - 1) {
                    isCycling = false;
                  }
                }, i * letterChangeSpeed);
              }
            }

            function loopWords() {
              if (!isCycling) {
                const nextIndex = (currentIndex + 1) % words.length;
                const nextWord = words[nextIndex];
                changeLetter(nextWord);
                setTimeout(() => {
                  currentIndex = nextIndex;
                  currentWord = words[currentIndex].split('');
                }, letterChangeSpeed * Math.max(currentWord.length, words[nextIndex].length) + intervalBetweenWords);
              }
            }
            setInterval(loopWords, intervalBetweenWords + letterChangeSpeed * Math.max(...words.map(word => word.length)));
          }

          function startFlicker(elementId, flickerSpeed = 100) {
            const element = document.getElementById(elementId);
            if (!element) {
              console.error(`Element with ID "${elementId}" not found.`);
              return;
            }
          
            let isVisible = true;
          
            function flicker() {
              isVisible = !isVisible;
              element.style.backgroundColor = isVisible ? '#fa8072' : '#000000'; // Toggle color
            }
          
            setInterval(flicker, flickerSpeed);
          }          