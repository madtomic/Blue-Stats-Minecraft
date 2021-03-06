<?php
$mysqli = $this->mysqli->get("BlueStats");
?>
<section>
	<table class="table table-striped table-bordered" id="generalstats">
		<thead>
			<tr>
				<th>Stat</th>
				<th>Value</th>
				<th>Server Average</th>
				<!--<th>Server Total</th>-->
			</tr>
		</thead>
		<tbody>
			<?php foreach ($this->config["stats"]["id"] as $stat) :?>
			<?php
				$player_stat = $player->getStat($stat);

				if ($stat!="lastjoin"&&$stat!="lastleave"){
					$server_total =  getStatTotal($stat,$mysqli,$this->config["mysql"]["stats"]["table_prefix"]);
				}else{
					$server_total="";
				}

				if ($stat!="lastjoin"&&$stat!="lastleave"){
					$server_average = round($server_total / getPlayerCount($mysqli,$this->config["mysql"]["stats"]["table_prefix"])[0]["count(*)"]);
				}else{
					$server_average="";
				}

				if ($stat == "playtime"){
					$player_stat=secondsToTime($player_stat);
					$server_total=secondsToTime($server_total);
					$server_average=secondsToTime($server_average);
				}
				$statTitle="";
				if (isset($this->config["stats"]["names"][$stat])){
					$statTitle=$this->config["stats"]["names"][$stat];
				}else{
					$statTitle=$stat;
				}
			?>
			<tr>
				<td><?=$statTitle; ?></td>
				<td><?=$player_stat; ?></td>
				<td><?=$server_average ?></td>
				<!--<td><?=$server_total ?></td>-->
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<script>
	$(document).ready(function() {
		$('#generalstats').dataTable({
			responsive: true
		});
	} );
</script>
</section>
