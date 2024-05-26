


  var countDownDate1 = new Date("July 5, 2023 15:37:25").getTime();
  var countDownDate2 = new Date("July 10, 2023 12:00:00").getTime();
  var countDownDate3 = new Date("July 15, 2023 18:30:00").getTime();
  var countDownDate4 = new Date("August 2, 2023 09:45:00").getTime();
  var countDownDate5 = new Date("July 1, 2023 16:20:00").getTime();
  var countDownDate6 = new Date("July 25, 2023 10:30:00").getTime();
  var countDownDate7 = new Date("June 30, 2023 12:15:00").getTime();
  var countDownDate8 = new Date("July 18, 2023 20:00:00").getTime();
  var countDownDate9 = new Date("July 30, 2023 09:00:00").getTime();
  var countDownDate10 = new Date("August 1, 2023 15:45:00").getTime();
  var countDownDate11 = new Date("July 12, 2023 18:30:00").getTime();
  
  
  var x = setInterval(function() {
    var now = new Date().getTime();

    var distances = [
      countDownDate1 - now,
      countDownDate2 - now,
      countDownDate3 - now,
      countDownDate4 - now,
      countDownDate5 - now,
      countDownDate6 - now,
      countDownDate7 - now,
      countDownDate8 - now,
      countDownDate9 - now,
      countDownDate10 - now,
      countDownDate11 - now
	  
    ];

    distances.forEach(function(distance, index) {
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      var elementId = "demo" + (index + 1);
      var element = document.getElementById(elementId);

      if (distance < 0) {
        clearInterval(x);
        element.innerHTML = "Ended";
      } else {
        element.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
      }
    });
  }, 1000);
