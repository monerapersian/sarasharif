let lastScroll = 0;

const navbar = document.getElementById("navbar");
const mobileHeader = document.getElementById("mobileHeader");

window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    if (navbar) {
        if (currentScroll <= 0) {
            navbar.style.transform = "translateY(0)";
        } else if (currentScroll > lastScroll) {
            navbar.style.transform = "translateY(-100%)";
        } else {
            navbar.style.transform = "translateY(0)";
        }
    }

    if (mobileHeader) {
        if (currentScroll <= 0) {
            mobileHeader.style.transform = "translateY(0)";
        } else if (currentScroll > lastScroll) {
            mobileHeader.style.transform = "translateY(-100%)";
        } else {
            mobileHeader.style.transform = "translateY(0)";
        }
    }

    lastScroll = currentScroll;
});