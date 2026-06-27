const goal = 2000;
let entrycount = 0;
let totalcal = 0;

function totalcalories(){
    let cal = Number (document.getElementById("cal").value);

    totalcal += cal;
    entrycount++;

    let msg="";

    if(totalcal<=800){
        msg="You're off to a healthy start!";
    }
    else if(totalcal<=1600){
        msg="Good progress, keep it balanced!";
    }
    else if(totalcal<=1999){
        msg="Almost at your limit!";
    }
    else if(totalcal>=2000){
        msg="Goal reached! Stay mindful!";
    }
    
    if(entrycount>=10 && totalcal<goal){
        msg="Be cautious of frequent snacking!"
    }

    document.getElementById("result").innerHTML="Total calories:" + totalcal+"/"+goal +"<br>"
    + "Feedback:" + msg;
    document.getElementById("cal").value = "";

}