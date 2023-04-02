//stores the input element as a variable
const imageInput = document.querySelector('.inputImage')
const iconToBeReplaced = document.querySelector('.imageIcon')


imageInput.addEventListener('change', function(){
    const imageFile = imageInput.files[0]

    if (imageFile){
        console.log("true")
        iconToBeReplaced.src = URL.createObjectURL(imageFile)
        iconToBeReplaced.width = 300

    }
    else{
        console.log("false")
        iconToBeReplaced.src = "./Images/imageInputIcon.png"
        iconToBeReplaced.width = "150px"
    }
    console.log("noticed something")
})