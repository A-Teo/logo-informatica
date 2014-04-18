function init() {
    initWebGL("logo");
    setScene();
    camera.position.z = 50;
}

function initGlobalVariables(logoCanvas) {
    scene = new THREE.Scene();
    var width = logoCanvas.getAttribute("width");
    var height = logoCanvas.getAttribute("height");
    renderer = new THREE.WebGLRenderer({ canvas: logoCanvas });
    renderer.setSize(width, height);
    camera = new THREE.PerspectiveCamera(45, width / height, 1, 1000);
    scene.add(camera);
}

function initWebGL(idCanvas) {
    if (window.WebGLRenderingContext) {
        var logoCanvas = document.getElementById(idCanvas);
        var ctx = logoCanvas.getContext("webgl");
        if (!ctx) {
            alert("unknown webGL error");
            window.location = "http://get.webgl.org";
        } else {
            initGlobalVariables(logoCanvas);
        }
    } else {
        alert("Lo sentimos, su browser no tiene soporte para WebGL.");
        window.location = "http://get.webgl.org";
    }
}