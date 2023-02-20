let span = document.querySelector(".up");

window.onscroll = function () {

this.scrollY >= 600 ? span.classList.add("show") : span.classList.remove("show");
};
   
span.onclick = function() {
    window.scrollTo({
    top:0,
    behavior : "smooth",
    }); 
}


function enable_info(){
    if (document.getElementById("fname").disabled == false){
        document.getElementById("fname").disabled = true;
        document.getElementById("lname").disabled = true;
        document.getElementById("mobile").disabled = true;
        document.getElementById("pass").disabled = true;
        document.getElementById("update-btn").disabled = true;
        document.getElementById("update-btn").style = 'width: 18rem; height: 3rem; padding: 12px; background-color: silver; color: black;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
        document.getElementById("edit-btn").innerHTML = 'Edit Your Information';
        document.getElementById("edit-btn").style = 'background-color:#000080';
    } else {
        document.getElementById("fname").disabled = false;
        document.getElementById("lname").disabled = false;
        document.getElementById("mobile").disabled = false;
        document.getElementById("pass").disabled = false;
        document.getElementById("update-btn").disabled = false;
        document.getElementById("update-btn").style = 'width: 18rem; height: 3rem; padding: 12px; background-color: #000080; color: white;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
        document.getElementById("edit-btn").innerHTML = 'Cancel';
        document.getElementById("edit-btn").style = 'background-color:rgb(177, 0, 0)';
    }
}

function changeStyle(){
    document.getElementById("update-btn").style = 'width: 18rem; height: 3rem; background-color: #c4c700;transform: scale(1.1);';
}

function returnStyle(){
    document.getElementById("update-btn").style = 'width: 18rem; height: 3rem; padding: 12px; background-color: #000080; color: white;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
}

function typeYourCode(){
    let codes = [["9ZQ2" , "YH2T"],["WC6P" , "MK13"]];
    let partOneCode = document.getElementById("websitePart").value;
    let ownerCode = document.getElementById("ownerPart").value;
    if (ownerCode.length < 4 ){
        document.getElementById("generateQR").style = 'width: 24.5rem; height: 3rem; padding: 12px; background-color: silver; color: black;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
        document.getElementById("generateQR").disabled = true;
    } else {  
        for(i=0; i<codes.length ; i++){
            if (partOneCode == codes[i][0] && ownerCode == codes[i][1]){
                document.getElementById("generateQR").style = 'width: 24.5rem; height: 3rem; padding: 12px; background-color: #000080; color: white;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
                document.getElementById("generateQR").disabled = false;
            }else{
                document.getElementById("generateQR").style = 'width: 24.5rem; height: 3rem; padding: 12px; background-color: silver; color: black;font-weight: 700;border: none;cursor: pointer;margin-top: 15px; transition: 0.5s ease;';
                document.getElementById("generateQR").disabled = true;
            }
            break;
        }
    }
    
}

function showQR(){
    document.getElementById("QRCode").style.display = 'block';
}

function changeBGUp(){
    document.getElementById("upDiv").style = 'background-color: #FFF; border:none;filter: blur(0px);';
    document.getElementById("containerOfCoupon").style= 'background-color: #d3d3d3; border: 5px inset #9a9a9a;filter: blur(2px);'
}

function changeBGDown(){
    document.getElementById("upDiv").style= 'background-color: #d3d3d3; border: 5px inset #9a9a9a;filter: blur(2px);'
    document.getElementById("containerOfCoupon").style = 'background-color: #FFF; border:none;filter: blur(0px);';
}
