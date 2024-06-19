import { $, $$ } from "./libs/bling";
import "lazysizes";
import "lazysizes/plugins/parent-fit/ls.parent-fit";
import "lazysizes/plugins/respimg/ls.respimg";
import "../css/main.css";
import "./swiper_configs";
import "./custom_tabs";
import "./page_load.js";
import "./nav_show_hide.js";
import Accordion from "accordion-js";

document.addEventListener("DOMContentLoaded", () => {
    const $btn = document.getElementById("menu-btn");
    const $menu = document.getElementById("menu");

    $btn.addEventListener("click", navToggle);

    function navToggle() {
        $btn.classList.toggle("open");
        $menu.classList.toggle("flex");
        $menu.classList.toggle("hidden");
    }

    // Adding Class On Scroll
    let scrollpos = window.scrollY;
    const header = document.querySelector("header");
    const header_height = header.offsetHeight;

    const add_class_on_scroll = () => header.classList.add("scrolling");
    const remove_class_on_scroll = () => header.classList.remove("scrolling");

    window.addEventListener("scroll", function () {
        scrollpos = window.scrollY;

        if (scrollpos >= header_height) {
            add_class_on_scroll();
        } else {
            remove_class_on_scroll();
        }

        console.log(scrollpos);
    });

    //Animate On Scroll
    const callback = function (entries) {
        entries.forEach((entry) => {
            console.log(entry);

            if (entry.isIntersecting) {
                entry.target.classList.add("animate-fadeIn");
            } else {
                entry.target.classList.remove("animate-fadeIn");
            }
        });
    };

    const observer = new IntersectionObserver(callback);

    const targets = document.querySelectorAll(".js-show-on-scroll");
    targets.forEach(function (target) {
        target.classList.add("opacity-0");
        observer.observe(target);
    });

    //Activate Accordions
    const checkAccordion = document.querySelector(".accordion-container");
    if (checkAccordion) {
        new Accordion(".accordion-container");
    }
});
