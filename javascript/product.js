let productItem;

productItem = document.querySelectorAll(".product-view-item");

productItem.forEach(function (item) {
    item.addEventListener("mouseenter", function() {
        item.querySelector(".pitem1").style.display = "none";
        item.querySelector(".pitem2").style.display = "block";
    });
    item.addEventListener("mouseleave", function() {
        item.querySelector(".pitem1").style.display = "block";
        item.querySelector(".pitem2").style.display = "none";
    });
});