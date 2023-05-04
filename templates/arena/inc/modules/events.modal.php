<div id="webengine-event-timers" class="modal_div flex-c-c">
	<div class="modal-div event-modal">
		<div class="modal_close">
			<span></span>
			<span></span>
		</div>
		<!--modal_close-->
		<div class="event-modal-content">
			<h2><span>Event</span> timers</h2>
			<div class="row">
			<?php
				$eventTimersApi = @file_get_contents(__PATH_API__ . 'events.php');
				if($eventTimersApi) {
					$eventTimers = json_decode($eventTimersApi, true);
					if(is_array($eventTimers)) {
						foreach($eventTimers as $eventTimerId => $eventTimerData) {
							echo '<div class="col-xs-6">';
								echo '<div class="eventTimerBox">';
									echo '<span id="'.$eventTimerId.'_name"></span><span class="pull-right" id="'.$eventTimerId.'_next"></span><br />';
									echo '<span class="smalltext">Starts In</span><span class="smalltext pull-right" id="'.$eventTimerId.'"></span>';
								echo '</div>';
							echo '</div>';
						}
					}
				}
			?>
			</div>
		</div>
	</div>
</div>