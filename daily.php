<div class="table-responsive">
<table class="table table-bordered table-striped text-center">
<tr>
<th class="text-capitalize">Last updated time</th>
<th class="text-capitalize">state</th>
<th class="text-capitalize">confirmed</th>
<th class="text-capitalize">active</th>
<th class="text-capitalize">recovered</th>
<th class="text-capitalize">death</th>
</tr>
</div>
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

echo $coranalive['cases_time_series']['statewise']['active'];

?>





