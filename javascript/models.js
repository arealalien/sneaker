//import * as THREE from '../node_modules/three'
//import { OrbitControls } from '../node_modules/three/examples/jsm/controls/OrbitControls.js'

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

renderer.setClearColor(0x000000, .35);
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
var light = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(light);

var light2 = new THREE.PointLight(0xffffff, 0.5);
scene.add(light2);

var ambient = new THREE.AmbientLight(0x404040, 1.0);
scene.add(ambient);

var loader = new THREE.GLTFLoader();

loader.load('models/rtfkt/scene.gltf', handle_load);

var mesh;

function handle_load(gltf) {

    console.log(gltf);
    mesh = gltf.scene;
    console.log(mesh.children[0]);
    mesh.children[0].material = new THREE.MeshLambertMaterial();
    scene.add( mesh );
    mesh.position.z = 0;

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