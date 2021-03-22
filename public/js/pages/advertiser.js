/**
 *  Table of Contents
 *
 *  New Campaign Form
 * **/

// New Campaign Form

$('.tab-section-btn').click(function () {
    let activate = $(this).attr('id')

    $('#new-campaign > .tab-section').hide()
    $(`.${activate}-section`).show()

    if (activate === 'service-tab') {
        $('#service-non-video-ad').click()
    } else if (activate === 'product-tab') {
        $('#non-video-ad').click()
    }


})

$('.tab-section-btn-2').click(function () {
    let activate = $(this).attr('id')

    $('.product-tab-section > .tab-section').hide()
    $('.service-tab-section > .tab-section').hide()

    $(`.${activate}-section`).show()
})

// End Campaign Form
