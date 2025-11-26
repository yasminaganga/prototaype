const apiKey = "deb7e3814b44728067ec5882a699a806";
const searchBtn = document.querySelector("#searchButton");
const input = document.querySelector("#cityInput");

searchBtn.addEventListener("click", () => {
  const city = input.value.trim();
  if (city === "") return;

  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric&lang=fr`)
    .then(response => response.json())
    .then(data => {
      if (data.cod === "404") {
        alert("This city does not exist. Please try again");
        return;
      }

      const img = document.querySelector("#weatherIcon");
      const temp = document.querySelector("#temperature");
      const description = document.querySelector("#description");
      const humi = document.querySelector("#humidity");
      const wind = document.querySelector("#windSpeed");

      
       switch (data.weather[0].main) {
      case "Clear":
      img.src = "assist/clear.png";
 break;
 case "Rain":
   img.src = "assist/rain.png";
      break;
    case "Snow":
       img.src = "assist/snow.png";
       break;
    case "Clouds":
     img.src = "assist/cloud.png";
         break;
       case "Mist":
        img.src = "assist/mist.png";
     break;
     default:
     img.src = "assist/cloud.png";
       }

      temp.innerHTML = Math.round(data.main.temp) + "°C";
      description.innerHTML = data.weather[0].description;
      humi.innerHTML = "Humidity: " + data.main.humidity + "%";
      wind.innerHTML = "Wind: " + data.wind.speed + " Km/h";  

      input.value = "";
    })
    .catch(() => {
      alert("Connection error. Please try again");
    });
});


input.addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    searchBtn.click();
  }
});
