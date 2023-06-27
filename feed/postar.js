'use scrict'
let photo = document.querySelector(".imgPhotoVaga")
let file = document.querySelector("#inputImagem")

photo.addEventListener('click', () => {
    file.click();
})
file.addEventListener('change', (e) => {

    if(file.files.length <= 0){
        return
    }
    let reader = new FileReader()

    reader.onload = () => {
        photo.src = reader.result
    }

    reader.readAsDataURL(file.files[0])
})

let photo2 = document.querySelector(".imgPhotoVaga2")
let file2 = document.querySelector("#inputImagem2")

photo2.addEventListener('click', () => {
    file2.click();
})
file2.addEventListener('change', (e) => {

    if(file2.files.length <= 0){
        return
    }
    let reader = new FileReader()

    reader.onload = () => {
        photo2.src = reader.result
    }

    reader.readAsDataURL(file2.files[0])
})
let photo3 = document.querySelector(".imgPhotoVaga3")
let file3 = document.querySelector("#inputImagem3")

photo3.addEventListener('click', () => {
    file3.click();
})
file3.addEventListener('change', (e) => {

    if(file3.files.length <= 0){
        return
    }
    let reader = new FileReader()

    reader.onload = () => {
        photo3.src = reader.result
    }

    reader.readAsDataURL(file3.files[0])
})
let photo4 = document.querySelector(".imgPhotoVaga4")
let file4 = document.querySelector("#inputImagem4")

photo4.addEventListener('click', () => {
    file4.click();
})
file4.addEventListener('change', (e) => {

    if(file4.files.length <= 0){
        return
    }
    let reader = new FileReader()

    reader.onload = () => {
        photo4.src = reader.result
    }

    reader.readAsDataURL(file4.files[0])
})