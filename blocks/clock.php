<?php

function b_clock_show($options)
{
    $block['content'] = ' <div align=center><applet code="BillsClock2" width="110" height="110" ALIGN="middle">
      <param name="ARCHIVE" value="' . XOOPS_URL . '/modules/analogclock/blocks/billsclock2.jar">
      <param name="BGCOLOR" value="#ffffff">
      <param name="BGIMAGE" value="' . XOOPS_URL . '/modules/analogclock/blocks/clock110.gif">
      <param name="CENTERX" value="55">
      <param name="CENTERY" value="55">
      <param name="FGCOLOR" value="#000000">
      <param name="FONTSIZE" value="10">
      <param name="HOURCOLOR" value="#000000">
      <param name="HOURLENGTH" value="30">
      <param name="HOURTHICK" value="3">
      <param name="MINUTECOLOR" value="#ABA198">
      <param name="MINUTELENGTH" value="40">
      <param name="MINUTETHICK" value="3">
      <param name="SHOW_DATE" value="0">
      <param name="SHOW_AMPM" value="1">
      <param name="SHOWSWEEP" value="1">
      <param name="SNTP_PORT" value="1200">
      <param name="SNTP_SAMPLES" value="3">
      <param name="SWEEPCOLOR" value="#8D7F73">
      <param name="SWEEPLENGTH" value="40">
      <param name="HOUR_CHIMES" value="' . XOOPS_URL . '/modules/analogclock/blocks/bells.au">
      <param name="HALFHOUR_CHIMES" value="' . XOOPS_URL . '/modules/analogclock/blocks/bells.au">
      <param name="TIMEZONE" value="EST">
      <param name="USE_SNTP" value="0">
      <param name="SYNC_MESSAGE" value="' . _MY_CLOCK_WAIT . '">
      <param name="VERBOSE" value="0">
      </applet></div>';

    return $block;
}
