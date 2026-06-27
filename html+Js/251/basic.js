// console.log("Basic Calculator");
// let num1 = Number(prompt("Enter 1st Number"));
// let num2 = Number(prompt("Enter 2nd Number"));
// let op = prompt("Choose Your operator(sum/sub/add/mul)");

// if(op == 'sum'){
//     console.log ("Sum:" + (num1 + num2));
// }
// else if(op == 'sub'){
//     console.log("Sub:" + (num1-num2));
// }
// else if(op == 'div'){
//     console.log("div:" + (num1/num2));
// }
// else if(op == 'mul'){
//     console.log("mul:" + (num1*num2));
// }


let attempt = 0;

function passscore(pass, paslength) {

    let score = 0;
    let upper = 0;
    let lower = 0;
    let number = 0;
    let special = 0;

    // Length Score
    if (paslength >= 6) {
        score += Math.floor(paslength / 2) * 10;
    }

    // Character Check
    for (let i = 0; i < paslength; i++) {

        if (pass[i] >= 'a' && pass[i] <= 'z') {
            lower++;
        }
        else if (pass[i] >= 'A' && pass[i] <= 'Z') {
            upper++;}
    }

    if (lower > 0)
        score += 15;
}
function checkPassword() {

    let password = document.getElementById("password").value;

    if (password == "") {
        document.getElementById("result").innerHTML = "Please enter a password.";
        return;
    }

    attempt++;

    let score = passscore(password, password.length);

    let message = "";

    if (score >= 100)
        message = "Perfect Password";
    else
        message = "Very Weak";

    if (attempt > 8 && score < 71) {
        message += "<br><b>Need Practice!</b>";
    }

    document.getElementById("result").innerHTML =
        "Attempt : " + attempt +
        "<br>Score : " + score +
        "<br>Status : " + message;
}