/*
* .js file for my own things.
* */

console.log('spin.js');

/* i know there are a lot of variables i don't use, i made a comment with it in case i like to change the code once*/

// let to select the wrap around all images: (the wrap and all the stuff inside)
let spin = document.querySelector('.spin_wrap');
// var to select the boxes of the images: (gives a Array)
let images = spin.querySelectorAll('.spin_img');
/*// var to select the whole section:
let spinGallery = document.querySelector('#spin_gallery');*/
// var for the amount of images constant 10: (there are 10 Images)
const imgCount = 10;
// var to count the current photo:
let selectedIndex = 0;
/*// var with the image width inside:
let imgWidth = spin.offsetWidth;
// var with the image height inside:
let imgHeight = spin.offsetHeight;*/
//var if Vertical active = true / Horizontal active = false:
let verticalNotHorizontal = true;
// var to rotate Y or Z:
let rotateYZ = 'rotateY';
/*// var to rotate Y by Vertical or Z by Horizontal: (is verticalNotHorizontal==true 'rotateY' else 'rotateX')
let rotateYZT = verticalNotHorizontal? 'rotateY' : 'rotateX';*/
// var with the radius of the Images: (used for translateZ)
let radius = 320;
/*// var to radius 320 by Vertical or 280 by Horizontal: (is verticalNotHorizontal==true 320 else 280)
let radiusT = verticalNotHorizontal? 320 : 280;*/
// var for positioning the pictures: circle = 360 imgCount = 10 so (360 / 10 = 36)
let circleDivided = 36;




/* rotate the Spin depending on the pressed button*/
function rotateSpin() {
    const posAngle = circleDivided * selectedIndex * -1; // The * -1 sets the number to negative
    spin.style.transform = 'translateZ(' + -radius + 'px) ' +
        rotateYZ + '(' + posAngle + 'deg)';

// select img on front to be able to change the style (below, imgBiggerVisual();)
    frontImage = (selectedIndex % 10 +10) % 10;
    //(selectedIndex % 10 +10) % 10 = always prints the correct img 0 - 10 no matter whether negative or positive
    imgBiggerVisual();
}

/* add -1 to selected Index by click on prevButton*/
let prevButton = document.querySelector('.previous-button');
prevButton.addEventListener( 'click', function() {
    selectedIndex--;
    rotateSpin();
});
/* add +1 to selected Index by click on prevButton*/
let nextButton = document.querySelector('.next-button');
nextButton.addEventListener( 'click', function() {
    selectedIndex++;
    rotateSpin();
});

/* loop to change every single picture to the right position*/
function changeEveryImgPosition() {
    for (let i=0; i < images.length; i++) {
        let img = images[i];
        if ( i < imgCount ) {
            let imgAngle = circleDivided * i;
            img.style.transform = rotateYZ + '(' + imgAngle + 'deg) translateZ(' + radius + 'px)';
        } else {
            img.style.transform = 'none';
        }
    }
}

/*// EventListener goo Horizontal by click on spin (image)*/
spin.addEventListener( 'click', function() {
    if (radius === 280){
        goVertical();
    } else {
        goHorizontal();
    }
});

/*// function goo Horizontal by click on spin (image)*/
function goHorizontal() {
    console.log("horizontal");
    rotateYZ = 'rotateX';

    radius = 280;
    let positionAngle = circleDivided * selectedIndex * -1;
    spin.style.transform = 'translateZ(' + -radius + 'px) ' +
        rotateYZ + '(' + positionAngle + 'deg)';

    changeEveryImgPosition();
    rotateSpin();
    verticalNotHorizontal = false;

    // change the directions of the arrows in the buttons
    document.querySelector('.previous-button').innerHTML = '<i class="fa  fa-angle-down">&#x2193;</i>';
    document.querySelector('.next-button').innerHTML = '<i class="fa  fa-angle-up">&#x2191;</i>';
}


// for click on the hole section (doesn't working because of the horizontal function and the buttons)
/*spinGallery.addEventListener( 'click', function() {
    goVertical();
    console.log('gallery click');
});*/

/* function goo Vertical by click on spin (image)*/
function goVertical() {
    console.log("vertical");
    rotateYZ = 'rotateY';
    radius = 320;
    let positionAngle = circleDivided * selectedIndex * -1;
    spin.style.transform = 'translateZ(' + -radius + 'px) ' +
        rotateYZ + '(' + positionAngle + 'deg)';

    changeEveryImgPosition();
    rotateSpin();
    imgBiggerVisual();
    verticalNotHorizontal = true;

    // change the directions of the arrows in the buttons
    document.querySelector('.previous-button').innerHTML = '<i class="fa  fa-angle-left">&#x2190;</i>';
    document.querySelector('.next-button').innerHTML = '<i class="fa  fa-angle-right">\t&#x2192;</i>';
}

/* Img bigger and visual (changed the size of the front Image)*/
// var select always the Image on front
let frontImage = 0;

function imgBiggerVisual() {

    for (let i = 0; i < images.length; i++) {

        let imagesClassList =images[i].classList; // classlist from target image
        console.log(imagesClassList);
        let imagesITransformFront = images[i].style.transform; //transform property of the target image
        console.log(imagesITransformFront);

        let iSubOne = i === 0 ? 0:  i -1;
        console.log(iSubOne);
        let imagesLastITransformFront = images[iSubOne].style.transform;
        console.log('i transform ist =' + imagesLastITransformFront);

        if (i === frontImage && radius === 280){
            console.log('true' + frontImage);

            imagesClassList.add("toggle_front_image"); // for opacity

            images[i].style.transform = imagesITransformFront +'scale(2)';

        } else if (i === frontImage && radius === 320){
            console.log('vertical' + frontImage);
            imagesClassList.add("toggle_front_image"); // for opacity
            // images[i].style.transform = imagesITransformFront ;
            images[i].style.transform = images[i].style.transform.replace('scale(2)', ' ');
        } else {
            console.log('false' + frontImage);
            imagesClassList.remove("toggle_front_image"); // for opacity
            // images[i].style.transform = imagesITransformFront ;
            images[i].style.transform = images[i].style.transform.replace('scale(2)', ' ');
        }
    }
}

