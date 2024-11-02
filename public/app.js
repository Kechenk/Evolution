import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';

const camera = new THREE.PerspectiveCamera(
  100,
  window.innerWidth / window.innerHeight,
  0.1,
  1000
);
camera.position.z = 5;
camera.lookAt(new THREE.Vector3(0, 0, 0));

const scene = new THREE.Scene();

const loader = new GLTFLoader();
loader.load('astronaut_helmet.glb',
  (gltf) => {
    const astro = gltf.scene;
    scene.add(astro);
    astro.scale.set(0.5, 0.5, 0.5);

    // Start rendering after the model is loaded
    reRender3D();
  },
  (xhr) => {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');
  },
  (error) => {
    console.error('Error loading model:', error);
  }
);

const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById('container3D').appendChild(renderer.domElement);

const ambientLight = new THREE.AmbientLight(0xffffff, 1.3);
scene.add(ambientLight);

const reRender3D = () => {
  requestAnimationFrame(reRender3D);
  renderer.render(scene, camera);
}