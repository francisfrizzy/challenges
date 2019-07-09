/*eslint-env browser*/
//Above comment very very necessary for local builds. Otherwise JS file wont execute
window.onload = function(){
    
    //inputs
    var red_button = document.getElementById("red-button");
    var green_button = document.getElementById("green-button");
    var blue_button = document.getElementById("blue-button");
    
    //outputs
    var box_results = document.getElementById("card-results");
    var ascii_answer = document.getElementById("ascii");
    var text_result = document.getElementById("color-text");
    
    
    function red_click() {
        box_results.style.backgroundColor = "red";
        text_result.innerHTML = "Hi, my name is Red";
        var asc = document.getElementById("rr").innerHTML;
        var answer = 0;
        for (var i = 0; i < asc.length; i++) {
            answer = answer + asc.charCodeAt(i);
        }
        ascii_answer.innerHTML = answer;   
    }

    function green_click() {
        box_results.style.backgroundColor = "green";
        text_result.innerHTML = "Hi, my name is Green";
        var asc = document.getElementById("gg").innerHTML;
        var answer = 0;
        for (var i = 0; i < asc.length; i++) {
            answer = answer + asc.charCodeAt(i);
        }
        ascii_answer.innerHTML = answer;
    }

    function blue_click() {
        box_results.style.backgroundColor = "blue";
        text_result.innerHTML = "Hi, my name is Blue";
        var asc = document.getElementById("bb").innerHTML;
        var answer = 0;
        for (var i = 0; i < asc.length; i++) {
            answer = answer + asc.charCodeAt(i);
        }
        ascii_answer.innerHTML = answer;
    }
    
    
    red_button.addEventListener("click", red_click);
    green_button.addEventListener("click", green_click);
    blue_button.addEventListener("click", blue_click);
    
}
