import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

$(function (){
    const info = $('.intro')
    const leftArrow = $('.left__arrow')
    const rightArrow = $('.right__arrow')
    let images = ["infobg.jpg", "1.png", "2.png", "3.png", "4.png"]
    const url = "../assets/"

    leftArrow.click(() => {
        images = changeImage(images.length - 1, info, images, url)
    })

    rightArrow.click(() => {
        images = changeImage(0, info, images, url)
    })

    function changeImage(elementPosition, htmlElement, imagesArray, url) {
        htmlElement.hide()
        const tempElement = imagesArray.splice(elementPosition, 1)
        imagesArray.splice(imagesArray.length - elementPosition, 0, tempElement)
        htmlElement.css("background-image", "linear-gradient(0deg, rgb(30, 30, 30), rgba(30, 30, 30, 0)), url(\"" + url + imagesArray[0] + "\")")
        htmlElement.fadeIn(500)

        return imagesArray
    }
})


const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 100,
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const jsonFromApi = {
    imagesContainerHeight: 700,
    columns: [
        {id: 1, width: 500},
        {id: 2, width: 500},
        {id: 3, width: 250},
    ],
    images: [
        {id: 1, column: 1, url: '1.png', relativeHeight: '50%'},
        {id: 2, column: 1, url: '2.png', relativeHeight: '50%'},
        {id: 3, column: 2, url: '3.png', relativeHeight: '55%'},
        {id: 4, column: 2, url: '4.png', relativeHeight: '45%'},
        {id: 5, column: 3, url: '5.png', relativeHeight: '30%'},
        {id: 6, column: 3, url: '6.png', relativeHeight: '70%'},
    ]
}
  
  
window.addEventListener('load', () => {
    setImagesContainerHeight();
    initializeImagesContainerColumns();
    initializeImages();
})
  
const setImagesContainerHeight = () => {
    const imagesContainer = document.querySelector('#images-container');
    imagesContainer.style.height = jsonFromApi.imagesContainerHeight + 'px';
}
  
const initializeImagesContainerColumns = () => {
    const imagesContainer = document.querySelector('#images-container');
  
    jsonFromApi.columns.forEach((column) => {
        const columnNode = document.createElement('div');
        columnNode.className = 'images-container-column';
        columnNode.id = 'images-container-column-' + column.id;
        columnNode.style.width = column.width + 'px';
        imagesContainer.appendChild(columnNode);
    })
}
  
const initializeImages = () => {
    jsonFromApi.columns.forEach((column) => {
        const columnNodeId = 'images-container-column-' + column.id
        const columnNode = document.getElementById(columnNodeId);
        const columnImages = jsonFromApi.images.filter((image) => image.column === column.id)
        columnImages.forEach((image) => {
            const imageNode = document.createElement('div');
            imageNode.className = 'image';
            imageNode.style.height = image.relativeHeight;
            imageNode.style.backgroundImage = `url('assets/gymPhotos/${image.url}')`;
            columnNode.appendChild(imageNode)
        })
    })
}

$(function (){
    const trainersInfo = $('.trainers-info')
    const leftArrow = $('.swiper-button-prev')
    const rightArrow = $('.swiper-button-next')
    let texts = ["8 лет в профессиональном спорте<br>Выигрывал первенство Крыма и Севастополя по боксу<br>Трёхкратный чемпион ЮФО Крыма и Севастополя по армреслингу", "19 лет в профессиональном спорте<br>Выигрывала первенство Крыма и Севастополя по кроксу<br>Трёхкратная чемпионка ЮФО Крыма и Севастополя по порно", "25 лет в профессиональном спорте<br>Выигрывала последнество Крыма и Севастополя по боксу<br>Трёхкратный чемпион ЮФО Крыма и Севастополя по браундеру"]

    leftArrow.click(() => {
        texts = changeText(texts.length - 1, trainersInfo, texts)
    })

    rightArrow.click(() => {
        texts = changeText(0, trainersInfo, texts)
    })

    function changeText(elementPosition, htmlElement, textsArray) {
        const tempElement = textsArray.splice(elementPosition, 1)
        textsArray.splice(textsArray.length - elementPosition, 0, tempElement)
        htmlElement.empty()
        htmlElement.append(textsArray[0])

        return textsArray
    }
})

const $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 400);
    return false;
})