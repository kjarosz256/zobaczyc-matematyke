<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Complex Function Plotting</title>
	<script src="../../jslib/jquery.min.js"></script>
	<script src="../../jslib/mathbox2/mathbox-bundle.min.js"></script>
	<link rel="stylesheet" href="../../jslib/mathbox2/mathbox.min.css"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>
<body>
<script type="application/javascript" src="../config.js"></script>
<script type="application/javascript" src="../math-lib.js"></script>
<?php
$module = '';
if(!isset($_GET['module'])){
	$module = 'all';
}else{
	$module = $_GET['module'];
}
?>
<script type="application/javascript">
Config.registerInsert();

var mathbox = mathBox({
	plugins: Config.plugins,
	controls: {
		klass: THREE.OrbitControls,
		parameters: {
			noZoom: true
		}
	},
	camera: {
		fov: 30,
		near: 1,
		far: 100,
	},
});
three = mathbox.three;

//three.camera.position.set(-1, 1, 6);
three.renderer.setClearColor(new THREE.Color(0xFFFFFF), 1.0);

var view = mathbox.set('focus', Config.iframe ? 4 : 6);

var presentation = view.present({
	index: 1
});

var camera = presentation.camera({
	proxy: true,
	position: [2, 2, 4],
	lookAt: [0, 0, 0],
});

<?php if($module == 'all' || $module == 'map'): ?>
presentation.slide();
<?php endif; ?>

Config.registerPresentation(presentation);
</script>
<script src="../functions.js"></script>

<?php if($module == 'all' || $module == 'map'): ?>
<script src="1-complex-map.js"></script>
<?php endif; ?>

<?php if($module == 'all' || $module == 'plot'): ?>
<script src="2-re-im-plot.js"></script>
<?php endif; ?>

<?php if($module == 'all' || $module == 'coloring'): ?>
<script src="3-domain-coloring.js"></script>
<?php endif; ?>


</body>
</html>
