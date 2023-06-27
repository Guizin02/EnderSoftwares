const programmerCard = document.getElementById("programmer-card");
const clientCard = document.getElementById("client-card");

programmerCard.addEventListener("click", function() {
    window.location.href = "programmer.html";
});

clientCard.addEventListener("click", function() {
    window.location.href = "client.html";
});
