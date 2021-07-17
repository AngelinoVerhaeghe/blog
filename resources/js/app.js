require("./bootstrap");

const closeBtn = document.getElementById("close");
const divMessage = document.getElementById("message");

if (closeBtn) {
    closeBtn.addEventListener("click", () => {
        divMessage.classList.add("hidden");
    });
}
