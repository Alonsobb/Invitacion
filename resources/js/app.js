import Splide from "@splidejs/splide";
import "./bootstrap";

var splide = new Splide(".splide", {
    type: "loop",
    padding: "5rem",
    gap: "1rem",
});

splide.mount();
