$(function (){
    const info = $('.intro')
    const leftArrow = $('.left__arrow')
    const rightArrow = $('.right__arrow')
    let images = ["infobg.jpg", "1.png", "2.png", "3.png", "4.png"]
    const url = "../assets/"

    leftArrow.click(() => {
        images = changeImage(images.length - 1, info, images, url)
    });

    rightArrow.click(() => {
        images = changeImage(0, info, images, url)
    })

    function changeImage(elementPosition, htmlElement, imagesArray, url) {
        const tempElement = imagesArray.splice(elementPosition, 1)
        imagesArray.splice(imagesArray.length - elementPosition, 0, tempElement)
        htmlElement.css("background-image", "linear-gradient(0deg, rgb(30, 30, 30), rgba(30, 30, 30, 0)), url(\"" + url + imagesArray[0] + "\")")

        return imagesArray
    }
})




