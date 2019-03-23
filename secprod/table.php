<?php

                    

    $sql = "SELECT * FROM MyTable";
    
    if ($_GET['sort'] == 'type')
    {
        $sql .= " ORDER BY type";
    }
    elseif ($_GET['sort'] == 'desc')
    {
        $sql .= " ORDER BY Description";
    }
    elseif ($_GET['sort'] == 'recorded')
    {
        $sql .= " ORDER BY DateRecorded";
    }
    elseif($_GET['sort'] == 'added')
    {
        $sql .= " ORDER BY DateAdded";
    }
                    
                    

function table( $result ) {
    $result->fetch_array( MYSQLI_ASSOC );
    echo '<table id="myTable">';
    tableHead( $result );
    tableBody( $result );
    echo '</table>';
}

function tableHead( $result ) {
    echo '<thead>';
    foreach ( $result as $x ) {
    echo '<tr>';
    foreach ( $x as $k => $y ) {
        echo '<th>' . ucfirst( $k ) . '</th>';
    }
    echo '</tr>';
    break;
    }
    echo '</thead>';
}

function tableBody( $result ) {
    echo '<tbody>';
    foreach ( $result as $x ) {
    echo '<tr>';
    foreach ( $x as $y ) {
        echo '<td>' . $y . '</td>';
    }
    echo '</tr>';
    }
    echo '</tbody>';
}
