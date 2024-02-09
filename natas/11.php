<?php 

  function xor_encrypt($in) {
    $key = 'KNHL';
    $text = $in;
    $outText = '';
    for($i=0;$i<strlen($text);$i++) {
      $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }
    return $outText;
  }
	
  function saveData($d) {
    return base64_encode(json_encode($d));
  }
  function saveData2($d) {
    return base64_encode(xor_encrypt(json_encode($d)));
  }
  $defaultdata = array( "showpassword"=>"yes", "bgcolor"=>"#ffffff");
  echo saveData($defaultdata ) . "\n";
  echo saveData2($defaultdata ) . "\n";
  /*
    "eyJzaG93cGFzc3dvcmQiOiJubyIsImJnY29sb3IiOiIjZmZmZmZmIn0=" . "\n";
    "MGw7JCQ5OC04PT8jOSpqdmkgJ25nbCorKCEkIzlscm5oKC4qLSgubjY=" . "\n";
    "MGw7JCQ5OC04PT8jOSpqdmk3LT9pYmouLC0nICQ8anZpbS4qLSguKmkz"
    "KNHLKNHLKNHLKNHLKNHLKNHLKNHLKNHLKNHLKNHLK"
    "YWqo0pjpcXzSIl5NMAVxg12QxeC1w9QG"
     key = "KNHL"
  */
?>
