window.onload = function() {
    alert("Selamat datang di situs web kami!");
};

function changeBackgroundColor() {
    var colors = ["#ff5733", "#33ff57", "#5733ff", "#ff33f3", "#33f3ff", "#f3ff33"];
    var randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.body.style.backgroundColor = randomColor;
}

// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});