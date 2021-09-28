<?php
require_once('./includes/sql.php');
$cursus = $_GET['cursus'];
$groupe = $_GET['groupe'];
$horaires = join_horaires_table();

foreach($horaires as $horaire) {
    if ($cursus == 'SI B1') {
        if (str_contains($horaire['SECTION_ANNEE'], 'SI SF B1') || str_contains($horaire['SECTION_ANNEE'], 'SI B1')) {
            if (str_contains($horaire['GR'], $groupe)) {
                if($horaire["COURS_8H_10H"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_8H_10H"].' Local : '.$horaire['LOCAL_8H_10H'],
                        'start'   => $horaire["DATE"].'T08:00',
                        'end' => $horaire["DATE"].'T10:00'
                    );
                }
                if($horaire["COURS_10H15_12H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_10H15_12H15"].' Local : '.$horaire['LOCAL_10H15_12H15'],
                        'start'   => $horaire["DATE"].'T10:15',
                        'end' => $horaire["DATE"].'T12:15'
                    );
                }
                if($horaire["COURS_12H15_13H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_12H15_13H15"].' Local : '.$horaire['LOCAL_12H15_13H15'],
                        'start'   => $horaire["DATE"].'T12:15',
                        'end' => $horaire["DATE"].'T13:15'
                    );
                }
                if($horaire["COURS_13H15_15H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_13H15_15H15"].' Local : '.$horaire['LOCAL_13H15_15H15'],
                        'start'   => $horaire["DATE"].'T13:15',
                        'end' => $horaire["DATE"].'T15:15'
                    );
                }
                if($horaire["COURS_15H30_17H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_15H30_17H30"].' Local : '.$horaire['LOCAL_15H30_17H30'],
                        'start'   => $horaire["DATE"].'T15:30',
                        'end' => $horaire["DATE"].'T17:30'
                    );
                }
                if($horaire["COURS_17H30_18H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_17H30_18H30"].' Local : '.$horaire['LOCAL_17H30_18H30'],
                        'start'   => $horaire["DATE"].'T17:30',
                        'end' => $horaire["DATE"].'T18:30'
                    );
                }
                if($horaire["COURS_18H30_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_18H30_20H30"].' Local : '.$horaire['LOCAL_18H30_20H30'],
                        'start'   => $horaire["DATE"].'T18:30',
                        'end' => $horaire["DATE"].'T20:30'
                    );
                }
                if($horaire["COURS_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_20H30"].' Local : '.$horaire['LOCAL_20H30'],
                        'start'   => $horaire["DATE"].'T20:30',
                        'end' => $horaire["DATE"].'T22:30'
                    );
                }


            }
        }
    } 
    elseif ($cursus == 'SF B1') {
        if (str_contains($horaire['SECTION_ANNEE'], 'SI SF B1') || str_contains($horaire['SECTION_ANNEE'], 'SF B1')) {
            if (str_contains($horaire['GR'], $groupe)) {
                if($horaire["COURS_8H_10H"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_8H_10H"].' Local : '.$horaire['LOCAL_8H_10H'],
                        'start'   => $horaire["DATE"].'T08:00',
                        'end' => $horaire["DATE"].'T10:00'
                    );
                }
                if($horaire["COURS_10H15_12H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_10H15_12H15"].' Local : '.$horaire['LOCAL_10H15_12H15'],
                        'start'   => $horaire["DATE"].'T10:15',
                        'end' => $horaire["DATE"].'T12:15'
                    );
                }
                if($horaire["COURS_12H15_13H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_12H15_13H15"].' Local : '.$horaire['LOCAL_12H15_13H15'],
                        'start'   => $horaire["DATE"].'T12:15',
                        'end' => $horaire["DATE"].'T13:15'
                    );
                }
                if($horaire["COURS_13H15_15H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_13H15_15H15"].' Local : '.$horaire['LOCAL_13H15_15H15'],
                        'start'   => $horaire["DATE"].'T13:15',
                        'end' => $horaire["DATE"].'T15:15'
                    );
                }
                if($horaire["COURS_15H30_17H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_15H30_17H30"].' Local : '.$horaire['LOCAL_15H30_17H30'],
                        'start'   => $horaire["DATE"].'T15:30',
                        'end' => $horaire["DATE"].'T17:30'
                    );
                }
                if($horaire["COURS_17H30_18H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_17H30_18H30"].' Local : '.$horaire['LOCAL_17H30_18H30'],
                        'start'   => $horaire["DATE"].'T17:30',
                        'end' => $horaire["DATE"].'T18:30'
                    );
                }
                if($horaire["COURS_18H30_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_18H30_20H30"].' Local : '.$horaire['LOCAL_18H30_20H30'],
                        'start'   => $horaire["DATE"].'T18:30',
                        'end' => $horaire["DATE"].'T20:30'
                    );
                }
                if($horaire["COURS_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_20H30"].' Local : '.$horaire['LOCAL_20H30'],
                        'start'   => $horaire["DATE"].'T20:30',
                        'end' => $horaire["DATE"].'T22:30'
                    );
                }


            }
        }
    } 
    elseif ($cursus == 'SI B2') {
        if (str_contains($horaire['SECTION_ANNEE'], 'SI SF B2') || str_contains($horaire['SECTION_ANNEE'], 'SI B2')) {
            if (str_contains($horaire['GR'], $groupe)) {
                if($horaire["COURS_8H_10H"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_8H_10H"].' Local : '.$horaire['LOCAL_8H_10H'],
                        'start'   => $horaire["DATE"].'T08:00',
                        'end' => $horaire["DATE"].'T10:00'
                    );
                }
                if($horaire["COURS_10H15_12H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_10H15_12H15"].' Local : '.$horaire['LOCAL_10H15_12H15'],
                        'start'   => $horaire["DATE"].'T10:15',
                        'end' => $horaire["DATE"].'T12:15'
                    );
                }
                if($horaire["COURS_12H15_13H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_12H15_13H15"].' Local : '.$horaire['LOCAL_12H15_13H15'],
                        'start'   => $horaire["DATE"].'T12:15',
                        'end' => $horaire["DATE"].'T13:15'
                    );
                }
                if($horaire["COURS_13H15_15H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_13H15_15H15"].' Local : '.$horaire['LOCAL_13H15_15H15'],
                        'start'   => $horaire["DATE"].'T13:15',
                        'end' => $horaire["DATE"].'T15:15'
                    );
                }
                if($horaire["COURS_15H30_17H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_15H30_17H30"].' Local : '.$horaire['LOCAL_15H30_17H30'],
                        'start'   => $horaire["DATE"].'T15:30',
                        'end' => $horaire["DATE"].'T17:30'
                    );
                }
                if($horaire["COURS_17H30_18H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_17H30_18H30"].' Local : '.$horaire['LOCAL_17H30_18H30'],
                        'start'   => $horaire["DATE"].'T17:30',
                        'end' => $horaire["DATE"].'T18:30'
                    );
                }
                if($horaire["COURS_18H30_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_18H30_20H30"].' Local : '.$horaire['LOCAL_18H30_20H30'],
                        'start'   => $horaire["DATE"].'T18:30',
                        'end' => $horaire["DATE"].'T20:30'
                    );
                }
                if($horaire["COURS_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_20H30"].' Local : '.$horaire['LOCAL_20H30'],
                        'start'   => $horaire["DATE"].'T20:30',
                        'end' => $horaire["DATE"].'T22:30'
                    );
                }


            }
        }
    }
    elseif ($cursus == 'SF B2') {
        if (str_contains($horaire['SECTION_ANNEE'], 'SI SF B2') || str_contains($horaire['SECTION_ANNEE'], 'SF B2')) {
            if (str_contains($horaire['GR'], $groupe)) {
                if($horaire["COURS_8H_10H"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_8H_10H"].' Local : '.$horaire['LOCAL_8H_10H'],
                        'start'   => $horaire["DATE"].'T08:00',
                        'end' => $horaire["DATE"].'T10:00'
                    );
                }
                if($horaire["COURS_10H15_12H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_10H15_12H15"].' Local : '.$horaire['LOCAL_10H15_12H15'],
                        'start'   => $horaire["DATE"].'T10:15',
                        'end' => $horaire["DATE"].'T12:15'
                    );
                }
                if($horaire["COURS_12H15_13H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_12H15_13H15"].' Local : '.$horaire['LOCAL_12H15_13H15'],
                        'start'   => $horaire["DATE"].'T12:15',
                        'end' => $horaire["DATE"].'T13:15'
                    );
                }
                if($horaire["COURS_13H15_15H15"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_13H15_15H15"].' Local : '.$horaire['LOCAL_13H15_15H15'],
                        'start'   => $horaire["DATE"].'T13:15',
                        'end' => $horaire["DATE"].'T15:15'
                    );
                }
                if($horaire["COURS_15H30_17H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_15H30_17H30"].' Local : '.$horaire['LOCAL_15H30_17H30'],
                        'start'   => $horaire["DATE"].'T15:30',
                        'end' => $horaire["DATE"].'T17:30'
                    );
                }
                if($horaire["COURS_17H30_18H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_17H30_18H30"].' Local : '.$horaire['LOCAL_17H30_18H30'],
                        'start'   => $horaire["DATE"].'T17:30',
                        'end' => $horaire["DATE"].'T18:30'
                    );
                }
                if($horaire["COURS_18H30_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_18H30_20H30"].' Local : '.$horaire['LOCAL_18H30_20H30'],
                        'start'   => $horaire["DATE"].'T18:30',
                        'end' => $horaire["DATE"].'T20:30'
                    );
                }
                if($horaire["COURS_20H30"] !== NULL) {
                    $data[] = array(
                        'id'   => $horaire["id"],
                        'title'   => $horaire["COURS_20H30"].' Local : '.$horaire['LOCAL_20H30'],
                        'start'   => $horaire["DATE"].'T20:30',
                        'end' => $horaire["DATE"].'T22:30'
                    );
                }


            }
        }
    }
    elseif (str_contains($horaire['SECTION_ANNEE'], $cursus)) {
        if (str_contains($horaire['GR'], $groupe)) {
            if($horaire["COURS_8H_10H"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_8H_10H"].' Local : '.$horaire['LOCAL_8H_10H'],
                    'start'   => $horaire["DATE"].'T08:00',
                    'end' => $horaire["DATE"].'T10:00'
                );
            }
            if($horaire["COURS_10H15_12H15"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_10H15_12H15"].' Local : '.$horaire['LOCAL_10H15_12H15'],
                    'start'   => $horaire["DATE"].'T10:15',
                    'end' => $horaire["DATE"].'T12:15'
                );
            }
            if($horaire["COURS_12H15_13H15"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_12H15_13H15"].' Local : '.$horaire['LOCAL_12H15_13H15'],
                    'start'   => $horaire["DATE"].'T12:15',
                    'end' => $horaire["DATE"].'T13:15'
                );
            }
            if($horaire["COURS_13H15_15H15"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_13H15_15H15"].' Local : '.$horaire['LOCAL_13H15_15H15'],
                    'start'   => $horaire["DATE"].'T13:15',
                    'end' => $horaire["DATE"].'T15:15'
                );
            }
            if($horaire["COURS_15H30_17H30"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_15H30_17H30"].' Local : '.$horaire['LOCAL_15H30_17H30'],
                    'start'   => $horaire["DATE"].'T15:30',
                    'end' => $horaire["DATE"].'T17:30'
                );
            }
            if($horaire["COURS_17H30_18H30"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_17H30_18H30"].' Local : '.$horaire['LOCAL_17H30_18H30'],
                    'start'   => $horaire["DATE"].'T17:30',
                    'end' => $horaire["DATE"].'T18:30'
                );
            }
            if($horaire["COURS_18H30_20H30"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_18H30_20H30"].' Local : '.$horaire['LOCAL_18H30_20H30'],
                    'start'   => $horaire["DATE"].'T18:30',
                    'end' => $horaire["DATE"].'T20:30'
                );
            }
            if($horaire["COURS_20H30"] !== NULL) {
                $data[] = array(
                    'id'   => $horaire["id"],
                    'title'   => $horaire["COURS_18H30_20H30"],
                    'start'   => $horaire["DATE"].'T20:30',
                    'end' => $horaire["DATE"].'T22:30'
                );
            }


        }
    }
}
echo safe_json_encode($data);
function safe_json_encode($value, $options = 0, $depth = 512, $utfErrorFlag = false) {
    $encoded = json_encode($value, $options, $depth);
    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            return $encoded;
        case JSON_ERROR_DEPTH:
            return 'Maximum stack depth exceeded'; // or trigger_error() or throw new Exception()
        case JSON_ERROR_STATE_MISMATCH:
            return 'Underflow or the modes mismatch'; // or trigger_error() or throw new Exception()
        case JSON_ERROR_CTRL_CHAR:
            return 'Unexpected control character found';
        case JSON_ERROR_SYNTAX:
            return 'Syntax error, malformed JSON'; // or trigger_error() or throw new Exception()
        case JSON_ERROR_UTF8:
            $clean = utf8ize($value);
            if ($utfErrorFlag) {
                return 'UTF8 encoding error'; // or trigger_error() or throw new Exception()
            }
            return safe_json_encode($clean, $options, $depth, true);
        default:
            return 'Unknown error'; // or trigger_error() or throw new Exception()

    }
}

function utf8ize($mixed) {
    if (is_array($mixed)) {
        foreach ($mixed as $key => $value) {
            $mixed[$key] = utf8ize($value);
        }
    } else if (is_string ($mixed)) {
        return utf8_encode($mixed);
    }
    return $mixed;
}
?>