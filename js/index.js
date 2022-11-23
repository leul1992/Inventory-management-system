/* var list_container = document.getElementById("navigation");
if (list_container) {
    console.log(
        'have a value')
} else {
    console.log('no value')
} */
// Get all buttons with class="btn" inside the container
var lists = document.getElementsByClassName("center");
if (lists) {
    console.log(
        'have a value ' + lists.length)
} else {
    console.log('no value')
}
// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < lists.length; i++) {
    lists[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}