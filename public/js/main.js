$(function (){
    let currentPosition = 0
    const info = $('.intro')
    const leftArrow = $('.left__arrow')
    const rightArrow = $('.right__arrow')
    const length = 5

    function switchPosition(Position) {
        switch (Position) {
            case 0:
                info.removeClass('js-new-intro-1').removeClass('js-new-intro-2').removeClass('js-new-intro-3').removeClass('js-new-intro-4').addClass('js-new-intro-0')
                break
            case 1:
                info.removeClass('js-new-intro-0').removeClass('js-new-intro-2').removeClass('js-new-intro-3').removeClass('js-new-intro-4').addClass('js-new-intro-1')
                break
            case 2:
                info.removeClass('js-new-intro-1').removeClass('js-new-intro-0').removeClass('js-new-intro-3').removeClass('js-new-intro-4').addClass('js-new-intro-2')
                break
            case 3:
                info.removeClass('js-new-intro-1').removeClass('js-new-intro-2').removeClass('js-new-intro-0').removeClass('js-new-intro-4').addClass('js-new-intro-3')
                break
            case 4:
                info.removeClass('js-new-intro-1').removeClass('js-new-intro-2').removeClass('js-new-intro-3').removeClass('js-new-intro-0').addClass('js-new-intro-4')
                break
            default:
                break
        }
    }

    leftArrow.click(() => {
        if (currentPosition === 0) {
            currentPosition = length - 1
        } else {
            currentPosition -= 1
        }
        info.hide()
        switchPosition(currentPosition)
        info.fadeIn(500)
    })
    rightArrow.click(() => {
        if(currentPosition === length - 1) {
            currentPosition = 0
        }
        else {
            currentPosition += 1
        }
        info.hide()
        switchPosition(currentPosition)
        info.fadeIn(500)
    })
})




