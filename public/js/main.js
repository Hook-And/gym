$(function (){
    const info = $('.intro')
    const leftArrow = $('.left__arrow')
    const rightArrow = $('.right__arrow')
    let images = ["infobg.jpg", "1.png", "2.png", "3.png", "4.png"]

    leftArrow.click(() => {
        images.unshift(images[images.length - 1])
        images.pop()
        info.css("background-image", "linear-gradient(0deg, rgb(30, 30, 30), rgba(30, 30, 30, 0)), url(\"../assets/" + images[0] + "\")")
    });

    rightArrow.click(() => {
        images.push(images[0])
        images.shift()
        info.css("background-image", "linear-gradient(0deg, rgb(30, 30, 30), rgba(30, 30, 30, 0)), url(\"../assets/" + images[0] + "\")")
    })
})




