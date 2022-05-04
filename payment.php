
	<!DOCTYPE HTML>
<html>
	<head>
		<link href="css/payment.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	</head>
	<body>
			<div class="header">
				<div class="wrap">
					<div class="header-top">
						<div class="logo">
							<a href="home.php"><img src="./images/logo1.png" title="logo" /></a>
						</div>
						<div class="contact-info">
							<p class="phone">Call us : <a href="#">+97143434666</a></p>
							<p class="code">Enjoy Your Holidays</a></p>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				</div></div></br></br></br>
				<div class="pay" style="border:2px solid black; margin-left: 376px;margin-right:308px ">
					<form method="post" action="payment1.php">
                     <center><table  class="tbl" cellpadding=20px>
							<tr>
								<img src="images/1234.png" title="image-name" />
								<td>Card Type :</td>
								<td colspan="2"><input name= "n1" value="Visa" type="radio" >VISA</td>
								<td colspan="2"><input name="n1" value="MasterCard" type="radio">MasterCard</td>
							</tr>
							<tr>
								<td>Card Number :</td>
								<td colspan="4"><input type="Number" name="crn" id="crno1" required style="width: 350px;height:25px"></td>
							</tr>
							<tr>
								<td>Card Holder Name :</td>
								<td colspan="4"><input type="text" name="chn" id="holn1" required style="width: 350px;height:25px"></td>
							</tr>
							<tr>
								<td>Expiry Date :</td>
								<td>MM :</td>
								<td>
									<select name="MM" style="width: 55px;height:25px">
										<option>Jan</option>
										<option>Feb</option>
										<option>Mar</option>
										<option>Apr</option>
										<option>May</option>
										<option>Jun</option>
										<option>Jul</option>
										<option>Aug</option>
										<option>Sep</option>
										<option>Oct</option>
										<option>Nov</option>
										<option>Dec</option>
									</select>
								</td>
								<td>YYYY :</td>
								<td>
									<select name="YYYY" style="width: 55px;height:25px">
										<option>19</option>
										<option>20</option>
										<option>21</option>
										<option>22</option>
										<option>23</option>
										<option>24</option>
										<option>25</option>
										<option>26</option>
										<option>27</option>
										<option>28</option>
										<option>29</option>
										<option>30</option>
										<option>31</option>
										<option>32</option>
										<option>33</option>
										<option>34</option>
										<option>35</option>
										<option>36</option>
										<option>37</option>
										<option>38</option>
										<option>39</option>
										<option>40</option>
								</td>
							</tr>
							<tr>
								<td>CVV :</td>
								<td colspan="4"><input type="password" name="cvv" id="cvv1"  required style="width: 115px;height:25px"></td>
							</tr>
							<tr>
                                </tr>

						</table>
						</form> 
					<input type="submit" name="Book" onclick="chkcrd()" value="Book" id="button"></a>
				</center>
			
			</div>
		</table>

		<div class="copy-tight">
			<footer>Copyright &copy; By Telbin Cherian 2019.All Rights Reserved.</footer>
		</div>
					</body>
					</html>
					<script type="text/javascript">
			function chkcrd()
{
if(document.getElementById('crno1').value.length==0 || document.getElementById('holn1').value.length==0 || document.getElementById('cvv1').value.length==0)
{
alert("Fill The Card Details");
return false;
}
else
{
var num=/^([0-9_\-]{3})+$/;
var num1=/^([0-9_\-]{16})+$/;
   if(document.getElementById("crno1").value.match(num1))
{}
else
{
alert("Entered Invaild Card Number");
document.getElementById("crno1").focus();
return false;
}

if(document.getElementById("cvv1").value.match(num))
{}
else
{
alert("Entered Invalid CVV");
document.getElementById("cvv1").focus();
return false;
}
}
}
</script>




