<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Spin - Game Demo</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #15152e, #30205c);
            color: white;
        }

        .game {
            width: 400px;
            padding: 30px;
            text-align: center;
            background: #211d3a;
            border: 2px solid #7656d6;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #aaa4c7;
            margin-bottom: 25px;
        }

        .score {
            background: #15132a;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .score span {
            color: #ffd84d;
            font-size: 22px;
            font-weight: bold;
        }

        .slot-machine {
            display: flex;
            justify-content: center;
            gap: 10px;
            padding: 20px;
            background: #11101f;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .slot {
            width: 85px;
            height: 85px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            color: black;
            border-radius: 12px;
            font-size: 45px;
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #7656d6;
            color: white;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #8b6be8;
        }

        button:disabled {
            background: #55516b;
            cursor: not-allowed;
        }

        #message {
            margin-top: 20px;
            min-height: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="game">

        <h1>🎰 Lucky Spin</h1>
        <p class="subtitle">Game Demo</p>

        <div class="score">
            Score: <span id="score">100</span>
        </div>

        <div class="slot-machine">
            <div class="slot" id="slot1">🍒</div>
            <div class="slot" id="slot2">⭐</div>
            <div class="slot" id="slot3">💎</div>
        </div>

        <button id="spinButton" onclick="spin()">
            SPIN
        </button>

        <p id="message">Tekan SPIN untuk bermain!</p>

    </div>


    <script>

        const symbols = ["🍒", "🍋", "⭐", "💎", "🍇", "🔔"];

        let score = 100;

        function randomSymbol() {
            const randomIndex = Math.floor(
                Math.random() * symbols.length
            );

            return symbols[randomIndex];
        }

        function spin() {

            const button = document.getElementById("spinButton");
            const message = document.getElementById("message");

            button.disabled = true;

            message.textContent = "Memutar...";

            let counter = 0;

            const animation = setInterval(() => {

                document.getElementById("slot1").textContent = randomSymbol();
                document.getElementById("slot2").textContent = randomSymbol();
                document.getElementById("slot3").textContent = randomSymbol();

                counter++;

                if (counter >= 10) {

                    clearInterval(animation);

                    const result1 = randomSymbol();
                    const result2 = randomSymbol();
                    const result3 = randomSymbol();

                    document.getElementById("slot1").textContent = result1;
                    document.getElementById("slot2").textContent = result2;
                    document.getElementById("slot3").textContent = result3;

                    if (
                        result1 === result2 &&
                        result2 === result3
                    ) {

                        score += 50;
                        message.textContent = "🎉 JACKPOT! +50 poin!";

                    } else if (
                        result1 === result2 ||
                        result2 === result3 ||
                        result1 === result3
                    ) {

                        score += 20;
                        message.textContent = "✨ Dua simbol sama! +20 poin!";

                    } else {

                        message.textContent = "Belum beruntung. Coba lagi!";

                    }

                    document.getElementById("score").textContent = score;

                    button.disabled = false;
                }

            }, 100);

        }

    </script>

</body>
</html><?php /**PATH C:\Users\ezzy2\bebas\resources\views/pages/hi.blade.php ENDPATH**/ ?>