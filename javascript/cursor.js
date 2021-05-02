const cursorInner = document.querySelector('.cursor');
const cursorDefault = document.querySelector('.cursor-default');
const cursorPointer = document.querySelector('.cursor-pointer');
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor-circle');

const mouse = { x: -100, y: -100 }; // mouse pointer's coordinates
const pos = { x: 0, y: 0 }; // cursor's coordinates
const speed = 0.1; // between 0 and 1

let shoppingCartNote = document.getElementsByClassName("shopping-cart-note")[0];
let shoppingCartHover = document.getElementById("cart");

shoppingCartHover.addEventListener("mouseenter", function(event) {
    shoppingCartNote.style.opacity = "1";
});
shoppingCartHover.addEventListener("mouseleave", function(event) {
    shoppingCartNote.style.opacity = "0";
});

// Hover functions variables
let cartItemRemove = document.querySelectorAll(".cart-item-remove");
// Hover functions
cartItemRemove.forEach(function (item) {
    item.addEventListener("mouseenter", function () {
        item.querySelector(".cart-item-remove-note").style.opacity = "1";
    });
    item.addEventListener("mouseleave", function () {
        item.querySelector(".cart-item-remove-note").style.opacity = "0";
    });
});

const updateCoordinates = e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}

window.addEventListener('mousemove', updateCoordinates);


function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(
        Math.pow(diffX, 2) + Math.pow(diffY, 2)
    );
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
}


const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);

    pos.x += diffX * speed;
    pos.y += diffY * speed;

    const angle = getAngle(diffX, diffY);
    const squeeze = getSqueeze(diffX, diffY);

    const scale = 'scale(' + (1 + squeeze) + ', ' + (1 - squeeze) +')';
    const rotate = 'rotate(' + angle +'deg)';
    const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

    cursorInner.style.transform = translate;
    cursor.style.transform = translate;
    cursorCircle.style.transform = rotate + scale;

    shoppingCartNote.style.transform = translate;

    cartItemRemove.forEach(function (item) {
        item.querySelector(".cart-item-remove-note").style.transform = translate;
    });
};

function loop() {
    updateCursor();
    requestAnimationFrame(loop);
}

requestAnimationFrame(loop);



const cursorModifiers = document.querySelectorAll('[cursor-class]');

cursorModifiers.forEach(curosrModifier => {
    curosrModifier.addEventListener('mouseenter', function() {
        const className = this.getAttribute('cursor-class');
        cursorInner.classList.add(className);
    });

    curosrModifier.addEventListener('mouseleave', function() {
        const className = this.getAttribute('cursor-class');
        cursorInner.classList.remove(className);
    });
});