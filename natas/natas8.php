<?php
  $encodedSecret = "3d3d516343746d4d6d6c315669563362";
  function encodeSecret($secret) {
    return bin2hex(strrev(base64_encode($secret)));
  }
  function decodeSecret($secret){
    return base64_decode(strrev(hex2bin($secret)));
  }
  echo decodeSecret("3d3d516343746d4d6d6c315669563362") . "\n";
  echo encodeSecret("oubWYf2kBq") . "\n";
  // natas9: Sda6t0vkOPkM8YeOZkAGVhFoaplvlJFd
?>
