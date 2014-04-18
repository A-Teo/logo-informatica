﻿var crearElementos = {
    globo: function () {
        var geometry = new THREE.SphereGeometry(10, 32, 32);
        var material = new THREE.MeshNormalMaterial({ color: 0x70a0e0 });
        var sphere = new THREE.Mesh(geometry, material);
        return sphere;
    },

    textoRotatorio: function() {
        var group = new THREE.Object3D();
        group.add(crearElementos.texto());
        return group;
    },

    texto: function () {
        var text = "Informática",
            height = 1,
            size = 6,

            curveSegments = 4,

            bevelThickness = 0.5,
            bevelSize = 0.2,
            bevelEnabled = true,

            font = "optimer",
            weight = "normal",
            style = "normal";
        var properties = {
            size: size,
            height: height,
            curveSegments: curveSegments,

            bevelThickness: bevelThickness,
            bevelSize: bevelSize,
            bevelEnabled: bevelEnabled,

            font: font,
            weight: weight,
            style: style
        };
        var textGeo = new THREE.TextGeometry(text, properties);
        var material = new THREE.MeshNormalMaterial({ color: 0x307090 });
        textGeo.computeBoundingBox();
        var centerOffset = -0.5 * (textGeo.boundingBox.max.x - textGeo.boundingBox.min.x);
        var txt1 = new THREE.Mesh(textGeo, material);
        txt1.position.x = centerOffset;
        txt1.position.z = 12;
        txt1.position.y = -3;
        return txt1;
    },
    nube: function () {
        var group = new THREE.Object3D();
        group.add(crearElementos.esfera());
        return group;
    },
    textoLambda: function () {
    	var textGeo = new THREE.TextGeometry("i++", {
            size: 4,
            height: 1,
            curveSegments: 4,

            bevelThickness: 0.5,
            bevelSize: 0.2,
            bevelEnabled: true,

            font: "optimer",
            weight: "bold",
            style: "normal"
        });
        var material = new THREE.MeshNormalMaterial({ color: 0x309070 });
        textGeo.computeBoundingBox();
        var centerOffset = -0.5 * (textGeo.boundingBox.max.x - textGeo.boundingBox.min.x);
        var txt1 = new THREE.Mesh(textGeo, material);
        txt1.position.x = centerOffset;
        txt1.position.z = 10;
        txt1.position.y = -2;
        return txt1;
    }
}