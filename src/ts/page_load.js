window.addEventListener("load", () => {
    // This waits for "load", so the page is fully loaded
    // Images and all

    // Grab the Go To section button
    const mainBody = document.querySelector("#mainBody");

    // Loaded has some styles attached
    setTimeout(function () {
        mainBody.classList.add("loaded");

        // >> Set cookie to visited here <<
    }, 200);

    // Update button text
});
