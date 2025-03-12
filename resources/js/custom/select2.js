document.addEventListener("DOMContentLoaded", () => {
    const select2Elements = document.querySelectorAll("[data-select2]");
    if (select2Elements.length > 0) {
        select2Elements.forEach((element) => {
            $(element).select2();
        });
    }
});
