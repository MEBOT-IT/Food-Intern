const scrollTopBtn = document.getElementById("scroll-top-btn");

window.addEventListener("scroll", () => {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollTopBtn.style.display = "block";
} else {
    scrollTopBtn.style.display = "none";
}
});

scrollTopBtn.addEventListener("click", () => {
window.scrollTo({ top: 0, behavior: "smooth" });
});