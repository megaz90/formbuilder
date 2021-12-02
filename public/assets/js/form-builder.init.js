jQuery(function ($) {
    var options = {
        disabledSubtypes: {
            text: ["password", "color"],
        },
        disabledActionButtons: ["data", "clear"],

        disableFields: [
            "autocomplete",
            "hidden",
            "header",
            "file",
            "paragraph",
            "button",
        ],

        disabledAttrs: [
            "multiple",
            "other",
            "style",
            "value",
            "rows",
            "access",
            "toggle",
            "className",
        ],

        editOnAdd: true,

        fieldRemoveWarn: true, // set to false to remove the warning before removing the field

        stickyControls: {
            enable: true,
            offset: {
                top: 20,
                right: 10,
                left: "auto",
            },
        },
        // onAddField: function (fieldId) {
        //     let res = checkLimit();
        //     if (res) {
        //         formBuilder.actions.removeField(fieldId);
        //         alert("You can't add more than 10 fields");
        //         return;
        //     }
        // },

        onSave: function (evt, formData) {
            let limit = checkLimit();
            if (limit) {
                alert("You can't add more than 10 fields");
                return 0;
            } else {
                saveForm();
                console.log("Continue saving");
            }
        },

        notify: {
            error: function (message) {
                return console.error(message);
            },
            success: function (message) {
                return console.log(message);
            },
            warning: function (message) {
                return console.warn(message);
            },
        },
    };
    var formBuilder = $(document.getElementById("fb-editor")).formBuilder(
        options
    );

    //Check the number of fields and return boolean
    function checkLimit() {
        var json = formBuilder.actions.getData();
        if (json.length > 9) {
            return true;
        }
        return false;
    }

    async function saveForm() {
        let json = formBuilder.actions.getData();
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const response = await fetch("/form/store", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: JSON.stringify(json),
        });
        console.log(response);
    }

    //Constraint to check the number of fields
    // function checkNumberOfField(fieldId = null) {
    //   if (fieldId === null) {
    //     alert("You can only add upto 10 fields in your website.");
    //     return;
    //   }
    //   if (checkLimit()) {
    //     if (fieldId) {
    //       formBuilder.actions.removeField();
    //     }
    //   }
    // }
});
