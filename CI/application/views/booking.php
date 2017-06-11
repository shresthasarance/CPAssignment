 
	<table>
 <tr>
                        <td width="250"> 
                            <label for="roomtype" id="service_id">Room type </label>                        
                        </td> 
                        <td>
                            <Select  name="roomtype">
								<option value="">Select</option>
								<?php if(count($getRoom)):?>
								
									<?php foreach($getRoom as $room):?>
										<option value=<?php echo $room->room_id?> > <?= $room->description?> </option>

										
									<?php endforeach;?>
									
								<?php else :?>
								
								<?php endif;?>
                               
                            </Select>
                        </td>
                    </tr>
		</table>
	</form>