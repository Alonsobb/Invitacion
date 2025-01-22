import Splide from "@splidejs/splide";
import "./bootstrap";

var splide = new Splide(".splide", {
    type: "loop",
    perPage: 2,
    gap: "1rem",
    breakpoints: {
        640: {  perPage: 1 ,gap: '1rem', padding: 0 },
    },
});

splide.mount();
