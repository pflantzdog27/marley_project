var particles;
window.onload = function() {
    var canvas = document.getElementById('particle_canvas');
    particles = new ParticleCanvas(canvas, {x: 490});
particles.start();
};

var effects = {

smoke: {
    shape: 'circle',
    velocity: new Vector({y: -0.35}),
xVariance: 10,
yVariance: 15,
spawnSpeed: 1,
generations: 100000,
maxParticles: 5000,
size: 16,
sizeVariance: 10,
life: 350,
lifeVariance: 50,
direction: 0,
directionVariance: 25,
color: '#ccc',
opacity: 1,
onDraw: function(p) {
    p.opacity = 0.251 - (p.age / p.life) * 0.25;
    }
}
}


function loadPreset(smoke) {
    var obj;
    if((obj = effects[val])) {
    particles.update(obj);
    for(var i in obj) {
    var value = (obj[i] instanceof Vector) ? -obj[i].y : obj[i];
    $(':input[name=' + i + ']').val(value);
    }
$('input').change();
}
}

