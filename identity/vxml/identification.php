<?php

$region = file_get_contents("./region_mali.json");

$json_decode = json_decode($region, true);

$choice_event = '';
foreach(array_keys($json_decode['region']) as $i => $regions)
    $choice_event .= '<choice event="region" dtmf="'.($i+1).'" message="'.$regions.'">'.$regions.'</choice>';


?>

<var name="region" expr="''"/>
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
    <goto next="#crop"/>
</catch>

<form id="crop" action="">
    <field name="crop_size" >
        <grammar type="application/srgs+xml" src="grammars/digits.grxml"/>
        <prompt count="1">
            What is the size of your crop?<break time="20"/>
            Please use your voice to enter the amount of acres of your land <break time="700"/>
        </prompt>
        <prompt count="2">Amount of acres?</prompt>
    </field>

    <filled>
        <prompt>Thank you very much for your details <break time="40"/> <audio expr="identity"/><break time="100"/>
            We will now store your data for future calls
        </prompt>
        <submit next="identity/save_record.php" namelist="identity filename crop_size region" method="post" enctype="multipart/form-data" fetchtimeout="10s"/>
    </filled>

</form>
