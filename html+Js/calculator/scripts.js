function calculate(){
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);
    let op = document.getElementById("op").value;

    if(op=='sum'){
        document.getElementById("result").innerHTML="1st Digit: " + num1 +"<br>"
        + "2nd Digit: " + num2+"<br>"
        +"Sumision=" + (num1+num2)
    }
    if(op=='sub'){
        document.getElementById("result").innerHTML="1st Digit: " + num1 +"<br>"
        + "2nd Digit: " + num2+"<br>"
        +"Subtraction=" + (num1-num2)
    }
    if(op=='mul'){
        document.getElementById("result").innerHTML="1st Digit: " + num1 +"<br>"
        + "2nd Digit: " + num2+"<br>"
        +"Multipy=" + (num1*num2)
    }
    if(op=='div'){
        document.getElementById("result").innerHTML="1st Digit: " + num1 +"<br>"
        + "2nd Digit: " + num2+"<br>"
        +"Dvision=" + (num1/num2)
    }

    
}