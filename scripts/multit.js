let a = "";
let b = "";
let c = "";
let finish = false;
let result = null;
let timeStart = null;
let timeEnd = null;
let timeUsed = null;
let points=0;
let right = 0;
let wrong = 0;

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive 
}

const digit = ["0","1","2","3","4","5","6","7","8","9","Enter"];
const butn = ["New","Ranking","Exit"];
const out1 = document.querySelector('.multi-screen p1');
const out2 = document.querySelector('.multi-screen p2');
const out3 = document.querySelector('.results-screen p');

function clearAll() {
    a = '';
    b = '';
    c = '';
    sign = ''; // Add the assignment for the 'sign' variable
    out1.innerHTML = '';
    out2.innerHTML = 0;
}

// out3.innerHTML += "Tulokset<br>";
a = getRandomInt(1, 10);
b = getRandomInt(1, 10);
out1.textContent = a + ' x ' + b + ' = ';
timeStart = new Date();
document.querySelector('.buttons').onclick = (event) => {
    if (!event.target.classList.contains('btn')) return;
    // out2.textContent = '';
    const key = event.target.textContent;
    if (digit.includes(key) && key !== 'Enter') {
        c += key;
        out2.textContent = c;
    } else if (key === 'Enter') {
        console.log("Enter");
        result = parseInt(c);
        if (a * b === result) {
            right++;
            console.log("Right " + right);
            out3.innerHTML += "<span style='color: green;'>" + a + ' x ' + b + ' = ' + c + '</span><br>';
        } else {                
            wrong++;
            console.log("Wrong " + wrong);
            out3.innerHTML += "<span style='color: red;'>" + a + ' x ' + b + ' = ' + c + '</span> ' + (a * b) + '<br>';
        }
        clearAll();
        a=getRandomInt(1,10);
        b=getRandomInt(1,10);
        out1.textContent = a + ' x ' + b + ' = ';
        if (right + wrong === 10) {
            out1.textContent = "Game over";
            out2.innerHTML = "<span style='color: green;'>R:" + right + "</span> <span style='color: red;'>W:" + wrong + "</span>";
            timeEnd = new Date();
            timeUsed = (timeEnd - timeStart) / 1000;
            out3.innerHTML += "Time used: " + timeUsed;
            points = (10000/((right + (30 * wrong))*timeUsed)).toFixed(4);
            points, timeUsed, right,
            out3.innerHTML += "<br>Points: " + points;

            // Transfer results to resultshandling.php
            const formData = new FormData();
            formData.append('points', points);
            formData.append('timeUsed', timeUsed);
            formData.append('right', right);
   
            fetch('resultshandling.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
            //         // Handle the response from results_handling.php if needed
                })
                 .catch(error => {
                    console.log('Error:', error);
                    console.error('Error:', error);
            //        Handle the error if needed
                });
            right = 0;
            wrong = 0;
        }
    }
}    
document.querySelector('.results-buttons').onclick = (e) => {
    if (!e.target.classList.contains('butn')) return;
    const actionKey = e.target.textContent;
    if (butn.includes(actionKey) && actionKey === 'New') {
        clearAll();
        document.querySelector('.results-screen p').innerHTML = '';
        a = getRandomInt(1, 10);
        b = getRandomInt(1, 10);
        right = 0;
        wrong = 0;
        out1.textContent = a + ' x ' + b + ' = ';
        timeStart = new Date();
    }   else if (butn.includes(actionKey) && actionKey === 'Ranking') {
        alert("This option is available only for registered users.");
        console.log("Ranking");
    }   else if (butn.includes(actionKey) && actionKey === 'Exit') {
        console.log("Exit");
        window.location.href = "../index.php";
    }
}