<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Complex Algebra</title>
	<script src="../../jslib/jquery.min.js"></script>
	<script src="../../jslib/mathbox2/mathbox-bundle.min.js"></script>
	<link rel="stylesheet" href="../../jslib/mathbox2/mathbox.min.css"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>
<body>
<script type="application/javascript" src="../config.js"></script>
<script type="application/javascript">
Config.registerInsert();

var mathbox = mathBox({
	plugins: Config.plugins,
	controls: {
		klass: THREE.OrbitControls,
		parameters: {
			// not needed
			noZoom: true
		}
	},
	camera: {
		fov: 30
	},
});
three = mathbox.three;

three.camera.position.set(-1, 1, 6);
three.renderer.setClearColor(new THREE.Color(0xFFFFFF), 1.0);

var view = mathbox.set('focus', 4);

var index = getUrlVars()['start'];
if(index % 1 !== 0){
	index = 1;
}

var presentation = view.present({
	index: 1
});

Config.registerPresentation(presentation);
</script>

<?php
$module = '';
if(!isset($_GET['module'])){
	$module = 'all';
}else{
	$module = $_GET['module'];
}
?>

<?php if($module == 'all' || $module == 'add'): ?>
<script src="1-complex-plane.js"></script>
<script src="2-complex-addition.js"></script>
<script src="3-complex-subtraction.js"></script>
<?php endif; ?>

<?php if($module == 'all' || $module == 'prod'): ?>
<script src="4-trig-form.js"></script>
<script src="5-complex-multiplication.js"></script>
<script src="6-complex-division.js"></script>
<?php endif; ?>

</body>
</html>
