fetch('http://api.openweathermap.org/data/2.5/weather?id=590939&units=metric&appid=1cd5c51642ba647a9cb3bfd8a16031fb')
.then(response => response.json())
.then(data => {
  var tempValue = data['main']['temp'];
  var windValue = data['wind']['speed'];
  var descValue = data['weather'][0]['description'];

  wind.innerHTML = windValue+" m/s";
  temp.innerHTML = tempValue+" °C";
  desc.innerHTML = descValue;
})
.catch(err => alert("Wrong city name!"));