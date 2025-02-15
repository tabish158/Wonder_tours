document.addEventListener("DOMContentLoaded", function () {
    fetch("tours.json")
        .then(response => response.json())
        .then(data => {
            let tourContainer = document.getElementById("tour-container");
            data.forEach(tour => {
                let tourElement = document.createElement("div");
                tourElement.innerHTML = `<h3>${tour.name}</h3><p>${tour.description}</p>`;
                tourContainer.appendChild(tourElement);
            });
        });
});
