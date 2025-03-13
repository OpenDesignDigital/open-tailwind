document.addEventListener("DOMContentLoaded", () => {
    const menuItems = document.querySelectorAll(".has-sub-menu");

    let expandedItem = null;

    const expandSubMenu = (item) => {
        const subMenu = item.querySelector("ul.dropdown-menu");
        const button = item.querySelector(".has-sub-items");
        expandedItem = item;

        subMenu.setAttribute("aria-hidden", "false");
        button.setAttribute("aria-expanded", "true");
        item.dataset.expanded = "true";
    };

    const collapseSubMenu = (item) => {
        const subMenu = item.querySelector("ul.dropdown-menu");
        const button = item.querySelector(".has-sub-items");
        expandedItem = null;

        subMenu.setAttribute("aria-hidden", "true");
        button.setAttribute("aria-expanded", "false");
        item.dataset.expanded = "false";
    };

    menuItems.forEach((item) => {
        const button = item.querySelector(".has-sub-items");

        button.addEventListener("click", (event) => {
            if (button.ariaExpanded === "false") {
                expandSubMenu(item);
            } else {
                collapseSubMenu(item);
            }
        });

        item.addEventListener("mouseenter", () => {
            expandSubMenu(item);
        });
        item.addEventListener("mouseleave", () => {
            collapseSubMenu(item);
        });
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Tab") {
            if (!expandedItem) {
                return;
            }

            const subMenu = expandedItem.querySelector("ul.dropdown-menu");

            const focusedElement = expandedItem.querySelector(
                "ul.dropdown-menu:focus",
            );
            const firstFocusableElement = expandedItem.querySelector(
                "ul li.has-sub-menu a",
            );
            const lastFocusableElement = subMenu.lastElementChild.querySelector(
                "ul li.has-sub-menu a",
            );

            if (!event.shiftKey && focusedElement === lastFocusableElement) {
                collapseSubMenu(expandedItem);
                return;
            }

            if (event.shiftKey && focusedElement === firstFocusableElement) {
                collapseSubMenu(expandedItem);
                return;
            }
        }

        if (event.key == "Escape") {
            collapseSubMenu(expandedItem);
        }
    });
});
