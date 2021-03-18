var renderer,
    scene,
    camera,
    myCanvas = document.getElementById('myCanvas');

//RENDERER
renderer = new THREE.WebGLRenderer({
    canvas: myCanvas,
    antialias: true
});
renderer.setClearColor(0xffffff);
renderer.setPixelRatio(window.devicePixelRatio);

container = document.getElementById('container');
renderer.setSize(container.offsetWidth, container.offsetHeight);

//CAMERA
camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 0.1, 1000 );

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


//RENDER LOOP
render();

var delta = 0;
var prevTime = Date.now();

function render() {

    delta += 0.1;

    if (mesh) {

        mesh.rotation.y += 0.01;

        //animation mesh
        // mesh.morphTargetInfluences[ 0 ] = Math.sin(delta) * 20.0;
    }

    renderer.render(scene, camera);

    requestAnimationFrame(render);
}