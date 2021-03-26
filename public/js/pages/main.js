/* Contents
1) Home
2) Home Modals
3) Login Page
*/


// Home

$(document).ready(function () {

    //home slider
    let $slides = $('.home-slider .slider .slide')
    let current_slide = 0;
    let total_slides = 3;

    // slider render
    let homeSlider = () => {

        for (let i = 0; i < total_slides; i++) {
            if (current_slide === i) {
                $($slides[i]).show()
            } else {
                $($slides[i]).hide()
            }

        }

    }

    homeSlider()

    // home slider button events
    $('#home-slider-next').click(function () {
        current_slide < total_slides - 1 ? current_slide++ : current_slide = 0
        homeSlider()
    })

    $('#home-slider-prev').click(function () {
        current_slide > 0 ? current_slide-- : current_slide = total_slides - 1
        homeSlider()
    })


})

// End Home

//Home Modals


function openModal(id){
    console.log(id)
    $('#'+ id).show().removeClass('d-none')
}
function closeModal(id){
    $('#'+ id).hide()
}

function modalNext(id){

    let modal = $('#'+ id)
    let items = modal.find('.content').children()
    let nextButton = modal.find('.modal-next-button')
    let trigger = false

    for (let i=0; i < items.length; i++) {
        if(!$(items[i]).hasClass('d-none')){
            trigger = true
            $(items[i]).addClass('d-none')

            if(i === items.length - 2){
               nextButton.hide()
            }
        }else if(trigger){
            $(items[i]).removeClass('d-none')
            trigger = false
        }
        else{
            $(items[i]).addClass('d-none')
        }
    }
}

// End Home Modals


// Register Page

$(window).on('hashchange', roleAnalyser())

function roleAnalyser(){

    const path_name = window.location.pathname
    if (path_name === '/register'){
        console.log(path_name)
        let role = location.search.replace('?', '').split('=')[1]

        changeRole(role)

    }
}


function changeRole(role){


    if(role === undefined){
        role = 'advertiser'
    }
    let roles = $('#role')
    $('.role-btn').removeClass('active').addClass('notActive')

    roles.find(`#${role}-role`).addClass('active').removeClass('notActive')

    setTimeout(()=> {
        $('#role-input').val(role)
        document.getElementById('role-input')
            .dispatchEvent(new Event('input'))
    }, 100)
}

// End Register Page
