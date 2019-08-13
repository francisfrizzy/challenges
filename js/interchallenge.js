//Author: Francis Eseko
/*eslint-env browser*/

window.onload = function(){
    //input colours
    var firebrick_button = document.getElementById("firebrick1");
    var purple_button = document.getElementById("purple1");
    var black_button = document.getElementById("black1");
    var white_button = document.getElementById("white1");
    var sandybrown_button = document.getElementById("sandybrown1");
    var yellow_button = document.getElementById("yellow1");
    var royalblue_button = document.getElementById("royalblue1");
    var darkslategrey_button = document.getElementById("darkslategrey1");
    var navajowhite_button = document.getElementById("navajowhite1");
    var lightskyblue_button = document.getElementById("lightskyblue1");
    var lawngreen_button = document.getElementById("lawngreen1");
    var magenta_button = document.getElementById("magenta1");
    var wheat_button = document.getElementById("wheat1");
    var sapgreen_button = document.getElementById("sapgreen1");
    var gray_button = document.getElementById("gray1");
    var burlywood_button = document.getElementById("burlywood1");
    var aquamarine_button = document.getElementById("aquamarine1");
    var sgigray_button = document.getElementById("sgigray");
    
    //inputs in modal
    var minus_button = document.getElementById("number-minus");
    var plus_button = document.getElementById("number-plus");
    var agree_button = document.getElementById("modal-agree-button");
    
    //modal related outputs
    var cart_button = document.getElementById("cart-button");
    var item_value = document.getElementById("item-number");
    var modalColor = document.getElementById("modal-color-name");
    
    //Other Outputs
    var itemColor = document.getElementById("item-color-text");

//-------------------------------------------------------------------------------------------------------------
//Beginning of colors implementation
//-------------------------------------------------------------------------------------------------------------
    function firebrick_click() {
        itemColor.innerHTML = "Fire Brick Red";
        modalColor.innerHTML = "Fire Brick Red";
    }
    function purple_click() {
        itemColor.innerHTML = "Purple";
        modalColor.innerHTML = "Purple";
    }
    function black_click() {
        itemColor.innerHTML = "Black";
        modalColor.innerHTML = "Black";
    }
    function white_click() {
        itemColor.innerHTML = "White";
        modalColor.innerHTML = "White";
    }
    function sandybrown_click() {
        itemColor.innerHTML = "Sandy Brown";
        modalColor.innerHTML = "Sandy Brown";
    }
    function yellow_click() {
        itemColor.innerHTML = "Yellow";
        modalColor.innerHTML = "Yellow";
    }
    function royalblue_click() {
        itemColor.innerHTML = "Royal Blue";
        modalColor.innerHTML = "Royal Blue";
    }
    function darkslategrey_click() {
        itemColor.innerHTML = "Dark Slate Grey";
        modalColor.innerHTML = "Dark Slate Grey";
    }
    function navajowhite_click() {
        itemColor.innerHTML = "Navajo White";
        modalColor.innerHTML = "Navajo White";
    }
    function lightskyblue_click() {
        itemColor.innerHTML = "Light Sky Blue";
        modalColor.innerHTML = "Light Sky Blue";
    }
    function lawngreen_click() {
        itemColor.innerHTML = "Lawn Green";
        modalColor.innerHTML = "Lawn Green";
    }
    function magenta_click() {
        itemColor.innerHTML = "Magenta";
        modalColor.innerHTML = "Magenta";
    }
    function wheat_click() {
        itemColor.innerHTML = "Wheat";
        modalColor.innerHTML = "Whear";
    }
    function sapgreen_click() {
        itemColor.innerHTML = "Sap Green";
        modalColor.innerHTML = "Sap Green";
    }
    function gray_click() {
        itemColor.innerHTML = "Gray";
        modalColor.innerHTML = "Gray";
    }
    function burlywood_click() {
        itemColor.innerHTML = "Burly Wood";
        modalColor.innerHTML = "Burly Wood";
    }
    function aquamarine_click() {
        itemColor.innerHTML = "Aquamarine";
        modalColor.innerHTML = "Aquamarine";
    }
    function sgigray_click() {
        itemColor.innerHTML = "SGI Gray";
        modalColor.innerHTML = "SGI Gray";
    }



//-------------------------------------------------------------------------------------------------------------
//End of color implementation    
//-------------------------------------------------------------------------------------------------------------
//Below are functions attached to Modal implementation
//-------------------------------------------------------------------------------------------------------------
    
    function plus_click() {
        var currentValue = document.getElementById("modal-number").innerHTML;
        var newValue = parseInt(currentValue,10) + 1;
        
        if (newValue <= 100){
            document.getElementById("modal-number").innerHTML = newValue;
        }
        else if (newValue > 100){
            document.getElementById("modal-number").innerHTML = 100;
        }
    }

    //function for when minus button is clicked
    function minus_click() {
        var currentValue = document.getElementById("modal-number").innerHTML;
        var newValue = parseInt(currentValue,10) - 1;
        
        if (newValue >= 0){
            document.getElementById("modal-number").innerHTML = newValue;
        }
        else if (newValue < 0){
            document.getElementById("modal-number").innerHTML = 0;
        }
    }

    //function for when Agree button is pressed
    function agree_click() {
        var currentValue = document.getElementById("modal-number").innerHTML;
        if (parseInt(currentValue,10) > 0){
            //leave modal then change value on cart button and item value
            cart_button.innerHTML = "Checkout Now";
            item_value.innerHTML = currentValue;
            
        }
        else{ //do not change cart button unless value > 0
            item_value.innerHTML = 0;
        }
        
    }
    
    function checkout_click() {
        var currentString = cart_button.innerHTML;
        if (currentString == "Checkout Now"){
            window.location.href = window.location.href;
        }
    }
    
//----------------------------------------------------------------------
//End of Modal functions implementation
//----------------------------------------------------------------------
//Beginning of Event Listeners
//----------------------------------------------------------------------
    
    minus_button.addEventListener("click", minus_click);
    plus_button.addEventListener("click", plus_click);
    agree_button.addEventListener("click", agree_click);
    cart_button.addEventListener("click", checkout_click);
    
    firebrick_button.addEventListener("click", firebrick_click);
    purple_button.addEventListener("click", purple_click);
    black_button.addEventListener("click", black_click);
    white_button.addEventListener("click", white_click);
    sandybrown_button.addEventListener("click", sandybrown_click);
    yellow_button.addEventListener("click", yellow_click);
    royalblue_button.addEventListener("click", royalblue_click);
    darkslategrey_button.addEventListener("click", darkslategrey_click);
    navajowhite_button.addEventListener("click", navajowhite_click);
    lightskyblue_button.addEventListener("click", lightskyblue_click);
    lawngreen_button.addEventListener("click", lawngreen_click);
    magenta_button.addEventListener("click", magenta_click);
    wheat_button.addEventListener("click", wheat_click);
    sapgreen_button.addEventListener("click", sapgreen_click);
    gray_button.addEventListener("click", gray_click);
    burlywood_button.addEventListener("click", burlywood_click);
    aquamarine_button.addEventListener("click", aquamarine_click);
    sgigray_button.addEventListener("click", sgigray_click);

//----------------------------------------------------------------------
//End of Event Listeners
//----------------------------------------------------------------------

}
