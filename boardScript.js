//for the clock in the dashboard
const updateClock = () => {
    let now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let ampm = hours >= 12 ? 'PM' : 'AM';

    hours = hours % 12;
    hours = hours ? hours : 12;

    document.getElementById('hour').innerText = hours < 10? '0' + hours : hours;
    document.getElementById('minute').innerText = minutes < 10? '0' + minutes : minutes;
    document.getElementById('seconds').innerText = seconds < 10? '0' + seconds : seconds;
    document.getElementById('ampm').innerText = ampm;
}

setInterval(updateClock, 1000);

//for displaying the content when clicking the sidebar
function dashboard(){
    let dash = document.getElementById("dashbrd");
    let addBlood = document.getElementById("addBld");
    let hospi = document.getElementById("affHospi");

    if (dash.style.display === "none"){
     dash.style.display = "block";
     addBlood.style.display = "none";
     hospi.style.display = "none";
    }
    else{
     dash.style.display = "block";
    }
 }


function AddBlood(){
    let dash = document.getElementById("dashbrd");
    let addBlood = document.getElementById("addBld");
    let hospi = document.getElementById("affHospi");
    
    if (addBlood.style.display === "none"){
     addBlood.style.display = "block";
     hospi.style.display = "none";
     dash.style.display = "none";
    }
    else{
     addBlood.style.display = "block";
    }
 }

 function AffHospi(){
    let hospi = document.getElementById("affHospi");
    let dash = document.getElementById("dashbrd");
    let addBlood = document.getElementById("addBld");

    if (hospi.style.display === "none"){
     hospi.style.display = "block";
     addBlood.style.display = "none";
     dash.style.display = "none";
    }
    else{
     hospi.style.display = "block";
    }
 }
