<?php
/*
 * WP Reset
 * Utility & Helper functions
 * (c) WebFactory Ltd, 2015 - 2020
 */

// include only file
if (!defined('ABSPATH')) {
  die('Do not open this file directly.');
}

class WP_Reset_Utility
{
  /**
   * Get a list of WordPress versions available for installation
   *
   * @return array
   */
  static function get_wordpress_versions()
  {
    $versions = 'a:387:{s:15:"5.5-alpha-47570";s:8:"bleeding";s:17:"5.4.1-alpha-47569";s:5:"point";s:3:"5.4";i:1586433381;s:5:"5.3.2";i:1578431355;s:5:"5.3.1";i:1576222826;s:3:"5.3";i:1573985840;s:5:"5.2.4";i:1572476910;s:5:"5.2.3";i:1567634400;s:5:"5.2.2";i:1560816000;s:5:"5.2.1";i:1558396800;s:3:"5.2";i:1557187200;s:5:"5.1.2";i:1567641600;s:5:"5.1.1";i:1552435200;s:3:"5.1";i:1550707200;s:5:"5.0.6";i:1567641600;s:5:"5.0.4";i:1552435200;s:5:"5.0.3";i:1546992000;s:5:"5.0.2";i:1545177600;s:5:"5.0.1";i:1544659200;i:0;i:1544054400;s:6:"4.9.11";i:1567641600;s:6:"4.9.10";i:1552435200;s:5:"4.9.9";i:1544659200;s:5:"4.9.8";i:1533168000;s:5:"4.9.7";i:1530748800;s:5:"4.9.6";i:1526515200;s:5:"4.9.5";i:1522713600;s:5:"4.9.4";i:1517875200;s:5:"4.9.3";i:1517788800;s:5:"4.9.2";i:1516060800;s:5:"4.9.1";i:1511913600;s:3:"4.9";i:1510790400;s:6:"4.8.10";i:1567641600;s:5:"4.8.9";i:1552435200;s:5:"4.8.8";i:1544659200;s:5:"4.8.7";i:1530748800;s:5:"4.8.6";i:1522713600;s:5:"4.8.5";i:1516060800;s:5:"4.8.4";i:1511913600;s:5:"4.8.3";i:1509408000;s:5:"4.8.2";i:1505779200;s:5:"4.8.1";i:1501632000;s:3:"4.8";i:1496880000;s:6:"4.7.14";i:1567641600;s:6:"4.7.13";i:1552435200;s:6:"4.7.12";i:1544659200;s:6:"4.7.11";i:1530748800;s:6:"4.7.10";i:1522713600;s:5:"4.7.9";i:1516060800;s:5:"4.7.8";i:1511913600;s:5:"4.7.7";i:1509408000;s:5:"4.7.6";i:1505779200;s:5:"4.7.5";i:1494892800;s:5:"4.7.4";i:1492646400;s:5:"4.7.3";i:1488758400;s:5:"4.7.2";i:1485388800;s:5:"4.7.1";i:1484092800;s:3:"4.7";i:1480982400;s:6:"4.6.15";i:1567641600;s:6:"4.6.14";i:1552435200;s:6:"4.6.13";i:1544659200;s:6:"4.6.12";i:1530748800;s:6:"4.6.11";i:1522713600;s:6:"4.6.10";i:1516060800;s:5:"4.6.9";i:1511913600;s:5:"4.6.8";i:1509408000;s:5:"4.6.7";i:1505779200;s:5:"4.6.6";i:1494892800;s:5:"4.6.5";i:1492646400;s:5:"4.6.4";i:1488758400;s:5:"4.6.3";i:1485388800;s:5:"4.6.2";i:1484092800;s:5:"4.6.1";i:1473206400;s:3:"4.6";i:1471305600;s:6:"4.5.18";i:1567641600;s:6:"4.5.17";i:1552435200;s:6:"4.5.16";i:1544659200;s:6:"4.5.15";i:1530748800;s:6:"4.5.14";i:1522713600;s:6:"4.5.13";i:1516060800;s:6:"4.5.12";i:1511913600;s:6:"4.5.11";i:1509408000;s:6:"4.5.10";i:1505779200;s:5:"4.5.9";i:1494892800;s:5:"4.5.8";i:1492646400;s:5:"4.5.7";i:1488758400;s:5:"4.5.6";i:1485388800;s:5:"4.5.5";i:1484092800;s:5:"4.5.4";i:1473206400;s:5:"4.5.3";i:1466467200;s:5:"4.5.2";i:1462492800;s:5:"4.5.1";i:1461628800;s:3:"4.5";i:1460419200;s:6:"4.4.19";i:1567641600;s:6:"4.4.18";i:1552435200;s:6:"4.4.17";i:1544659200;s:6:"4.4.16";i:1530748800;s:6:"4.4.15";i:1522713600;s:6:"4.4.14";i:1516060800;s:6:"4.4.13";i:1511913600;s:6:"4.4.12";i:1509408000;s:6:"4.4.11";i:1505779200;s:6:"4.4.10";i:1494892800;s:5:"4.4.9";i:1492646400;s:5:"4.4.8";i:1488758400;s:5:"4.4.7";i:1485388800;s:5:"4.4.6";i:1484092800;s:5:"4.4.5";i:1473206400;s:5:"4.4.4";i:1466467200;s:5:"4.4.3";i:1462492800;s:5:"4.4.2";i:1454371200;s:5:"4.4.1";i:1452038400;s:3:"4.4";i:1449532800;s:6:"4.3.20";i:1567641600;s:6:"4.3.19";i:1552435200;s:6:"4.3.18";i:1544659200;s:6:"4.3.17";i:1530748800;s:6:"4.3.16";i:1522713600;s:6:"4.3.15";i:1516060800;s:6:"4.3.14";i:1511913600;s:6:"4.3.13";i:1509408000;s:6:"4.3.12";i:1505779200;s:6:"4.3.11";i:1494892800;s:6:"4.3.10";i:1492646400;s:5:"4.3.9";i:1488758400;s:5:"4.3.8";i:1485388800;s:5:"4.3.7";i:1484092800;s:5:"4.3.6";i:1473206400;s:5:"4.3.5";i:1466467200;s:5:"4.3.4";i:1462492800;s:5:"4.3.3";i:1454371200;s:5:"4.3.2";i:1452038400;s:5:"4.3.1";i:1442275200;s:3:"4.3";i:1439856000;s:6:"4.2.24";i:1567641600;s:6:"4.2.23";i:1552435200;s:6:"4.2.22";i:1544659200;s:6:"4.2.21";i:1530748800;s:6:"4.2.20";i:1522713600;s:6:"4.2.19";i:1516060800;s:6:"4.2.18";i:1511913600;s:6:"4.2.17";i:1509408000;s:6:"4.2.16";i:1505779200;s:6:"4.2.15";i:1494892800;s:6:"4.2.14";i:1492646400;s:6:"4.2.13";i:1488758400;s:6:"4.2.12";i:1485388800;s:6:"4.2.11";i:1484092800;s:6:"4.2.10";i:1473206400;s:5:"4.2.9";i:1466467200;s:5:"4.2.8";i:1462492800;s:5:"4.2.7";i:1454371200;s:5:"4.2.6";i:1452038400;s:5:"4.2.5";i:1442275200;s:5:"4.2.4";i:1438646400;s:5:"4.2.3";i:1437609600;s:5:"4.2.2";i:1430956800;s:5:"4.2.1";i:1430092800;s:3:"4.2";i:1429747200;s:6:"4.1.27";i:1567641600;s:6:"4.1.26";i:1552435200;s:6:"4.1.25";i:1544659200;s:6:"4.1.24";i:1530748800;s:6:"4.1.23";i:1522713600;s:6:"4.1.22";i:1516060800;s:6:"4.1.21";i:1511913600;s:6:"4.1.20";i:1509408000;s:6:"4.1.19";i:1505779200;s:6:"4.1.18";i:1494892800;s:6:"4.1.17";i:1492646400;s:6:"4.1.16";i:1488758400;s:6:"4.1.15";i:1485388800;s:6:"4.1.14";i:1484092800;s:6:"4.1.13";i:1473206400;s:6:"4.1.12";i:1466467200;s:6:"4.1.11";i:1462492800;s:6:"4.1.10";i:1454371200;s:5:"4.1.9";i:1452038400;s:5:"4.1.8";i:1442275200;s:5:"4.1.7";i:1438646400;s:5:"4.1.6";i:1437609600;s:5:"4.1.5";i:1430956800;s:5:"4.1.4";i:1430092800;s:5:"4.1.3";i:1429747200;s:5:"4.1.2";i:1429574400;s:5:"4.1.1";i:1424217600;s:3:"4.1";i:1418860800;s:6:"4.0.27";i:1567641600;s:6:"4.0.26";i:1552435200;s:6:"4.0.25";i:1544659200;s:6:"4.0.24";i:1530748800;s:6:"4.0.23";i:1522713600;s:6:"4.0.22";i:1516060800;s:6:"4.0.21";i:1511913600;s:6:"4.0.20";i:1509408000;s:6:"4.0.19";i:1505779200;s:6:"4.0.18";i:1494892800;s:6:"4.0.17";i:1492646400;s:6:"4.0.16";i:1488758400;s:6:"4.0.15";i:1485388800;s:6:"4.0.14";i:1484092800;s:6:"4.0.13";i:1473206400;s:6:"4.0.12";i:1466467200;s:6:"4.0.11";i:1462492800;s:6:"4.0.10";i:1454371200;s:5:"4.0.9";i:1452038400;s:5:"4.0.8";i:1442275200;s:5:"4.0.7";i:1438646400;s:5:"4.0.6";i:1437609600;s:5:"4.0.5";i:1430870400;s:5:"4.0.4";i:1430092800;s:5:"4.0.3";i:1429747200;s:5:"4.0.2";i:1429574400;s:5:"4.0.1";i:1416441600;i:1;i:1409788800;s:6:"3.9.28";i:1567641600;s:6:"3.9.27";i:1552435200;s:6:"3.9.26";i:1544659200;s:6:"3.9.25";i:1530748800;s:6:"3.9.24";i:1522713600;s:6:"3.9.23";i:1516060800;s:6:"3.9.22";i:1511913600;s:6:"3.9.21";i:1509408000;s:6:"3.9.20";i:1505779200;s:6:"3.9.19";i:1494892800;s:6:"3.9.18";i:1492646400;s:6:"3.9.17";i:1488758400;s:6:"3.9.16";i:1485388800;s:6:"3.9.15";i:1484092800;s:6:"3.9.14";i:1473206400;s:6:"3.9.13";i:1466467200;s:6:"3.9.12";i:1462492800;s:6:"3.9.11";i:1454371200;s:6:"3.9.10";i:1452038400;s:5:"3.9.9";i:1442275200;s:5:"3.9.8";i:1438646400;s:5:"3.9.7";i:1437609600;s:5:"3.9.6";i:1430956800;s:5:"3.9.5";i:1429747200;s:5:"3.9.4";i:1429574400;s:5:"3.9.3";i:1416441600;s:5:"3.9.2";i:1407283200;s:5:"3.9.1";i:1399507200;s:3:"3.9";i:1397606400;s:6:"3.8.30";i:1567641600;s:6:"3.8.29";i:1553126400;s:6:"3.8.28";i:1544659200;s:6:"3.8.27";i:1530748800;s:6:"3.8.26";i:1522713600;s:6:"3.8.25";i:1516060800;s:6:"3.8.24";i:1511913600;s:6:"3.8.23";i:1509408000;s:6:"3.8.22";i:1505779200;s:6:"3.8.21";i:1494892800;s:6:"3.8.20";i:1492646400;s:6:"3.8.19";i:1488758400;s:6:"3.8.18";i:1485388800;s:6:"3.8.17";i:1484092800;s:6:"3.8.16";i:1473206400;s:6:"3.8.15";i:1466467200;s:6:"3.8.14";i:1462492800;s:6:"3.8.13";i:1454371200;s:6:"3.8.12";i:1452038400;s:6:"3.8.11";i:1442275200;s:6:"3.8.10";i:1438646400;s:5:"3.8.9";i:1437609600;s:5:"3.8.8";i:1430956800;s:5:"3.8.7";i:1429747200;s:5:"3.8.6";i:1429574400;s:5:"3.8.5";i:1416441600;s:5:"3.8.4";i:1407283200;s:5:"3.8.3";i:1397433600;s:5:"3.8.2";i:1396915200;s:5:"3.8.1";i:1390435200;s:3:"3.8";i:1386806400;s:6:"3.7.30";i:1567641600;s:6:"3.7.29";i:1553126400;s:6:"3.7.28";i:1544659200;s:6:"3.7.27";i:1530748800;s:6:"3.7.26";i:1522713600;s:6:"3.7.25";i:1516060800;s:6:"3.7.24";i:1511913600;s:6:"3.7.23";i:1509408000;s:6:"3.7.22";i:1505779200;s:6:"3.7.21";i:1494892800;s:6:"3.7.20";i:1492646400;s:6:"3.7.19";i:1488758400;s:6:"3.7.18";i:1485388800;s:6:"3.7.17";i:1484092800;s:6:"3.7.16";i:1473206400;s:6:"3.7.15";i:1466467200;s:6:"3.7.14";i:1462492800;s:6:"3.7.13";i:1454371200;s:6:"3.7.12";i:1452038400;s:6:"3.7.11";i:1442275200;s:6:"3.7.10";i:1438646400;s:5:"3.7.9";i:1437609600;s:5:"3.7.8";i:1430956800;s:5:"3.7.7";i:1429747200;s:5:"3.7.6";i:1429574400;s:5:"3.7.5";i:1416441600;s:5:"3.7.4";i:1407283200;s:5:"3.7.3";i:1397433600;s:5:"3.7.2";i:1396915200;s:5:"3.7.1";i:1383004800;s:3:"3.7";i:1382572800;s:5:"3.6.1";i:1378857600;s:3:"3.6";i:1375315200;s:5:"3.5.2";i:1371772800;s:5:"3.5.1";i:1358985600;s:3:"3.5";i:1355184000;s:5:"3.4.2";i:1346889600;s:5:"3.4.1";i:1340755200;s:3:"3.4";i:1339545600;s:5:"3.3.3";i:1340755200;s:5:"3.3.2";i:1334880000;s:5:"3.3.1";i:1325548800;s:3:"3.3";i:1323648000;s:5:"3.2.1";i:1310428800;s:3:"3.2";i:1309737600;s:5:"3.1.4";i:1309305600;s:5:"3.1.3";i:1306281600;s:5:"3.1.2";i:1303776000;s:5:"3.1.1";i:1301875200;s:3:"3.1";i:1298419200;s:5:"3.0.6";i:1303776000;s:5:"3.0.5";i:1297036800;s:5:"3.0.4";i:1293580800;s:5:"3.0.3";i:1291766400;s:5:"3.0.2";i:1291075200;s:5:"3.0.1";i:1280361600;i:2;i:1276732800;s:5:"2.9.2";i:1266192000;s:5:"2.9.1";i:1262563200;s:3:"2.9";i:1261094400;s:5:"2.8.6";i:1257984000;s:5:"2.8.5";i:1255996800;s:5:"2.8.4";i:1250035200;s:5:"2.8.3";i:1249257600;s:5:"2.8.2";i:1248048000;s:5:"2.8.1";i:1247097600;s:3:"2.8";i:1244678400;s:5:"2.7.1";i:1234224000;s:3:"2.7";i:1228867200;s:5:"2.6.5";i:1227571200;s:5:"2.6.3";i:1224720000;s:5:"2.6.2";i:1220832000;s:5:"2.6.1";i:1218758400;s:3:"2.6";i:1216080000;s:5:"2.5.1";i:1209081600;s:3:"2.5";i:1206748800;s:5:"2.3.3";i:1202169600;s:5:"2.3.2";i:1198886400;s:5:"2.3.1";i:1193356800;s:3:"2.3";i:1190678400;s:5:"2.2.3";i:1190592000;s:5:"2.2.2";i:1190592000;s:5:"2.2.1";i:1190592000;s:3:"2.2";i:1190592000;s:5:"2.1.3";i:1190592000;s:5:"2.1.2";i:1190592000;s:5:"2.1.1";i:1190592000;s:3:"2.1";i:1190592000;s:6:"2.0.11";i:1190592000;s:6:"2.0.10";i:1190592000;s:5:"2.0.9";i:1190592000;s:5:"2.0.8";i:1190592000;s:5:"2.0.7";i:1190592000;s:5:"2.0.6";i:1190592000;s:5:"2.0.5";i:1190592000;s:5:"2.0.4";i:1190592000;s:5:"2.0.1";i:1190592000;i:3;i:1190592000;s:5:"1.5.2";i:1190592000;s:7:"1.5.1.3";i:1190592000;s:7:"1.5.1.2";i:1190592000;s:7:"1.5.1.1";i:1190592000;s:5:"1.5.1";i:1190592000;s:13:"1.5-strayhorn";i:1190592000;s:5:"1.2.2";i:1190592000;s:5:"1.2.1";i:1190592000;s:10:"1.2-mingus";i:1190592000;s:9:"1.2-delta";i:1190592000;s:12:"1.0-platinum";i:1190592000;s:5:"1.0.2";i:1190592000;s:12:"1.0.2-blakey";i:1190592000;s:11:"1.0.1-miles";i:1190592000;}';

    $versions = unserialize($versions);

    return $versions;
  } // get_wordpress_versions

  
  /**
   * Creates a fancy, iOS alike toggle switch
   *
   * @param string $name ID used for checkbox.
   * @param array $options Various options: value, saved_value, option_key, class
   * @param boolean $echo Default: true.
   * @return void
   */
  static function create_toogle_switch($name, $options = array(), $echo = true)
  {
    $default_options = array('value' => '1', 'saved_value' => '', 'option_key' => $name, 'class' => '');
    $options = array_merge($default_options, $options);

    $out = "\n";
    $out .= '<div class="toggle-wrapper ' . $options['class'] . '">';
    $out .= '<input type="checkbox" id="' . $name . '" ' . self::checked($options['value'], $options['saved_value']) . ' type="checkbox" value="' . $options['value'] . '" name="' . $options['option_key'] . '">';
    $out .= '<label for="' . $name . '" class="toggle"><span class="toggle_handler"></span></label>';
    $out .= '</div>';

    if ($echo) {
      echo $out;
    } else {
      return $out;
    }
  } // create_toggle_switch


  /**
   * Helper for creating checkboxes.
   *
   * @param string $value Checkbox value, in HTML.
   * @param array $current Current, saved value of checkbox.
   * @param boolean $echo Default: false.
   *
   * @return void|string
   */
  static function checked($value, $current, $echo = false)
  {
    $out = '';

    if (!is_array($current)) {
      $current = (array) $current;
    }

    if (in_array($value, $current)) {
      $out = ' checked="checked" ';
    }

    if ($echo) {
      echo $out;
    } else {
      return $out;
    }
  } // checked


  /**
   * Format file size to human readable string
   *
   * @param int  $bytes  Size in bytes to format.
   *
   * @return string
   */
  static function format_size($bytes)
  {
    if ($bytes > 1073741824) {
      return number_format_i18n($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes > 1048576) {
      return number_format_i18n($bytes / 1048576, 1) . ' MB';
    } elseif ($bytes > 1024) {
      return number_format_i18n($bytes / 1024, 1) . ' KB';
    } else {
      return number_format_i18n($bytes, 0) . ' bytes';
    }
  } // format_size


  /**
   * Create select options for select
   *
   * @param array $options options
   * @param string $selected selected value
   * @param bool $output echo, if false return html as string
   * @return string html with options
   */
  static function create_select_options($options, $selected = null, $output = true)
  {
    $out = "\n";

    if (is_array($options) && !empty($options) && !isset($options[0]['val'])) {
      $tmp = array();
      foreach ($options as $val => $label) {
        $tmp[] = array('val' => $val, 'label' => $label);
      } // foreach
      $options = $tmp;
    }

    foreach ($options as $tmp) {
      if ($selected == $tmp['val']) {
        $out .= "<option selected=\"selected\" value=\"{$tmp['val']}\">{$tmp['label']}&nbsp;</option>\n";
      } else {
        $out .= "<option value=\"{$tmp['val']}\">{$tmp['label']}&nbsp;</option>\n";
      }
    }

    if ($output) {
      echo $out;
    } else {
      return $out;
    }
  } //  create_select_options


  /**
   * Get table size and row count as html
   *
   * @return string html with table details
   */
  static function get_table_details()
  {
    global $wpdb, $wp_reset;

    $tbl_core = $tbl_custom = $tbl_size = $tbl_rows = 0;
    $table_status = $wpdb->get_results('SHOW TABLE STATUS');
    if (is_array($table_status)) {
      foreach ($table_status as $index => $table) {
        if (0 !== stripos($table->Name, $wpdb->prefix)) {
          continue;
        }
        if (empty($table->Engine)) {
          continue;
        }

        $tbl_rows += $table->Rows;
        $tbl_size += $table->Data_length + $table->Index_length;
        if (in_array($table->Name, $wp_reset->core_tables)) {
          $tbl_core++;
        } else {
          $tbl_custom++;
        }
      } // foreach
    } else {
      return ' no tables found.';
    }
    return ' totaling ' . self::format_size($tbl_size) . ' in ' . number_format($tbl_rows) . ' rows.';
  } // get_table_details

} // WP_Reset_Utility
