/*define(["jquery"], function($) {
    "use strict";
    return function(config, element) {
        console.log("ciao");
    }
})*/

requirejs(['jquery'], function($) {
    console.log("the urgency works");

    function timer() {
        const DELIVERY_HOUR = 12;
        let store_date = new Date();
        let deadline = new Date();
        deadline.setHours(DELIVERY_HOUR, 0, 0);
        if (store_date.getHours() >= DELIVERY_HOUR) {
            deadline.setTime(deadline.getTime() + 86400000);
        }
        let time_left = (deadline.getTime() - store_date.getTime()) / 1000;
        let hours_left = Math.floor(time_left / 3600);
        time_left -= hours_left * 3600;
        let minutes_left = Math.floor(time_left / 60);
        time_left -= minutes_left * 60;
        let seconds_left = Math.floor(time_left);
        let hours_left_text = hours_left != 0 ? (`${hours_left} or${hours_left == 1 ? 'a' : 'e'} e `) : ``;
        let element = document.getElementById("timer");
        element.innerText = `Ordina entro ${hours_left_text}${minutes_left} minut${minutes_left == 1 ? 'o' : 'i'} e ${seconds_left} second${seconds_left == 1 ? 'o' : 'i'} per ricevere i tuoi prodotti domani`;
        element.classList.add("urgency");
    }
    setInterval(timer, 0);
});