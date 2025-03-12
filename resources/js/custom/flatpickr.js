document.addEventListener("DOMContentLoaded", () => {
    const flatpickrElements = document.querySelectorAll("[data-flatpickr]");
    if (flatpickrElements.length > 0) {
        flatpickrElements.forEach((element) => {
            const options = element.dataset.flatpickrOptions
                ? JSON.parse(element.dataset.flatpickrOptions)
                : {};

            const type = element.dataset.flatpickr;
            switch (type) {
                case "date":
                    options.dateFormat = options.dateFormat || "Y-m-d";
                    break;
                case "datetime":
                    options.dateFormat = options.dateFormat || "Y-m-d H:i";
                    options.enableTime = true;
                    break;
                case "time":
                    options.noCalendar = true;
                    options.enableTime = true;
                    options.dateFormat = options.dateFormat || "H:i";
                    break;
                case "daterange":
                    options.mode = "range";
                    options.dateFormat = options.dateFormat || "Y-m-d";
                    break;
                case "daterangetime":
                    options.mode = "range";
                    options.enableTime = true;
                    options.dateFormat = options.dateFormat || "Y-m-d H:i";
                    break;
                case "weekday":
                    options.disable = [
                        function (date) {
                            return date.getDay() === 0 || date.getDay() === 6;
                        },
                    ];
                    break;
                case "weekend":
                    options.enable = [
                        function (date) {
                            return date.getDay() === 0 || date.getDay() === 6;
                        },
                    ];
                    break;
                case "future":
                    options.minDate = "today";
                    break;
                case "past":
                    options.maxDate = "today";
                    break;
                case "month":
                    options.dateFormat = options.dateFormat || "F Y";
                    // options.plugins = [
                    //     new flatpickr.monthSelectPlugin({
                    //         shorthand: true,
                    //         dateFormat: options.dateFormat,
                    //         altFormat: options.dateFormat,
                    //     }),
                    // ];
                    break;
                case "year":
                    options.dateFormat = options.dateFormat || "Y";
                    // options.plugins = [
                    //     new flatpickr.monthSelectPlugin({
                    //         shorthand: true,
                    //         dateFormat: options.dateFormat,
                    //         altFormat: options.dateFormat,
                    //     }),
                    // ];
                    break;
                case "inline":
                    options.inline = true;
                    break;
                case "human":
                    options.dateFormat = options.dateFormat || "F j, Y";
                    break;
                case "minute":
                    options.noCalendar = true;
                    options.enableTime = true;
                    options.dateFormat = options.dateFormat || "i";
                    options.enableSeconds = false;
                    break;
                case "seconds":
                    options.noCalendar = true;
                    options.enableTime = true;
                    options.dateFormat = options.dateFormat || "H:i:S";
                    options.enableSeconds = true;
                    break;
            }

            flatpickr(element, options);
        });
    }
});
