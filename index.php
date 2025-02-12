<?php

include 'config.php'; 
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Will You Be My Valentine?</title>
    <style>
        /* Soft Pastel Romantic Theme */
        body {
            cursor: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="pink" d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>'), auto;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4); /* Soft gradient */
            color: #5a5a5a; /* Soft gray text */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px); /* Blur effect */
            position: relative;
            overflow: hidden;
        }

        h1 {
            color: #ff6f61; /* Soft coral */
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 25px; /* Rounded buttons */
            cursor: pointer;
            transition: all 0.3s ease;
             background: #ff6f61; /* Same soft coral as Yes button */
    color: white; /* White text */
    font-size: 1.2rem;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    
    box-shadow: 0 4px 10px rgba(255, 111, 97, 0.5); /* Subtle glow */
        }

        #yesBtn {
            background: #ff6f61; /* Soft coral */
            color: white;
        }

        #noBtn {
            background: #a8e6cf; /* Soft mint */
            color: #5a5a5a;
        }

        #message {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #ff6f61;
            display: none;
        }

        .heart {
            position: absolute;
            top: 100%;
            font-size: 24px;
            animation: pop 2s forwards;
            color: #ff6f61; /* Soft coral */
        }

        @keyframes pop {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-300px);
                opacity: 0;
            }
        }

        .question {
            display: none;
        }

        .question.active {
            display: block;
        }

        .large-button {
           background: #ff6f61; /* Same soft coral as Yes button */
    color: white; /* White text */
    font-size: 1.2rem;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    position: relative;
    box-shadow: 0 4px 10px rgba(255, 111, 97, 0.5); /* Subtle glow */
        }

        .cryEmoji {
            position: absolute;
            bottom: 0;
            font-size: 24px;
            opacity: 1;
            animation: floatUp 2.5s forwards ease-in-out;
            pointer-events: none;
            color: #ff6f61; /* Soft coral */
        }

        @keyframes floatUp {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-300px);
                opacity: 0;
            }
        }

        /* Glowing Effect for Buttons */
        button:hover {
            filter: brightness(1.1);
             transform: scale(1.1);
    box-shadow: 0 0 15px rgba(255, 111, 97, 0.8); /* Brighter glow */
    
        }

        /* Background Animation */
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .floating-heart {
            position: absolute;
            font-size: 24px;
            color: #ff6f61;
            animation: float 3s infinite ease-in-out;
        }
#noBtn3 {
    background: #ff6f61; /* Same soft coral as Yes button */
    color: white; /* White text */
    font-size: 1.2rem;
    font-weight: bold;
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    position: relative;
    box-shadow: 0 4px 10px rgba(255, 111, 97, 0.5); /* Subtle glow */
}

/* Hover Effect - Glow & Expansion */
#noBtn3:hover {
    transform: scale(1.1);
    box-shadow: 0 0 15px rgba(255, 111, 97, 0.8); /* Brighter glow */
}

/* Funny Shaking Effect */
@keyframes shake {
    0%, 100% { transform: translateX(0); }
    20% { transform: translateX(-4px); }
    40% { transform: translateX(4px); }
    60% { transform: translateX(-4px); }
    80% { transform: translateX(4px); }
}

#noBtn3:hover {
    animation: shake 0.4s ease-in-out;
}

footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: rgba(255, 111, 97, 0.9);
    text-align: center;
    padding: 10px;
    color: white;
    font-size: 1rem;
    font-weight: bold;
}

footer a {
    color: white;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

    </style>
</head>

<body>
    <div class="container">
        <!-- Floating Hearts in Background -->
        <div class="floating-heart" style="top: 10%; left: 20%;">❤️</div>
        <div class="floating-heart" style="top: 30%; left: 80%;">❤️</div>
        <div class="floating-heart" style="top: 70%; left: 50%;">❤️</div>

        <!-- Question 1 -->
        <div class="question active" id="question1">
            <h1><?php 

                echo $Q1;
            ?></h1>
            <div class="buttons">
                <button id="yesBtn1" class="large-button"><?php 

                echo $O11;
            ?></button>
                <button id="noBtn1"><?php 

                echo $O12;
            ?></button>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="question" id="question2">
            <h1><?php 

                echo $Q2;
            ?></h1>
            <div class="buttons">
                <button id="yesBtn2" class="large-button"><?php 

                echo $O21;
            ?></button>
                <button id="noBtn2"><?php 

                echo $O22;
            ?></button>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="question" id="question3">
            <h1><?php 

                echo $Q3;
            ?></h1>
            <div class="buttons">
                <button id="yesBtn3" class="large-button"><?php 

                echo $O31;
            ?></button>
                <button id="noBtn3"><?php 

                echo $O32;
            ?></button>
            </div>
        </div>

        <!-- Final Message -->
        <div id="message">
            <h1><?php 

                echo $lst;
            ?></h1>
        </div>

        <div id="heartContainer"></div>
    </div>

    <script>
        const questions = document.querySelectorAll('.question');
        const heartContainer = document.getElementById('heartContainer');
        const message = document.getElementById('message');

        let currentQuestion = 0;

      
        function showNextQuestion() {
            if (currentQuestion < questions.length - 1) {
                questions[currentQuestion].classList.remove('active');
                currentQuestion++;
                questions[currentQuestion].classList.add('active');
            } else {
               
                questions[currentQuestion].classList.remove('active');
                message.style.display = 'block';
            }
        }

      
        document.getElementById('yesBtn1').addEventListener('click', () => {
            showNextQuestion();
        });
        document.getElementById('yesBtn2').addEventListener('click', () => {
            showNextQuestion();
        });
        document.getElementById('yesBtn3').addEventListener('click', () => {
            showNextQuestion();
        });

      
        document.getElementById('noBtn1').addEventListener('click', () => {
            alert("<?php 

                echo $A1;
            ?>");
        });
        document.getElementById('noBtn2').addEventListener('click', () => {
            alert("<?php 

                echo $A2;
            ?>");
        });
       


        const yesButtons = document.querySelectorAll('[id^="yesBtn"]');
        yesButtons.forEach(button => {
            button.addEventListener('click', () => {
                for (let i = 0; i < 20; i++) {
                    const heart = document.createElement('span');
                    heart.classList.add('heart');
                    heart.innerText = '❤️';

                    const x = Math.random() * window.innerWidth;
                    heart.style.left = `${x}px`;
                    heart.style.fontSize = `${Math.random() * 24 + 16}px`;

                    heartContainer.appendChild(heart);

                    heart.addEventListener('animationend', () => {
                        heartContainer.removeChild(heart);
                    });
                }
            });
        });

      
        function showCryingEmojis() {
            for (let i = 0; i < 15; i++) {
                const cryEmoji = document.createElement('span');
                cryEmoji.classList.add('cryEmoji');
                cryEmoji.innerText = '😢';

                const x = Math.random() * window.innerWidth;
                cryEmoji.style.left = `${x}px`;
                cryEmoji.style.fontSize = `${Math.random() * 24 + 24}px`;

                heartContainer.appendChild(cryEmoji);

                cryEmoji.addEventListener('animationend', () => {
                    cryEmoji.remove();
                });
            }
        }

     document.addEventListener("DOMContentLoaded", function () {
    const noBtn3 = document.getElementById("noBtn3");
    const container = document.querySelector(".container");

    noBtn3.addEventListener("mouseover", function () {
      
        const containerRect = container.getBoundingClientRect();
        const btnRect = noBtn3.getBoundingClientRect();

     
        const maxX = containerRect.width - btnRect.width - 10;
        const maxY = containerRect.height - btnRect.height - 10;

        const randomX = Math.random() * maxX;
        const randomY = Math.random() * maxY;

       
        noBtn3.style.position = "absolute";
        noBtn3.style.left = `${randomX}px`;
        noBtn3.style.top = `${randomY}px`;

  
        noBtn3.style.transform = "scale(1.2)";
        setTimeout(() => {
            noBtn3.style.transform = "scale(1)";
        }, 200);
    });
});

        
    </script>




<audio id="sadSong1" >  
  <source src="<?php echo $audioFileno1; ?>" type="audio/mp3">  
  
</audio>  

<audio id="sadSong2">
    <source src="<?php echo $audioFileno2; ?>"  type="audio/mp3">
    </audio>

<audio id="sadSong3">
    <source src="<?php echo $audioFileno3; ?>" type="audio/mp3"> 
 </audio>



<audio id="romanticSong1" >
    <source src="<?php echo $audioFileyes1; ?>" type="audio/mp3"> 
     </audio>

<audio id="romanticSong2">
    <source src="<?php echo $audioFileyes2; ?>" type="audio/mp3"> 
 </audio>

<audio id="romanticSong3">
    <source src="<?php echo $audioFileyes3; ?>" type="audio/mp3">
    </audio>



<script>

 
    function unlockAudio() {

        document.querySelectorAll("audio").forEach(audio => {

            audio.play().then(() => audio.pause()).catch(() => {});

        });

        document.removeEventListener("click", unlockAudio);

    }

    document.addEventListener("click", unlockAudio);





    const buttonAudioMap = {

        "noBtn1": "sadSong1",

        "noBtn2": "sadSong2",

        "noBtn3": "sadSong3",

        "yesBtn1": "romanticSong1",

        "yesBtn2": "romanticSong2",

        "yesBtn3": "romanticSong3"

    };



 

function playSong(audioId) {  
    let audio = document.getElementById(audioId);  

    if (audio) {  
        audio.currentTime = 0; 
        audio.play();  
    }  
}  

 
Object.keys(buttonAudioMap).forEach(buttonId => {  
    let button = document.getElementById(buttonId);  
    if (!button) return;  

    if (buttonId.startsWith("noBtn")) {  
        button.addEventListener("mouseenter", () => playSong(buttonAudioMap[buttonId]));  
        button.addEventListener("mouseleave", () => {  
            let audio = document.getElementById(buttonAudioMap[buttonId]);  
            if (audio) {  
                audio.pause();  
                audio.currentTime = 0;  
            }  
        });  
    } else if (buttonId.startsWith("yesBtn")) {  
        button.addEventListener("click", () => playSong(buttonAudioMap[buttonId]));  
        button.addEventListener("mouseleave", () => {  
            let audio = document.getElementById(buttonAudioMap[buttonId]);  
            if (audio) {  
                audio.pause();  
                audio.currentTime = 0;  
            }  
        });  
    }  
});

 





</script>




<footer id="footer">
    <p>© 2025 | Made with ❤️ by <a id="igLink" href="https://www.instagram.com/_.mmrehu/" target="_blank">Rehu Talwar</a></p>
</footer>





</body>

</html>
