// Faraz Merchant, 4/19/24, IT202 002, Phase 05, fbm@njit.edu  

$(document).ready(() => {

    $("#product_img").mouseover(() => {

        const color_src = $("#product_img").attr("src");
        const bw_src = color_src.replace("color", "bw");
        $("#product_img").attr("src", bw_src);

    })

    $("#product_img").mouseout(() => {

        color_src = $("#product_img").attr("src").replace("bw", "color");
        $("#product_img").attr("src", color_src);

    })

})