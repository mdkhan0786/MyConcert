// Countdown logic
document.addEventListener("DOMContentLoaded", function() {
    // Set the target date (Feb 10, 2025)
    const countdownDate = new Date("Feb 10, 2025 00:00:00").getTime();

    // Update the countdown every 1 second
    const countdownFunction = setInterval(function() {
        
        // Get the current date and time
        const now = new Date().getTime();
        
        // Calculate the distance between now and the target date
        const distance = countdownDate - now;

        // Time calculations for days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update the countdown numbers in their respective boxes
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(countdownFunction);
            document.getElementById("days").innerHTML = "0";
            document.getElementById("hours").innerHTML = "0";
            document.getElementById("minutes").innerHTML = "0";
            document.getElementById("seconds").innerHTML = "0";
        }
    }, 1000);
});

