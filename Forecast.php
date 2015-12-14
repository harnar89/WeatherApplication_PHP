    <!DOCTYPE html>
    <html>
    <head>
    <title>
    Forecast Information
    </title>

    <script type="text/javascript">

    function SubmitForm()
    {
    var state=document.getElementById("State");
    var flag=true;
    var error="";

    //Checking if all the mandatory fields have values.    

    if(document.getElementById("StreetAddress").value=='' || document.getElementById("StreetAddress").value==null)
    {
      error = error.concat("Please enter the Street Address.");
      flag=false;
    }

    if(document.getElementById("City").value=='' || document.getElementById("City").value==null)
    {
      error = error.concat("\nPlease enter the City.");
      flag=false;
    }

    if(state[state.selectedIndex].value=="None")
    {
      error = error.concat("\nPlease select the State.");
      flag=false;
    }

    //Alert all the error messages at once.
    if(flag==false)
    {
      alert(error);
    }

    return flag;
    }

    function ClearForm(f)
    {
    //Clear all the values.
    f.StreetAddress.value='';
    f.City.value='';
    f.State.selectedIndex=0;
    f.Degree[0].checked=true;

    //Remove the post result.
    var table=document.getElementById("final");
    table.parentNode.removeChild(table);

    var div=document.getElementById("forecast");
    div.parentNode.removeChild(div);

    return false;
    }

    </script>

    <style type="text/css">

    a
    {
    color: #6E6E6E;
    }

    h3
    {
    dispay:inline;
    margin:0;
    padding:0;
    }

    h2
    {
    dispay:inline;
    margin:0;
    padding:0;
    }

    body 
    {
    text-align:center;
    }

    div.formclass table tr td
    {
    border:0px;
    text-align:left;
    }

    div.forecast table tr td
    {
    text-align:left;
    }

    table.first
    {
    border:2px solid;
    padding:10px 120px 10px 10px;
    }

    .formclass
    {
    align:center;
    }

    div.forecast
    {
    width:500px;
    border:2px solid;
    align:center;
    }

    div.forecast table
    {
    padding:10px 30px 20px 50px;
    width:400px;
    }

    </style>

    <meta charset="utf-8" />

    </head>
    <body>
    <h2>Forecast Search</h2><br /> 

    <div class="formclass" align="center">
    <form id="forecastForm" action="<?php $_PHP_SELF ?>" method="post">
    <table class="first">

    <tr>
    <td>Street Address:*</td>
    <td><input type="text" id="StreetAddress" name="StreetAddress"  value="<?php echo isset($_POST['StreetAddress']) ? $_POST['StreetAddress'] : '' ?>" size=25px/></td>
    </tr>

    <tr>
    <td>City:*</td>
    <td><input type="text" id="City" name="City" value="<?php echo isset($_POST['City']) ? $_POST['City'] : '' ?>" size=25px/></td>
    </tr>

    <tr>    
    <td>State:*</td>
    <td><select name="State" id="State" />
    <option value="None" <?php if($_POST['State']=="None"){echo "selected='selected'"; } ?> >Select your state...</option>
    <option value="AL" <?php if($_POST['State']=="AL"){echo "selected='selected'"; } ?> >Alabama</option>
    <option value="AK" <?php if($_POST['State']=="AK"){echo "selected='selected'"; } ?> >Alaska</option>
    <option value="AZ" <?php if($_POST['State']=="AZ"){echo "selected='selected'"; } ?> >Arizona</option>
    <option value="AR" <?php if($_POST['State']=="AR"){echo "selected='selected'"; } ?> >Arkansas</option>
    <option value="CA" <?php if($_POST['State']=="CA"){echo "selected='selected'"; } ?> >California</option>
    <option value="CO" <?php if($_POST['State']=="CO"){echo "selected='selected'"; } ?> >Colorado</option>
    <option value="CT" <?php if($_POST['State']=="CT"){echo "selected='selected'"; } ?> >Connecticut</option>
    <option value="DE" <?php if($_POST['State']=="DE"){echo "selected='selected'"; } ?> >Delaware</option>
    <option value="DC" <?php if($_POST['State']=="DC"){echo "selected='selected'"; } ?> >District Of Columbia</option>
    <option value="FL" <?php if($_POST['State']=="FL"){echo "selected='selected'"; } ?> >Florida</option>
    <option value="GA" <?php if($_POST['State']=="GA"){echo "selected='selected'"; } ?> >Georgia</option>
    <option value="HI" <?php if($_POST['State']=="HI"){echo "selected='selected'"; } ?> >Hawaii</option>
    <option value="ID" <?php if($_POST['State']=="ID"){echo "selected='selected'"; } ?> >Idaho</option>
    <option value="IL" <?php if($_POST['State']=="IL"){echo "selected='selected'"; } ?> >Illinois</option>
    <option value="IN" <?php if($_POST['State']=="IN"){echo "selected='selected'"; } ?> >Indiana</option>
    <option value="IA" <?php if($_POST['State']=="IA"){echo "selected='selected'"; } ?> >Iowa</option>
    <option value="KS" <?php if($_POST['State']=="KS"){echo "selected='selected'"; } ?> >Kansas</option>
    <option value="KY" <?php if($_POST['State']=="KY"){echo "selected='selected'"; } ?> >Kentucky</option>
    <option value="LA" <?php if($_POST['State']=="LA"){echo "selected='selected'"; } ?> >Louisiana</option>
    <option value="ME" <?php if($_POST['State']=="ME"){echo "selected='selected'"; } ?> >Maine</option>
    <option value="MD" <?php if($_POST['State']=="MD"){echo "selected='selected'"; } ?> >Maryland</option>
    <option value="MA" <?php if($_POST['State']=="MA"){echo "selected='selected'"; } ?> >Massachusetts</option>
    <option value="MI" <?php if($_POST['State']=="MI"){echo "selected='selected'"; } ?> >Michigan</option>
    <option value="MN" <?php if($_POST['State']=="MN"){echo "selected='selected'"; } ?> >Minnesota</option>
    <option value="MS" <?php if($_POST['State']=="MS"){echo "selected='selected'"; } ?> >Mississippi</option>
    <option value="MO" <?php if($_POST['State']=="MO"){echo "selected='selected'"; } ?> >Missouri</option>
    <option value="MT" <?php if($_POST['State']=="MT"){echo "selected='selected'"; } ?> >Montana</option>
    <option value="NE" <?php if($_POST['State']=="NE"){echo "selected='selected'"; } ?> >Nebraska</option>
    <option value="NV" <?php if($_POST['State']=="NV"){echo "selected='selected'"; } ?> >Nevada</option>
    <option value="NH" <?php if($_POST['State']=="NH"){echo "selected='selected'"; } ?> >New Hampshire</option>
    <option value="NJ" <?php if($_POST['State']=="NJ"){echo "selected='selected'"; } ?> >New Jersey</option>
    <option value="NM" <?php if($_POST['State']=="NM"){echo "selected='selected'"; } ?> >New Mexico</option>
    <option value="NY" <?php if($_POST['State']=="NY"){echo "selected='selected'"; } ?> >New York</option>
    <option value="NC" <?php if($_POST['State']=="NC"){echo "selected='selected'"; } ?> >North Carolina</option>
    <option value="ND" <?php if($_POST['State']=="ND"){echo "selected='selected'"; } ?> >North Dakota</option>
    <option value="OH" <?php if($_POST['State']=="OH"){echo "selected='selected'"; } ?> >Ohio</option>
    <option value="OK" <?php if($_POST['State']=="OK"){echo "selected='selected'"; } ?> >Oklahoma</option>
    <option value="OR" <?php if($_POST['State']=="OR"){echo "selected='selected'"; } ?> >Oregon</option>
    <option value="PA" <?php if($_POST['State']=="PA"){echo "selected='selected'"; } ?> >Pennsylvania</option>
    <option value="RI" <?php if($_POST['State']=="RI"){echo "selected='selected'"; } ?> >Rhode Island</option>
    <option value="SC" <?php if($_POST['State']=="SC"){echo "selected='selected'"; } ?> >South Carolina</option>
    <option value="SD" <?php if($_POST['State']=="SD"){echo "selected='selected'"; } ?> >South Dakota</option>
    <option value="TN" <?php if($_POST['State']=="TN"){echo "selected='selected'"; } ?> >Tennessee</option>
    <option value="TX" <?php if($_POST['State']=="TX"){echo "selected='selected'"; } ?> >Texas</option>
    <option value="UT" <?php if($_POST['State']=="UT"){echo "selected='selected'"; } ?> >Utah</option>
    <option value="VT" <?php if($_POST['State']=="VT"){echo "selected='selected'"; } ?> >Vermont</option>
    <option value="VA" <?php if($_POST['State']=="VA"){echo "selected='selected'"; } ?> >Virginia</option>
    <option value="WA" <?php if($_POST['State']=="WA"){echo "selected='selected'"; } ?> >Washington</option>
    <option value="WV" <?php if($_POST['State']=="WV"){echo "selected='selected'"; } ?> >West Virginia</option>
    <option value="WI" <?php if($_POST['State']=="WI"){echo "selected='selected'"; } ?> >Wisconsin</option>
    <option value="WY" <?php if($_POST['State']=="WY"){echo "selected='selected'"; } ?> >Wyoming</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>Degree:*</td>
    <td><input type="radio" name="Degree" value="Fahrenheit" checked>Fahrenheit</input>
    <input type="radio" name="Degree" value="Celsius" <?php if($_POST['Degree']=="Celsius"){echo "checked"; } ?> >Celsius</input></td>
    </tr>

    <tr>
    <td></td>
    <td style="text-align:left"><input type="Submit" id="Submit" name="Submit" value="Search" onClick="return SubmitForm();" />
    <input type="submit" id="Clear" value="Clear" onClick="return ClearForm(this.form);" /></td>
    </tr>

    <tr>
    <td colspan=2>*- <i>Mandatory fields.</i></td>
    </tr>

    <tr>
    <td colspan=2 style="text-align:right"><a href="http://forecast.io">Powered by Forecast.io</a></td>
    </tr>

    </table>
    </form>
    </div>


    <br /><br />

    <?php 

    if(isset($_POST["Submit"]) && !isset($_POST["Clear"])):
    {	
    $detailsurl="https://maps.google.com/maps/api/geocode/xml?address=".rawurlencode($_POST["StreetAddress"].','.$_POST["City"].','.$_POST["State"])."&key=AIzaSyAJGc6QqbHzYOI_akAhqQrAXWeLkNP4wAg";
    $data=file_get_contents($detailsurl);  
    $geo = simplexml_load_string($data);

    //Alert if no results received from API.    
    if($geo->status == "ZERO_RESULTS")
    {	
    ?>

      <script type="text/javascript">alert("No Results to show for this address.");</script>

    <?php }

    else

    {

    $latitude=$geo->result->geometry->location->lat;
    $longitude=$geo->result->geometry->location->lng;

    if($_POST["Degree"]=='Fahrenheit')
    {
      $scale='us';
      $Deg='F';
    }
    else
    {
      $scale='si';
      $Deg='C';
    }

    $final='https://api.forecast.io/forecast/c744f344bf5be765d095e14505b78832/'.$latitude.','.$longitude.'?units='.$scale.'&exclude=flags';

    $forecast=file_get_contents($final);
    $d=json_decode($forecast);

    if($d->currently->icon == 'clear-day')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
    else if($d->currently->icon == 'clear-night')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
    else if($d->currently->icon == 'rain')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
    else if($d->currently->icon == 'snow')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
    else if($d->currently->icon == 'sleet')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
    else if($d->currently->icon == 'wind')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
    else if($d->currently->icon == 'fog')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
    else if($d->currently->icon == 'cloudy')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/cloud.png";
    else if($d->currently->icon == 'partly-cloudy-day')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
    else if($d->currently->icon == 'partly-cloudy-night')
    $image="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";

    if($d->currently->precipIntensity >= 0 && $d->currently->precipIntensity < 0.002)
    $precipitation='None';
    else if($d->currently->precipIntensity >= 0.002 && (int)$d->currently->precipIntensity < 0.017)
    $precipitation='Very Light';
    else if($d->currently->precipIntensity >= 0.017 && (int)$d->currently->precipIntensity < 0.1)
    $precipitation='Light';
    else if($d->currently->precipIntensity >= 0.1 && (int)$d->currently->precipIntensity < 0.4)
    $precipitation='Moderate';
    else if($d->currently->precipIntensity >= 0.4)
    $precipitation='Heavy';

    $ChanceOfRain=($d->currently->precipProbablity * 100).'%';

    if($scale == "si")
    {
       $WindSpeed=round($d->currently->windSpeed).' m/s';
    }
    else
    {
       $WindSpeed=round($d->currently->windSpeed).' mph';
    }

    $dewPoint=round($d->currently->dewPoint);

    $humidity=(round($d->currently->humidity * 100))."%";

    if($scale == "si")
    {
        $visibility=round($d->currently->visibility)." km";
    }
    else
    {
        $visibility=round($d->currently->visibility)." mi";
    }

    date_default_timezone_set($d->timezone);

    $sunriseTime=date('h:i a',$d->daily->data[0]->sunriseTime);

    $sunsetTime=date('h:i a',$d->daily->data[0]->sunsetTime);

    ?>

    <div align="center">
    <div id="forecast" class="forecast" align="center">
    <table id="final">
    <tr><td colspan=2 style="text-align:center"><h2><?php echo $d->currently->summary; ?></h2></td></tr>	
    <tr><td colspan=2 style="text-align:center"><h2><?php echo round($d->currently->temperature)."&deg;"." ".$Deg; ?></h2></td></tr>
    <tr><td colspan=2 style="text-align:center"><img src="<?php echo $image; ?>" type="image/png" alt="<?php echo $d->currently->icon; ?>" title="<?php echo $d->currently->summary; ?>"/></td></tr>
    <tr><td>Precipitation:</td><td><?php echo $precipitation; ?></td></tr>
    <tr><td>Chance of Rain:</td><td><?php echo $ChanceOfRain; ?></td></tr>
    <tr><td>Wind Speed:</td><td><?php echo $WindSpeed; ?></td></tr>
    <tr><td>Dew Point:</td><td><?php echo $dewPoint; ?></td></tr>
    <tr><td>Humidity:</td><td><?php echo $humidity; ?></td></tr>
    <tr><td>Visibility:</td><td><?php echo $visibility; ?></td></tr>
    <tr><td>Sunrise:</td><td><?php echo $sunriseTime; ?></td></tr>
    <tr><td>Sunset:</td><td><?php echo $sunsetTime; ?></td></tr>
    </div>
    </div>

    <?php
    }
    }
    ?>
    <?php endif; ?>
    </body>
    </html>
