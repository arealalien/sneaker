//import * as THREE from '../node_modules/three'
//import { OrbitControls } from '../node_modules/three/examples/jsm/controls/OrbitControls.js'

var renderer,
    scene,
    camera,
    container,
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
camera.position.x = 0;
camera.position.y = 10;
camera.position.z = 2;

//SCENE
scene = new THREE.Scene();

//LIGHTS
var light = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(light);

var light2 = new THREE.PointLight(0xffffff, 0.5);
scene.add(light2);

var loader = new THREE.GLTFLoader();

loader.load('models/rtfkt/scene.gltf', handle_load);

var mesh;

function handle_load(gltf) {

    console.log(gltf);
    mesh = gltf.scene;
    console.log(mesh.children[0]);
    mesh.children[0].material = new THREE.MeshLambertMaterial();
    scene.add( mesh );
    mesh.position.z = -100;
}

//controls = new THREE.OrbitControls(camera, renderer.domElement);
//controls.enableDamping = true;
//controls.dampingFactor = 0.25;
//controls.enableZoom = false;
//controls.autoRotate = true;

//RENDER LOOP
render();

var delta = 0;
var prevTime = Date.now();

function render() {

    delta += 0.1;

    if (mesh) {

        mesh.rotation.y += 0.01;
        mesh.rotation.x += 0.005;

        //animation mesh
        // mesh.morphTargetInfluences[ 0 ] = Math.sin(delta) * 20.0;
    }

    renderer.render(scene, camera);

    requestAnimationFrame(render);
}