function xorBase64Strings(str1, str2) {
  var result = "";
  var str1Decoded = atob(str1);
  var str2Decoded = atob(str2);
  var length = Math.min(str1Decoded.length, str2Decoded.length);
  for (var i = 0; i < length; i++) {
    result += String.fromCharCode(str1Decoded.charCodeAt(i) ^ str2Decoded.charCodeAt(i));
  }
  return btoa(result);
}

const base64String1 = "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw="
const base64String2 = "eyJzaG93cGFzc3dvcmQiOiJubyIsImJnY29sb3IiOiIjZmZmZmZmIn0="
const result = xorBase64Strings(base64String1, base64String2);
console.log(result);
