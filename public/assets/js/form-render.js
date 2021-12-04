jQuery(function ($) {
    async function getForm() {
        const response = await fetch("/form/getForm");
        const data = await response.json();

        renderData(data);
    }

    getForm();

    function renderData(data) {
        const code = document.getElementById("form");
        const formData = data;
        const addLineBreaks = (html) =>
            html.replace(new RegExp("><", "g"), ">\n<");

        // Grab markup and escape it
        const $markup = $("<div/>");
        $markup.formRender({ formData });

        // set < code > innerText with escaped markup
        code.innerHTML = addLineBreaks($markup.formRender("html"));
    }
});
