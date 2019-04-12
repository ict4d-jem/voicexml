<?php

$region = file_get_contents("./region_mali.json");

$json_decode = json_decode($region, true);

$choice_event = '';
foreach(array_keys($json_decode['region']) as $i => $regions)
    $choice_event .= '<choice event="region" dtmf="'.($i+1).'" message="'.$regions.'">'.$regions.'</choice>';


?>

<var name="region" expr="''"/>
<var name="crop" expr="''"/>
<!--
<form id="identity" action="">
    <block>
        <prompt>Welcome to the Seed System service.</prompt>
        <prompt timeout="10s">Please identify yourself after the beep.</prompt>
    </block>

    <var name="filename" expr="session.callerid"/>
    <record name="identity" beep="true" maxtime="10s" finalsilence="5000ms" type="audio/x-wav" dtmfterm="true">
        <noinput count="1">Sorry I did not hear anything.<reprompt/></noinput>
        <noinput count="2">I still did not hear anything.<reprompt/></noinput>
    </record>

    <filled>
        <goto next="#menu"/>
    </filled>
</form>-->


<property name="inputmodes" value="dtmf"/>

<menu id="menu" scope="dialog">
    <prompt>
        <break time="1000"/>
        Thank you! We will now ask you a few questions so we can build a profile on you. We will not request this information again.
        <break time="50"/>
        Please select your region from the following options
    </prompt>

    <prompt>
        <enumerate>
            <break time="1000"/>
            For <value expr="_prompt"/>, Press <value expr="_dtmf"/>
        </enumerate>
    </prompt>

    <?php
    echo $choice_event;
    ?>
</menu>
<catch event="region">
    <prompt>
            You have chosen for
        <value expr="_message"/>
    </prompt>
    <assign name="region" expr="_message"/>
    <goto next="#menu2"/>
</catch>

<menu id="menu2" scope="dialog">
    <prompt>
        <break time="1000"/>
        What is the size of your crop?<break time="20"/>
        Please use your voice to enter the amount of acres of your land
        <break time="50"/>
    </prompt>

    <prompt>
        <enumerate>
            <break time="1000"/>
            For <value expr="_prompt"/>, Press <value expr="_dtmf"/>
        </enumerate>
    </prompt>
    <choice event="crop" dtmf="1" message="1 to 20 acres">1 to 20 acres</choice>
    <choice event="crop" dtmf="2" message="21 to 40 acres">21 to 40 acres</choice>
    <choice event="crop" dtmf="3" message="41 to 60 acres">41 to 60 acres</choice>

</menu>
<catch event="crop">
    <prompt>
        You have chosen for
        <value expr="_message"/>
    </prompt>
    <assign name="crop" expr="_message"/>
    <goto next="#saveform"/>
</catch>

<form id="saveform" action="">
    <block>
<!--        <data name="phpsave" src="identity/save_record.php" namelist="identity filename crop region" method="multipart/form-data"/> <!-- call php file and submit data-->-->
        <data name="phpsave" src="identity/save_record.php" namelist="crop region" method="multipart/form-data"/> <!-- call php file and submit data-->
    </block>
</form>
