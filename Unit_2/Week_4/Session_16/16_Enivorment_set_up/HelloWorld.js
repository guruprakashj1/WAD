console.log("Hello World from Console");

var time = new Date().getHours();
if (time < 10) {
    alert("Good morning");
} else if (time < 20) {
    alert("Good day");
}
else{
    alert("Good evening");
}
