document.addEventListener("DOMContentLoaded", () => {
    try {
        document.querySelectorAll("[data-select2]").forEach((element) => {
            // Only initialize if not already initialized
            if (!$(element).data("select2")) {
                const isSearchable = element.hasAttribute("data-searchable");
                $(element)
                    .select2({
                        placeholder:
                            element.getAttribute("placeholder") ||
                            "Select an option",
                        allowClear: true,
                        width: "100%",
                        minimumResultsForSearch: isSearchable ? 0 : Infinity,
                        dropdownAutoWidth: true,
                        dropdownParent:
                            element.closest(".mb-6") || document.body,
                    })
                    .on("select2:open", function () {
                        document
                            .querySelector(".select2-search__field")
                            ?.focus();
                    });
            }
        });
    } catch (error) {
        console.error("Select2 initialization error:", error);
    }
});
