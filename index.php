<?php
	$siteTitle = "DEMO";
	$siteUrl = "demo";
	
	//rootパス
	$path = "";
	//require_once('function.php');

	$arr = array();
?>

<!doctype html>
<html>
<?php include($path."header.php"); ?>
<body>
<?php include($path."nav.php"); ?>
	
		<div id="barba-wrapper" aria-live="polite">
			<div class="barba-container">
				<div class="inner page-1">
					<div class="content">
						<h2>Select</h2>
						
						<?php
							require_once('function.php');
						
							//imgChange('a', 's');
						?>
						
						<!-- POST -->
						<form method="post">
							<button name="test1">select1</button>
							<button name="test2">select2</button>
							<button name="test3">select3</button>
							<button name="test4">select4</button>
							<button name="test5">select5</button>
							<button name="test6">select6</button>
							<p>button</p>
							<button name="a">a</button>
							<button name="b">b</button>
							<button name="c">c</button>
							<button name="d">d</button>
							<button name="e">e</button>
							<button name="f">f</button>
							<button name="g">g</button>
							<button name="h">h</button>
							<br>
							
							<!--  -->
							<input class="input_checkbox" type="checkbox" name="cue1" value="image1" id="cue-01" checked="checked" v-model="checkedNames">
							<input class="input_checkbox" type="checkbox" name="cue1" value="image2" id="cue-02" v-model="checkedNames">
							<input class="input_checkbox" type="checkbox" name="cue1" value="image3" id="cue-03" v-model="checkedNames">
							<input class="input_checkbox" type="checkbox" name="cue1" value="image4" id="cue-04" v-model="checkedNames">
							<br>
							<br>
							<!--  -->
							<button name="">画像作成</button>
						</form>
						<br>
						
						<div id='example-3'>
							<input type="checkbox" id="01" value="01" v-model="checkedNames">
							<label for="01">01</label>
							<input type="checkbox" id="02" value="02" v-model="checkedNames">
							<label for="02">02</label>
							<input type="checkbox" id="03" value="03" v-model="checkedNames">
							<label for="03">03</label>
							<br>
							<span>Checked names: {{ checkedNames }}</span>
							<br>
							
							 <span>Checked names: {{ checkedNames }}</span>
							
							<div style="max-width: 400px; width: 100%; position: relative; margin: 0 auto;">
								
								<img src="img/a.png" style="width: 100%; position: absolute;">
								<img src="img/b.png" style="width: 100%; position: absolute;">
								<img src="img/c.png" style="width: 100%; position: absolute;">
								<img src="img/d.png" style="width: 100%; position: absolute;">
								<img src="img/e.png" style="width: 100%; position: absolute;">
								<img src="img/f.png" style="width: 100%; position: absolute;">
								<img src="img/g.png" style="width: 100%; position: absolute;">
								<img src="img/h.png" style="width: 100%; position: absolute;">
								
								<img src="img/space.png" style="width: 100%;">
								
							</div>
							
						</div>
						
						<br>
						<br>
						<br>
						
					</div><!-- / .content --> 
				</div><!-- / .inner --> 
			</div><!-- .barba-container -->
		</div><!-- #barba-wrapper --> 
	
	<!-- Vue.js を読み込む -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script>
		new Vue({
		el: '#example-3',
		data: {
			checkedNames: []
			}
		})

	</script>
	
<?php include($path."footer.php"); ?>
</body>
</html>




