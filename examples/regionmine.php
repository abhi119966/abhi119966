<?php


include_once "header.html";


?>

<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jQuery Tabs - Vertical and Horizontal Tabs Examples</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="example.css">
    <link href="//www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../dist/jquery.tabs.css">
    <style>
    body { font-family:'Raleway'; background-color: #fafafa; line-height:1.7;}
    </style>

<link href="mystyleregion.css" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
		
		<div class="wrapper">
	
    <h1 style="margin-top:150px;">jQuery Tabs - Vertical and Horizontal Tabs Example</h1>
    <!-- Vertical Tabs -->
    <h4>Vertical Tab</h4>
    <div class="jq-tab-wrapper" id="verticalTab">
        <div class="jq-tab-menu">
            <div class="jq-tab-title active" data-tab="1">title 1</div>
            <div class="jq-tab-title" data-tab="2">title 2</div>
            <div class="jq-tab-title" data-tab="3">title 3</div>
			   <div class="jq-tab-title" data-tab="4">title 4</div>
			      <div class="jq-tab-title" data-tab="5">title 5</div>
				     <div class="jq-tab-title" data-tab="6">title 6</div>
        </div>
        <div class="jq-tab-content-wrapper">
            <div class="jq-tab-content active" data-tab="1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, animi aperiam! Odio harum error enim aliquam
                voluptates, quibusdam fuga maxime doloremque blanditiis et! Laborum neque esse ab voluptates, perferendis
                nam. Sint alias provident reiciendis ut facilis obcaecati, aliquid excepturi architecto quibusdam aperiam
                numquam! Reprehenderit vitae ducimus, magni labore maiores architecto aliquid inventore facere aut eveniet
                officia recusandae voluptatum maxime provident.</div>
            <div class="jq-tab-content" data-tab="2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, magnam mollitia consequuntur modi sit nostrum
                molestiae sunt nihil, quisquam eligendi expedita quae, id natus provident labore odio! Necessitatibus, odit.
                Iure. Delectus magnam eius, facere ratione est dicta, placeat labore possimus, praesentium ex quos similique
                veritatis illum velit minima dolor beatae.</div>
            <div class="jq-tab-content" data-tab="3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cumque aperiam amet officiis atque accusamus repudiandae
                perspiciatis aliquid voluptatum itaque, sint, pariatur architecto mollitia laborum fuga culpa dignissimos
                quo debitis.
            </div>
			<div class="jq-tab-content" data-tab="4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cumque aperiam amet officiis atque accusamus repudiandae
                perspiciatis aliquid voluptatum itaque, sint, pariatur architecto mollitia laborum fuga culpa dignissimos
                quo debitis.
            </div>
			<div class="jq-tab-content" data-tab="5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cumque aperiam amet officiis atque accusamus repudiandae
                perspiciatis aliquid voluptatum itaque, sint, pariatur architecto mollitia laborum fuga culpa dignissimos
                quo debitis.
            </div>
			<div class="jq-tab-content" data-tab="6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cumque aperiam amet officiis atque accusamus repudiandae
                perspiciatis aliquid voluptatum itaque, sint, pariatur architecto mollitia laborum fuga culpa dignissimos
                quo debitis.
            </div>
        </div>
    </div>
    <!-- End of Vertical Tabs -->
    <!-- Horizontal Tabs -->
    <h4>Horizontal Tab</h4>
    <div class="jq-tab-wrapper" id="horizontalTab">
        <div class="jq-tab-menu">
            <div class="jq-tab-title active" data-tab="1">title 1</div>
            <div class="jq-tab-title" data-tab="2">title 2</div>
            <div class="jq-tab-title" data-tab="3">title 3</div>
        </div>
        <div class="jq-tab-content-wrapper">
            <div class="jq-tab-content active" data-tab="1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum, animi aperiam! Odio harum error enim aliquam
                voluptates, quibusdam fuga maxime doloremque blanditiis et! Laborum neque esse ab voluptates, perferendis
                nam. Sint alias provident reiciendis ut facilis obcaecati, aliquid excepturi architecto quibusdam aperiam
                numquam! Reprehenderit vitae ducimus, magni labore maiores architecto aliquid inventore facere aut eveniet
                officia recusandae voluptatum maxime provident.</div>
            <div class="jq-tab-content" data-tab="2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, magnam mollitia consequuntur modi sit nostrum
                molestiae sunt nihil, quisquam eligendi expedita quae, id natus provident labore odio! Necessitatibus, odit.
                Iure. Delectus magnam eius, facere ratione est dicta, placeat labore possimus, praesentium ex quos similique
                veritatis illum velit minima dolor beatae.</div>
            <div class="jq-tab-content" data-tab="3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cumque aperiam amet officiis atque accusamus repudiandae
                perspiciatis aliquid voluptatum itaque, sint, pariatur architecto mollitia laborum fuga culpa dignissimos
                quo debitis.
            </div>
        </div>
    </div>
    <!-- End of Horizontal Tabs -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="../dist/jquery.tabs.min.js"></script>
    <script>
        $(function () {
            $('#verticalTab').jqTabs();
            $('#horizontalTab').jqTabs({direction: 'horizontal', duration: 200});
        });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
			
			
			
			







		</div><!--end of wrapper -->
	



	</div><!--end of container -->
	

</body>
</html>



			
			<?php 
			
			include_once "footer.html";
			?>