document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab");
    const panels = document.querySelectorAll(".panel");

    //Tabs menu Event Listener
    tabs.forEach((tab) => tab.addEventListener("click", onTabClick));

    function onTabClick(e) {
        //console.log(e.target);
        //Deactivate All Tabs
        tabs.forEach((tab) => {
            tab.children[0].classList.remove(
                "border-cyan-500",
                "border-b-4",
                "md:border-b-0",
            );
        });

        // Hide All Panels
        panels.forEach((panel) => panel.classList.add("hidden"));

        // Activate a new tab and panel based on a target
        e.target.classList.add("border-cyan-500", "border-b-4");

        const classString = e.target.getAttribute("data-target");
        document
            .getElementById("panels")
            .getElementsByClassName(classString)[0]
            .classList.remove("hidden");
    }
});
