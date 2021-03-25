// Declaring Variables
let sneakers,
    sneakerGridInner,
    // Variables for Array
    imageLocation,
    rootURL,
    // Elements to be created
    sneakerLink,
    sneakerGridBox,
    sneaker,
    sneakerBackgroundWrapper,
    sneakerBackground,
    elementImageBlur;

sneakerGridInner = document.getElementsByClassName("sneaker-grid-inner")[0];

// Path
imageLocation = "sneakers";
rootURL = "canvas.php?&product=";

sneakers = [
    {
        productName: "Sneaker",
        sneakerImage: "images/" + imageLocation + "/sneaker-1.png",
        sneakerBackground: "images/" + imageLocation + "/sneaker-1-bc.jpg",
        link: rootURL + "sneaker",
    },
    {
        productName: "Blue",
        sneakerImage: "images/" + imageLocation + "/sneaker-2.png",
        sneakerBackground: "images/" + imageLocation + "/sneaker-2-bc.jpg",
        link: rootURL + "blue",
    },
    {
        productName: "Sneaker",
        sneakerImage: "images/" + imageLocation + "/sneaker-1.png",
        sneakerBackground: "images/" + imageLocation + "/sneaker-1-bc.jpg",
        link: rootURL + "sneaker",
    },
    {
        productName: "Sneaker",
        sneakerImage: "images/" + imageLocation + "/sneaker-1.png",
        sneakerBackground: "images/" + imageLocation + "/sneaker-1-bc.jpg",
        link: rootURL + "sneaker",
    },
    {
        productName: "Sneaker",
        sneakerImage: "images/" + imageLocation + "/sneaker-1.png",
        sneakerBackground: "images/" + imageLocation + "/sneaker-1-bc.jpg",
        link: rootURL + "sneaker",
    },
]


// Function For Creating Elements Inside Container
function createElements(item, index) {
    // Create Elements
    // = - = - = - = -
    sneakerLink = document.createElement('a');
    sneakerGridBox = document.createElement('div');
    sneaker = document.createElement('img');
    sneakerBackgroundWrapper = document.createElement('div');
    sneakerBackground = document.createElement('img');
    elementImageBlur = document.createElement('img');
    // Set Classes On Created Elements
    // = - = - = - = - = - = - = - = -
    sneakerLink.className = 'sneaker-grid-box-link';
    sneakerGridBox.className = 'sneaker-grid-box flexbox-col';
    sneaker.className = 'sneaker';
    sneakerBackgroundWrapper.className = 'sneaker-grid-box-background flexbox';
    sneakerBackground.className = 'sneaker-inner';
    elementImageBlur.className = 'sneaker-background-blur';
    // Take Info From Array, And Apply To Elements
    // = - = - = - = - = - = - = - = - = - = - = -
    sneakerLink.href = sneakers[index]["link"];
    sneaker.src = sneakers[index]["sneakerImage"];
    sneakerBackground.src = sneakers[index]["sneakerBackground"];
    elementImageBlur.src = sneakers[index]["sneakerBackground"];
    // Append Children
    // = - = - = - = -
    sneakerGridInner.appendChild(sneakerLink);
    sneakerLink.appendChild(sneakerGridBox);
    sneakerGridBox.appendChild(sneaker);
    sneakerGridBox.appendChild(sneakerBackgroundWrapper);
    sneakerBackgroundWrapper.appendChild(sneakerBackground);
    sneakerGridBox.appendChild(elementImageBlur);
}

// Run Function In A Loop
sneakers.forEach(createElements);

// Hover functions variables
let elementHover = document.querySelectorAll(".sneaker-grid-box");
// Hover functions
elementHover.forEach(function (item) {
    item.addEventListener("mouseenter", function () {
        item.querySelector(".sneaker").style.transform = "rotate(-35deg) scale(1.65, 1.65)";
        item.querySelector(".sneaker-inner").style.minWidth = "100%";
        item.querySelector(".sneaker-inner").style.minHeight = "100%";
        item.querySelector(".sneaker-inner").style.maxHeight = "110%";
    });
    item.addEventListener("mouseleave", function () {
        item.querySelector(".sneaker").style.transform = "rotate(-35deg) scale(1.5, 1.5)";
        item.querySelector(".sneaker-inner").style.minWidth = "110%";
        item.querySelector(".sneaker-inner").style.minHeight = "110%";
        item.querySelector(".sneaker-inner").style.maxHeight = "120%";
    });
});