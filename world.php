<?php
    header("Content-type: text/xml");
    header("Refresh:30");


$city = array("Midway",
        "Honolulu",
        "Tahiti Island",
        "Anchorage",
        "San Francisco",
        "Vancouver",
        "San Jose, CR",
        "Easter Island",
        "Bogota",
        "Chicago",
        "Guayaquil",
        "Mexico City",
        "Panama",
        "New York City",
        "Toronto",
        "Bermuda",
        "Buenos_Aires",
        "Rio de Janeiro",
        "Cape_Verde",
        "Azores Is.",
        "Greenwich",
        "Iceland",
        "Canary Is.",
        "Lisbon",
        "London",
        "Berlin",
        "Madrid",
        "Paris",
        "Rome",
        "Stockholm",
        "Bagdad",
        "Istanbul",
        "Moscow",
        "Dubai",
        "Tehran",
        "New Delhi",
        "Bangkok",
        "Hong Kong",
        "Shanghai",
        "Singapore",
        "Taipei",
        "Seoul",
        "Tokyo",
        "Guam",
        "Sydney",
        "Solomon Is.",
        "Fiji Island",
        "Auckland");

$tz = array("Pacific/Midway",
        "Pacific/Honolulu",
        "Pacific/Tahiti",
        "America/Anchorage",
        "America/Los_Angeles",
        "America/Vancouver",
        "America/Costa_Rica",
        "Pacific/Easter",
        "America/Bogota",
        "America/Chicago",
        "America/Guayaquil",
        "America/Mexico_City",
        "America/Panama",
        "America/New_York",
        "America/Toronto",
        "Atlantic/Bermuda",
        "America/Argentina/Buenos_Aires",
        "America/Sao_Paulo",
        "Atlantic/Cape_Verde",
        "Atlantic/Azores",
        "GMT",
        "Atlantic/Reykjavik",
        "Atlantic/Canary",
        "Europe/Lisbon",
        "Europe/London",
        "Europe/Berlin",
        "Europe/Madrid",
        "Europe/Paris",
        "Europe/Rome",
        "Europe/Stockholm",
        "Asia/Baghdad",
        "Europe/Istanbul",
        "Europe/Moscow",
        "Asia/Dubai",
        "Asia/Tehran",
        "Asia/Kolkata",
        "Asia/Bangkok",
        "Asia/Hong_Kong",
        "Asia/Shanghai",
        "Asia/Singapore",
        "Asia/Taipei",
        "Asia/Seoul",
        "Asia/Tokyo",
        "Pacific/Guam",
        "Australia/Sydney",
        "Pacific/Kosrae",
        "Pacific/Fiji",
        "Pacific/Auckland");

    $count = 48;
?>
<CiscoIPPhoneText>
    <Title>World Time</Title>
	<Text>
<?php
    for ($i = 0; $i < $count; $i++) {
        date_default_timezone_set("$tz[$i]");
        list($hr,$min) = split(':', date("P", time()));

        $hr = strval($hr) + strval($min) / 60;
        if ($hr > -1) 
            $hr = "+" . $hr;

        echo date('D, H:i  ') . $city[$i] . " (GMT $hr)";

    if ($i < $count - 1)
        echo "\r"; }
?>
    </Text>

    <SoftKeyItem>
        <Name>Exit</Name>
        <URL>Key:Services</URL>
        <Position>3</Position>
    </SoftKeyItem>

    <Prompt>Screen updates every 30 seconds.</Prompt>
</CiscoIPPhoneText>

