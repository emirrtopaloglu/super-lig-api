<?php
    require 'class.php';
    $html = file_get_html('https://www.tff.org/Default.aspx?pageID=198');
    $data = array();
    $array = array();
    foreach ( $html->find('#ctl00_MPane_m_198_10561_ctnr_m_198_10561_Panel1 > table > tr') as $element ) {
        foreach ( $element->find('td') as $item ) {
            $data[] = trim($item->plaintext);
        }
    }
    for ( $i = 1; $i < count($data); $i++ ) {
        if ( $i % 9 == 0 ) {
            $team = explode('.', $data[$i], 2)[1];
            $array_push = array(
                'team' => $team,
                'games' => $data[$i+1],
                'wins' => $data[$i+2],
                'draws' => $data[$i+3],
                'losses' => $data[$i+4],
                'goals_for' => $data[$i+5],
                'goals_against' => $data[$i+6],
                'goal_difference' => $data[$i+7],
                'points_per_game' => $data[$i+8]
            );
            $array[] = $array_push;
        }
    }
    $json = json_encode($array);
    fopen('standings.json', 'w+');
    file_put_contents('standings.json', $json);
?>