// script.js

document.addEventListener("DOMContentLoaded", () => {
    const togglePopupButton = document.getElementById("togglePopup");
    const popup = document.getElementById("popup");
    const closePopup = document.getElementById("closePopup");

    // Function to toggle the popup
    const togglePopup = () => {
        popup.classList.toggle("active"); // Toggle the 'active' class
    };

    // Event listener to toggle the popup on button click
    togglePopupButton.addEventListener("click", togglePopup);

    // Event listener to close the popup when the close button is clicked
    closePopup.addEventListener("click", togglePopup);

    // Optional: Close the popup when clicking outside the popup content
    popup.addEventListener("click", (event) => {
        if (event.target === popup) {
            togglePopup();
        }
    });
});
