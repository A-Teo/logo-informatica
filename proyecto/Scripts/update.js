var actualizarElementos = {
    esferaLogo: function () {
        var esfera = elements["esfera"];
        (
            rotar = function () {
                esfera.rotation.x += 0.1;
                esfera.rotation.y += 0.1;
                camera.position.z = 2;
            }
        )();
    },
    cubo1: function () {
        var cube = elements["cube"];
        (
            rotar = function () {
                //   cube.rotation.x += 0.1;
                // cube.rotation.y += 0.1;
                camera.position.z = 5;
            }
        )();
    },
    texto1: function () {
        var texto = elements["texto1"];
    }
}