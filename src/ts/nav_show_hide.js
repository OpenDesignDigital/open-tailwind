document.addEventListener("DOMContentLoaded", () => {
    // click on mobile nav on page load
    //   document.querySelector(`.hamburger_toggle`).click();

    // Get all menu items that have children
    const menuItemsWithChildren = document.querySelectorAll(
        `#menu-mobile .menu-item-has-children`,
    );

    menuItemsWithChildren.forEach((menuItem) => {
        // console.log(menuItem);

        menuItem.insertAdjacentHTML(
            `beforeend`,
            `<button class="toggle_child"><img src="/wp-content/themes/open-tailwind/assets/dist/img/Chevron_Down.svg"/>
        </button>`,
        );

        menuItem.querySelector(`a`).addEventListener(`click`, (e) => {
            e.preventDefault();

            // console.log(e.target);
            if (e.target.closest(`.show_children`)) {
                window.location.href = e.target.href;
            }

            toggleChildren();
            //   menuItem.classList.toggle(`open`);
        });

        menuItem
            .querySelector(`.toggle_child`)
            .addEventListener(`click`, toggleChildren);

        function toggleChildren() {
            //   menuItem.querySelector(`a`).preventDefault();
            //   console.log(this);
            //   console.log(menuItem);

            if (menuItem.classList.contains(`show_children`)) {
                menuItem.classList.remove("show_children");
                menuItem.querySelector(`.toggle_child`).innerHTML =
                    `<img src="/wp-content/themes/open-tailwind/assets/dist/img/Chevron_Down.svg"/>
          `;
            } else {
                menuItem.classList.add("show_children");
                menuItem.querySelector(`.toggle_child`).innerHTML =
                    `<img class="no-invert" src="/wp-content/themes/open-tailwind/assets/dist/img/Chevron_Up_White.svg"/>
          `;
            }
        }
    });
});
