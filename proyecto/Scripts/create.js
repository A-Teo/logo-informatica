var crearElementos = {
    globo: function () {
        var geometry = new THREE.SphereGeometry(12, 32, 32);
        var material = new THREE.MeshNormalMaterial({ color: 0x70a0e0 });
        var sphere = new THREE.Mesh(geometry, material);
        return sphere;
    },

    textoRotatorio: function(text) {
        var group = new THREE.Object3D();
        group.add(crearElementos.texto(text));
        return group;
    },

    texto: function (text) {
		var height = 1,
            size = 6,

            curveSegments = 4,

            bevelThickness = 0.5,
            bevelSize = 0.2,
            bevelEnabled = true,

            font = "gentilis",
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
        txt1.position.y = -2.5;
        txt1.position.z = 15;
        return txt1;
    },
    nubes: function () {
        var group = new THREE.Object3D();
        var geometry = new THREE.Geometry();
        //group.add(crearElementos.nube(0, 0, 0, geometry));
        group.add(crearElementos.nube(-50, 0, -10, geometry));
        group.add(crearElementos.nube(38, 0, -5, geometry));
        group.add(crearElementos.nube(45, 0, 10, geometry));
        //group.add(crearElementos.nube(0, 0, 0, geometry));
        group.add(crearElementos.nube(-20, 0, 15, geometry));
        group.add(crearElementos.nube(-50, 0, -10, geometry));
        //group.add(crearElementos.nube(0, 0, 0, geometry));
        var line = new THREE.Line(geometry, new THREE.LineBasicMaterial({ color: 0xffffff, opacity: 1 }));
        group.add(line);

        return group;
    },
    nube: function (xNube, yNube, zNube, geometry) {
        var group = new THREE.Object3D();
        group.add(crearElementos.esfera1());
        group.add(crearElementos.esfera2());
        group.add(crearElementos.esfera3());
        //group.add(crearElementos.esfera4());
        //group.add(crearElementos.esfera5());
        geometry.vertices.push(new THREE.Vector3(xNube, yNube, zNube));
        group.position.set(xNube, yNube, zNube);
        return group;
    },
    esfera: function (r, w, h, hStartAngle, hSweep, vStartAngle, vSweep) {
        var geometry = new THREE.SphereGeometry(r, w, h, hStartAngle, hSweep, vStartAngle, vSweep);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        return sphere;

    },
    esfera1: function () {
        var geometry = new THREE.SphereGeometry(1, 10, 10, Math.PI, Math.PI * 2, 0, Math.PI/2);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        sphere.position.set(-1, 0, 0);
        return sphere;
    },
    esfera2: function () {
        var geometry = new THREE.SphereGeometry(1, 10, 10, Math.PI, Math.PI * 2, 0, Math.PI / 2);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        sphere.position.set(1, 0, 0);
        return sphere;
    },
    esfera3: function () {
        var geometry = new THREE.SphereGeometry(1, 20, 20, 0, Math.PI * 2, 0, Math.PI/2);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        sphere.position.set(0, 0, 0);
        return sphere;
    },
    esfera4: function () {
        var geometry = new THREE.SphereGeometry(1, 20, 20, 0, Math.PI * 2, 0, Math.PI / 2);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        sphere.position.set(-1, 0, 0);
        return sphere;
    },
    esfera5: function () {
        var geometry = new THREE.SphereGeometry(1, 20, 20, 0, Math.PI * 2, 90, Math.PI / 2);
        var material = new THREE.MeshBasicMaterial({ color: 0xcccccc });
        var sphere = new THREE.Mesh(geometry, material);
        sphere.position.set(1, 0, 0);
        return sphere;
    },
    
    textoLambda: function (text) {
    	var textGeo = new THREE.TextGeometry(text, {
            size: 4,
            height: 1,
            curveSegments: 4,

            bevelThickness: 0.5,
            bevelSize: 0.2,
            bevelEnabled: true,

            font: "helvetiker",
            weight: "bold",
            style: "normal"
        });
        var material = new THREE.MeshNormalMaterial({ color: 0x309070 });
        textGeo.computeBoundingBox();
        var centerOffset = -0.5 * (textGeo.boundingBox.max.x - textGeo.boundingBox.min.x);
        var txt1 = new THREE.Mesh(textGeo, material);
        txt1.position.x = centerOffset;
        txt1.position.z = 12;
        txt1.position.y = -2;
        return txt1;
    },
    
    grafo: function () {
    	var PI2 = Math.PI*2;
		var material = new THREE.MeshNormalMaterial({ color: 0x309070 });
		var geometry = new THREE.Geometry();

		particle = new THREE.Sprite( material );
		particle.position.set(0,0,0);
		//particle.scale.x = particle.scale.y = 10;
		//scene.add( particle );
		geometry.vertices.push( particle.position );
				
		particle = new THREE.Sprite( material );
		particle.position.set(-80,10,-10);
		particle.scale.x = particle.scale.y = 10;
		//scene.add( particle );
		geometry.vertices.push( particle.position );

		particle = new THREE.Sprite( material );
		particle.position.set(38,5,-5);
		//scene.add( particle );
		geometry.vertices.push( particle.position );
					
		particle = new THREE.Sprite( material );
		particle.position.set(45,-5,10);
		//scene.add( particle );
		geometry.vertices.push( particle.position );
					
		particle = new THREE.Sprite( material );
		particle.position.set(-20, -2, 15); 					
		//scene.add( particle );
		geometry.vertices.push( particle.position );
		
		var line = new THREE.Line( geometry, new THREE.LineBasicMaterial( { color: 0xffffff, opacity: 0.5 } ) );
		scene.add( line );

    }
}