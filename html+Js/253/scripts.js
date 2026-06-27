let guesses = 0;
let secret =Math.floor(Math.random()* (5000-500 +1))+500;

function checkguess(){
    let guess=Number(document.getElementById("guess").value);
    if (isNaN(guess)) return;

    guesses++;
    let msg="";
    if(guesses>= 5 && secret != guess){
        msg="Out of guesses!";
    }
    else{
        if(secret>guess){
            msg ="Too low!"
        }
        else if(secret<guess){
            msg ="Too high!"
        }
        else if(secret==guess){
            msg ="Correct!"
            document.getElementById("guess").disabled = true;
            document.getElementById("submit").disabled = true;
        }
    }

    document.getElementById("result").innerHTML="FeedBack:" + msg +"<br>"
}