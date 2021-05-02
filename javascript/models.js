//import * as THREE from '../node_modules/three'
//import { OrbitControls } from '../node_modules/three/examples/jsm/controls/OrbitControls.js'

let GLobject = "models/rtfkt/scene.gltf";

let url = window.location.href;
let GLobjectPath = url.split("=")[1];

if (GLobjectPath === "sneaker") {
    GLobject = "models/rtfkt/scene.gltf";
} else if (GLobjectPath === "90s") {
    GLobject = "models/90s/scene.gltf";
} else if (GLobjectPath === "blue") {
    GLobject = "models/blue-jay/scene.gltf";
} else if (GLobjectPath === "cardboard") {
    GLobject = "models/cardboard/scene.gltf";
} else if (GLobjectPath === "tekken") {
    GLobject = "models/tekken/scene.gltf";
} else {
    GLobject = "models/rtfkt/scene.gltf";
}

var renderer,
    scene,
    camera,
    container,
    controls,
    shoebox = document.getElementById('shoebox');


//RENDERER
renderer = new THREE.WebGLRenderer({
    canvas: shoebox,
    antialias: true,
    alpha: true
});

renderer.setClearColor(0x05030a, 1);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

container = document.getElementById('shoebox-wrapper');
renderer.setSize(container.offsetWidth, container.offsetHeight);

window.addEventListener('resize', () => {

    // Update camera
    camera.aspect = container.offsetWidth / container.offsetHeight;
    camera.updateProjectionMatrix();

    // Update renderer
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
});


//CAMERA
camera = new THREE.PerspectiveCamera(45, container.offsetWidth / container.offsetHeight, 0.1, 1000 );
camera.position.x = 50;
camera.position.y = 100;
camera.position.z = 200;

//SCENE
scene = new THREE.Scene();

//LIGHTS
var light = new THREE.AmbientLight(0xffd15c, 0.5);
light.castShadow = true;
scene.add(light);

var light2 = new THREE.PointLight(0x5d00ff, 0.5);
light2.castShadow = true;
scene.add(light2);

var ambient = new THREE.AmbientLight(0x404040, 1.0);
ambient.castShadow = true;
scene.add(ambient);

var light4 = new THREE.HemisphereLight(0x404040, 0xFFFFFF, 0.5);
light4.castShadow = true;
scene.add(light4);

scene.fog = new THREE.Fog(0x05030a, 0, 350);

var loader = new THREE.GLTFLoader();

// Load Object
loader.load(GLobject, handle_load);

var mesh;

function handle_load(gltf) {

    console.log(gltf);
    mesh = gltf.scene;
    console.log(mesh.children[0]);
    mesh.children[0].material = new THREE.MeshLambertMaterial();

    if (GLobjectPath === "90s") {
        mesh.scale.setScalar(.25/25);
    } else if (GLobjectPath === "cardboard") {
        mesh.scale.setScalar(.25/25);
    } else if (GLobjectPath === "tekken") {
        mesh.scale.setScalar(.25/25);
    }

    scene.add( mesh );
    mesh.position.z = 0;
    mesh.position.y = -10;

}

// controls
controls = new THREE.OrbitControls( camera, renderer.domElement );

controls.enablePan = false;
controls.enableZoom = false;
controls.enableDamping = true;

controls.minDistance = 0;
controls.maxDistance = Infinity;

controls.smoothDistance = false;
controls.smoothMinDistance = 0;
controls.smoothMaxDistance = Infinity;
controls.smoothDistanceSpeed = 0.1;

controls.isSmoothPolar = false;

controls.dampingFactor = 0.07;
controls.rotateSpeed = 0.07;

controls.screenSpacePanning = false;

controls.minDistance = 10;
controls.maxDistance = 100;



// FLOOR
var floorTexture = new THREE.ImageUtils.loadTexture('images/pattern.jpg');
floorTexture.wrapS = floorTexture.wrapT = THREE.RepeatWrapping;
floorTexture.repeat.set( 100, 100 );
var floorMaterial = new THREE.MeshBasicMaterial( { map: floorTexture, side: THREE.DoubleSide } );
var floorGeometry = new THREE.PlaneGeometry(1000, 1000, 10, 10);
var floor = new THREE.Mesh(floorGeometry, floorMaterial);
floor.position.y = -111;
floor.rotation.x = Math.PI / 2;
scene.add(floor);




//RENDER LOOP
render();

//var delta = 0;
//var prevTime = Date.now();

function render() {

    /*
    delta += 0.1;

    if (mesh) {

        mesh.rotation.y += 0.01;

        //animation mesh
        // mesh.morphTargetInfluences[ 0 ] = Math.sin(delta) * 20.0;
    }
    */

    controls.update();

    renderer.render(scene, camera);

    requestAnimationFrame(render);
}