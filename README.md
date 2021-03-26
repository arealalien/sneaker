# sneaker
Project for IT class

<br/>

Loading 3D Objects in THREE.JS.

Plugins used:
1. THREE.JS
2. OrbitControls.js



## models.js
> File for loading 3D models from "models/"

<br/>

## sneakers.js
> File for generating HTML DOM elements for index.php

<br/>

### How to use:
Add necessary items to array, and elements will be created in the grid.

Like so:

```javascript
sneakers = [
    [...]
    {
        productName: "Name",
        sneakerImage: "images/" + imageLocation + "/fileName.png",
        sneakerBackground: "images/" + imageLocation + "/fileName.jpg",
        link: rootURL + "name",
    }
]
```