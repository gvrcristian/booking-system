<?php
$s = "search";
include("templates/boca/header.php");
?>
<?php
				if(isset($_GET['search']))
				{
					echo '<div class="left">';
					if(isset($_POST['submit']))
					{
						$hotel_name = $_POST['hotel_name'];
						$hotel_location = $_POST['hotel_location'];
						$hotel_prices = $_POST['hotel_price'];
						$hotel_date = $_REQUEST['search_date'];
						
						$hotel_date2 = $_REQUEST['search_date2'];
						if(empty($hotel_name) && empty($hotel_location) && empty($hotel_prices) && empty($hotel_date) && empty($hotel_date2))
						{
							echo '<div class="text">(<font color="#ff0000">*</font>) '.ADV_SEARCH_ERR.'</div>';
						?>
						<form action="" method="POST">
				<table>
					<tr>
						<td><div class="text"><?=HOTEL_NAME;?></div></td>
						<td><input type="text" name="hotel_name" id="hotel_name" value="" placeholder="<?=HOTEL_NAME;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=HOTEL_LOCATION;?></div></td>
						<td><input type="text" name="hotel_location" id="hotel_location" value="" placeholder="<?=HOTEL_LOCATION;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=HOTEL_PRICE;?></div></td>
						<td><input type="text" name="hotel_price" id="hotel price" value="" placeholder="<?=ONLY_EURO;?>"/></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=FROM_DATE;?></div></td>
						<td><input type="text" name="search_date" id="search_date" placeholder="<?=FROM_DATE;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=TO_DATE;?></div></td>
						<td><input type="text" name="search_date2" id="search_date2" value="" placeholder="<?=TO_DATE;?>" /></td>
					</tr>
					
					<tr>
						<td></td>
						<td><div class="search"><input type="submit" name="submit" id="submit" value="<?=HOTEL_SEARCH;?>" /></div></td>
					</tr>
				</table>
				</form>
						<?php
						} else {
							
							$result2 = "SELECT * FROM `users` WHERE ";
							
							if(!empty($hotel_name)) $result2 .= "`name` LIKE '%$hotel_name%'";
							
							if(!empty($hotel_name) && !empty($hotel_location)) $result2 .= " AND ";
							
							if(empty($hotel_location)) $result2 .= ""; else $result2 .= "`country` LIKE '%$hotel_location%'";
							
							if((!empty($hotel_name) || !empty($hotel_location)) && !empty($hotel_prices)) $result2 .= " AND ";
							
							if(empty($hotel_prices)) $result .=""; else $result2 .= "`price` LIKE '%$hotel_prices%'";
							
							if((!empty($hotel_name) || !empty($hotel_location) || !empty($hotel_prices)) && !empty($hotel_date)) $result2 .= " AND ";
							
							if(empty($hotel_date)) $result2 .= ""; else $result2 .= "`from` >= '$hotel_date'";
							
							if((!empty($hotel_name) || !empty($hotel_location) || !empty($hotel_prices) || !empty($hotel_date)) && !empty($hotel_date2)) $result2 .= " AND ";
							
							if(empty($hotel_date2)) $result2 .= ""; else $result2 .= "`to` <= '$hotel_date2'";							
							
							$result = mysql_query($result2) or die(mysql_error());
							while($ads = mysql_fetch_array($result))
							{
								echo $ads['name']."<br />";
								
							}
						}
						
					} else {
				?>
				
				<form action="" method="POST">
				<table>
					<tr>
						<td><div class="text"><?=HOTEL_NAME;?></div></td>
						<td><input type="text" name="hotel_name" id="hotel_name" value="" placeholder="<?=HOTEL_NAME;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=HOTEL_LOCATION;?></div></td>
						<td><input type="text" name="hotel_location" id="hotel_location" value="" placeholder="<?=HOTEL_LOCATION;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=HOTEL_PRICE;?></div></td>
						<td><input type="text" name="hotel_price" id="hotel price" value="" placeholder="<?=ONLY_EURO;?>"/></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=FROM_DATE;?></div></td>
						<td><input type="text" name="search_date" id="search_date" value="" placeholder="<?=FROM_DATE;?>" /></td>
					</tr>
					
					<tr>
						<td><div class="text"><?=TO_DATE;?></div></td>
						<td><input type="text" name="search_date2" id="search_date2" value="" placeholder="<?=TO_DATE;?>" /></td>
					</tr>
					
					<tr>
						<td></td>
						<td><div class="search"><input type="submit" name="submit" id="submit" value="<?=HOTEL_SEARCH;?>" /></div></td>
					</tr>
				</table>
				</form>
				
				<?php
					}
					echo '</div>';
				} else {
				?>
				
				<div class="srch-content"></div>
				
				<?php
				}
				?>
<?php
include("templates/boca/footer.php");
?>