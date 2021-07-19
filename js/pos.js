function rm(str){
	
	res = str.replace("s", "")
	return res;

	
}
var strength = {
  0: "ضعيفه  جدا",
  1: "ضعيفه ",
  2: "عاديه",
  3: "جيده",
  4: "قوية"
}
var password = document.getElementById('password');
var meter = document.getElementById('password-strength-meter');
var text = document.getElementById('password-strength-text');
var time = document.getElementById('password-time-text');
var time2 = document.getElementById('password-time2-text');
var time3 = document.getElementById('password-time3-text');
var time4 = document.getElementById('password-time4-text');
var feed = document.getElementById('password-strength-feedback');
var suggestions = document.getElementById('password-strength-suggestions');

password.addEventListener('input', function() {
  var val = password.value;
  var result = zxcvbn(val);
  meter.value = result.score;

  if (val !== "") {
    text.innerHTML = strength[result.score]; 
	time.innerHTML = "الوقت اللازم للكسر: " + rm(result.crack_times_display.online_throttling_100_per_hour); 
	time2.innerHTML = "الوقت اللازم للكسر: " + rm(result.crack_times_display.online_no_throttling_10_per_second); 
	time3.innerHTML = "الوقت اللازم للكسر: " + rm(result.crack_times_display.online_throttling_100_per_hour); 
	time4.innerHTML = "الوقت اللازم للكسر: " + rm(result.crack_times_display.online_throttling_100_per_hour); 
	time4.innerHTML = "الوقت اللازم للكسر: " + rm(result.crack_times_display.online_throttling_100_per_hour); 
	feed.innerHTML = result.feedback.warning; 
	suggestions.innerHTML = result.feedback.suggestions; 

  } else {
    text.innerHTML = "";
	time.innerHTML = "";
	time2.innerHTML = "";
	time3.innerHTML = "";
	time4.innerHTML = "";
	feed.innerHTML = "";
	suggestions.innerHTML = "";

  }
});
