<chart>

	<axis_category shadow='low' size='10' color='FFFFFF' alpha='75' orientation='diagonal_up' />
	<axis_ticks value_ticks='false' category_ticks='false' />
	<axis_value alpha='0' />

	<chart_border top_thickness='0' bottom_thickness='0' left_thickness='0' right_thickness='0' />
	<chart_data>
		<row>
			<null/>
			<string>S</string>
			<string>M</string>
			<string>T</string>
			<string>W</string>
			<string>T</string>
			<string>F</string>
			<string>S</string>
		</row>
		<row>
			<string>Region 1</string>
			<number tooltip='70'>70</number>
			<number tooltip='60'>60</number>
			<number tooltip='11'>11</number>
			<number tooltip='15'>15</number>
			<number tooltip='20'>20</number>
			<number tooltip='22'>22</number>
			<number tooltip='21'>21</number>
		</row>
		<row>
			<string>Region 2</string>
			<number tooltip='30'>30</number>
			<number tooltip='32'>32</number>
			<number tooltip='35'>35</number>
			<number tooltip='80'>80</number>
			<number tooltip='84'>84</number>
			<number tooltip='70'>70</number>
			<number tooltip='36'>36</number>
		</row>
	</chart_data>
	<chart_grid_h thickness='0' />
	<chart_grid_v thickness='0' />
	<chart_pref rotation_x='20' rotation_y='40' drag='false' />
	<chart_rect x='-70' y='-35' width='580' height='250' positive_alpha='0' />
	<chart_transition type='slide_left' delay='0' duration='1' order='series' />
	<chart_type>3d column</chart_type>

	<draw>
		<rect shadow='bg' layer='background' x='0' y='0' width='480' height='300' fill_color='888888' fill_alpha='100' line_alpha='0' line_thickness='0' />
	</draw>
	<filter>
		<bevel id='small' angle='45' blurX='5' blurY='5' distance='2' highlightAlpha='10' highlightColor='ffffff' shadowAlpha='25' type='outer' />
		<shadow id='bg' inner='true' quality='2' distance='50' angle='135' color='000000' alpha='20' blurX='300' blurY='200' />
		<shadow id='low' distance='2' angle='45' alpha='50' blurX='2' blurY='2' />
	</filter>
	
	<legend bevel='small' transition='dissolve' delay='0' duration='1' x='25' y='250' width='430' height='50' margin='20' fill_color='000000' fill_alpha='10' line_color='000000' line_alpha='0' line_thickness='0' layout='horizontal' size='12' color='aaccff' alpha='100' />
	<context_menu full_screen='false' />
	<tooltip color='ff6600' alpha='80' size='12' background_color_1='000000' background_alpha='75' shadow='low' />
	<update url='xml/Gallery_3D_Column_Update.php?count=1' delay='3' mode='data' /> 
	
	<series_color>
		<color>ff8800</color>
		<color>88ff00</color>
	</series_color>
	<series bar_gap='0' set_gap='20' />

</chart>