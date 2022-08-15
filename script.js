const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.booked)");
const count = document.getElementById("count");
const studioSelect = document.getElementById("studio");

populateUI();

let ticketPrice = +studioSelect.value;

// Simpan index pilihan studio dan Harga
function setstudioData(studioIndex) {
  localStorage.setItem("selectedstudioIndex", studioIndex);
}

// Update harga dan jumlah studio (yang dipilih)
function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll(".row .seat.selected");

    const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

    localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

    const selectedSeatsCount = selectedSeats.length;

    count.innerText = selectedSeatsCount;

    setstudioData(studioSelect.selectedIndex, studioSelect.value);
}


// Ambil data dari lokal memori pilihan studio
function populateUI() {
    const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

    if (selectedSeats !== null && selectedSeats.length > 0) {
        seats.forEach((seat, index) => {
        if (selectedSeats.indexOf(index) > -1) {
            console.log(seat.classList.add("selected"));
        }
    });
}

const selectedstudioIndex = localStorage.getItem("selectedstudioIndex");

    if (selectedstudioIndex !== null) {
        studioSelect.selectedIndex = selectedstudioIndex;
        console.log(selectedstudioIndex)
    }
}

console.log(populateUI())
// Bagian untuk memilih studio
studioSelect.addEventListener("change", (e) => {
    setstudioData(e.target.selectedIndex, e.target.value);
    updateSelectedCount();
});

// bagian memilih jam pemesanan
container.addEventListener("click", (e) => {
    if (
        e.target.classList.contains("seat") &&
        !e.target.classList.contains("booked")
    ) {
        e.target.classList.toggle("selected");

        updateSelectedCount();
    }
});

// update harga dan jumlah pilihan
updateSelectedCount();