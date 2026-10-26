<?php
  $regions = [ 
    "EU" => "European Union", "EFTA" => "European Free Trade Association", "CARICOM" => "Caribbean Community", "PA" => "Pacific Alliance", "AU" => "African Union",  "USAN" => "Union of South American Nations", "EEU" => "Eurasian Economic Union", "AL" => "Arab League", "ASEAN " => "Association of Southeast Asian Nations", "CAIS" => "Central American Integration System", "CEFTA" => "Central European Free Trade Agreement", "NAFTA" => "North American Free Trade Agreement", "SAARC" => "South Asian Association for Regional Cooperation"
  ];
  $countries = [
    "EU" => ["Åland Islands", "Austria", "Belgium", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Faroe Islands", "Finland", "France", "French Guiana", "Germany", "Gibraltar", "Greece", "Hungary", "Ireland", "Isle of Man", "Italy", "Latvia", "Lithuania", "Luxembourg", "Malta", "Netherlands", "Poland", "Portugal", "Romania", "Slovakia", "Slovenia", "Spain", "Sweden", "United Kingdom of Great Britain and Northern Ireland"],
    "EFTA" => ["Iceland", "Liechtenstein", "Norway", "Switzerland"],
    "CARICOM" => ["Antigua and Barbuda", "Bahamas", "Barbados", "Belize", "Dominican Republic", "Grenada", "Guyana", "Haiti", "Jamaica", "Montserrat", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Suriname", "Trinidad and Tobago"],
    "PA" => ["Chile", "Colombia", "Mexico", "Peru"],
    "AU" => ["Algeria", "Angola", "Benin", "Botswana", "British Indian Ocean Territory", "Burkina Faso", "Burundi", "Cameroon", "Cabo Verde", "Central African Republic", "Chad", "Comoros", "Congo", "Congo (Democratic Republic of the)", "Djibouti", "Egypt", "Equatorial Guinea", "Eritrea", "Ethiopia", "French Southern Territories", "Gabon", "Gambia", "Ghana", "Guinea", "Guinea-Bissau", "Côte d'Ivoire", "Kenya", "Lesotho", "Liberia", "Libya", "Madagascar", "Malawi", "Mali", "Mauritania", "Mauritius", "Mayotte", "Morocco", "Mozambique", "Namibia", "Niger", "Nigeria", "Réunion", "Rwanda", "Saint Helena, Ascension and Tristan da Cunha", "Sao Tome and Principe", "Senegal", "Seychelles", "Sierra Leone", "Somalia", "South Africa", "South Sudan", "Sudan", "Swaziland", "Tanzania, United Republic of", "Togo", "Tunisia", "Uganda", "Western Sahara", "Zambia", "Zimbabwe"], 
    "USAN" => ["Argentina", "Bolivia (Plurinational State of)", "Brazil", "Chile", "Colombia", "Ecuador", "Falkland Islands (Malvinas)", "French Guiana", "Guyana", "Paraguay", "Peru", "South Georgia and the South Sandwich Islands", "Suriname", "Uruguay", "Venezuela (Bolivarian Republic of)"], 
    "EEU" => ["Armenia", "Belarus", "Kazakhstan", "Kyrgyzstan", "Russian Federation"],
    "AL" => ["Algeria", "Bahrain", "Comoros", "Djibouti", "Egypt", "Iraq", "Jordan", "Kuwait", "Lebanon", "Libya", "Mauritania", "Morocco", "Oman", "Palestine, State of", "Qatar", "Saudi Arabia", "Somalia", "Sudan", "Syrian Arab Republic", "Tunisia", "United Arab Emirates", "Yemen"],
    "ASEAN " => ["Brunei Darussalam", "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia", "Myanmar", "Philippines", "Singapore", "Thailand", "Viet Nam"],
    "CAIS" => ["Belize", "Costa Rica", "Dominican Republic", "El Salvador", "Guatemala", "Honduras", "Nicaragua", "Panama"],
    "CEFTA" => ["Albania", "Bosnia and Herzegovina", "Macedonia (the former Yugoslav Republic of)", "Moldova (Republic of)", "Montenegro", "Republic of Kosovo", "Serbia"], 
    "NAFTA" => ["Canada", "Mexico", "United States of America"],
    "SAARC" => ["Afghanistan", "Bangladesh", "Bhutan", "India", "Maldives", "Nepal", "Pakistan", "Sri Lanka"],     
  ];

  $regionSelected = isset($_REQUEST['regionSelected']) ? $_REQUEST['regionSelected'] : 0;

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" media="screen" href="styles.css" />
</head>
<body>
  <div id="container">
    <h1>
        Nom regió escollida
    </h1>
        <table id="taula">
            <tr>
                <th>Countries: <?=count($countries[$regionSelected]); ?> </th>
            </tr>
               
            
              <?php foreach ($countries[$regionSelected] as $country) {?>
                <tr>
                   <td><?= $country; ?></td>
                </tr>
                   <?php } ?>
            

        </table>

  </div>
</body>
</html>