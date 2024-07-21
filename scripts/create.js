// Faraz Merchant, 4/19/24, IT202 002, Phase 05, fbm@njit.edu  

$(document).ready(() => {
    $("#create_form").submit(event => {

        const code = $("#code").val();
        const name = $("#name").val();
        const description = $("#description").val();
        const price = $("#price").val();
        const color = $("#color").val();
        let isValid = true;

        if (code === "") {
            $("#code").next().text("* This field is required");
            $("#code").next().css({'color': 'maroon'});
            isValid = false;
        } else if (code.length < 4) {
            $("#code").next().text("Minimum of 4 Characters");
            $("#code").next().css({'color': 'maroon'});
            isValid = false;
        } else if (code.length > 10) {
            $("#code").next().text("Maximum of 10 Characters");
            $("#code").next().css({'color': 'maroon'});
            isValid = false;
        } else {
            $("#code").next().text("");
        }

        if (name === "") {
            $("#name").next().text("* This field is required");
            $("#name").next().css({'color': 'maroon'});
            isValid = false;
        } else if (name.length < 10) {
            $("#name").next().text("Minimum of 10 Characters");
            $("#name").next().css({'color': 'maroon'});
            isValid = false;
        } else if (name.length > 100) {
            $("#name").next().text("Maximum of 100 Characters");
            $("#name").next().css({'color': 'maroon'});
            isValid = false;
        } else {
            $("#name").next().text("");
        }

        if (description === "") {
            $("#description").next().text("* This field is required");
            $("#description").next().css({'color': 'maroon'});
            isValid = false;
        } else if (description.length < 10) {
            $("#description").next().text("Minimum of 10 Characters");
            $("#description").next().css({'color': 'maroon'});
            isValid = false;
        } else if (description.length > 255) {
            $("#description").next().text("Maximum of 255 Characters");
            $("#description").next().css({'color': 'maroon'});
            isValid = false;
        } else {
            $("#description").next().text("");
        }

        if (price === "") {
            $("#price").next().text("* This field is required");
            $("#price").next().css({'color': 'maroon'});
            isValid = false;
        } else if (price <= 0) {
            $("#price").next().text("Must be greater than $0");
            $("#price").next().css({'color': 'maroon'});
            isValid = false;
        } else if (price > 100000) {
            $("#price").next().text("Cannot exceed $100,000");
            $("#price").next().css({'color': 'maroon'});
            isValid = false;
        } else if (isNaN(price)) {
            $("#price").next().text("Must be a number");
            $("#price").next().css({'color': 'maroon'});
            isValid = false;
        } else {
            $("#price").next().text("");
        }

        if (color === "") {
            $("#color").next().text("* This field is required");
            $("#color").next().css({'color': 'maroon'});
            isValid = false;
        } else {
            $("#color").next().text("");
        }
        if (isValid) {
            $("#create_form").submit();
        } else {
            event.preventDefault();
        }


    })

    $("#reset").click(() => {
        $("#code").val("");
        $("#code").next().text("*");
        $("#name").val("");
        $("#name").next().text("*");
        $("#description").val("");
        $("#description").next().text("*");
        $("#color").val("");
        $("#color").next().text("*");
        $("#price").val("");
        $("#price").next().text("*");
    })


    $("#code").focus();

});