<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<div id="mymodal" style="display:none;">
<h1>hello</h1>
<input type="submit">
</div>

<a rel="facebox" href="#mymodal"><Button type="submit" class="btn btn-info"  />
<i class="icon-plus-sign icon-large"></i> Add User</button></a><br><br>