<?php
$events_html.='
<div id="event-'.$event_id.'" class="ect-classic-list-events '.$event_type.'" '.$post_parent.'>
	<div class="ect-clslist-event-date">'.$event_schedule.' </div>              
	<div class="ect-clslist-event-info"> 
		<div class="ect-clslist-inner-container">
			<div class="ect-clslist-title">'.$event_title.'</div>
			<div class="ect-clslist-time"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="cls-list-time">'.$ev_time.'</span></div>
			<div class="ect-clslist-venue">'.$venue_details_html.'</div>
		</div>';

	if ( tribe_get_cost($event_id, true ) ) {
	$events_html.='
	<div class="ect-clslist-event-price">
		<div class="ect-rate-area">
			<span class="ect-rate-icon"><i class="fa fa-money" aria-hidden="true"></i></span>
			<span class="ect-rate">'.tribe_get_cost($event_id, true ).'</span>
		</div>
	</div>';
	}

	$events_html.='</div>';
	
	$events_html.='
	<div class="ect-clslist-event-details">';

	$events_html.='<a href="'.esc_url( tribe_get_event_link($event_id)).'" class="tribe-events-read-more" rel="bookmark">'.esc_html__( 'Find out more ', 'the-events-calendar' ).'
		<i class="fa fa-angle-double-right" aria-hidden="true"></i>
		</a>
	</div>
</div>';

