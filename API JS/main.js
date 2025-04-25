console.log("Hello, World!");

let url = "https://random.dog/woof.json";

async function fetchRandomDog() {
  try {
    let response = await fetch(url);
    if (!response.ok) {
      throw new Error("Network response was not ok");
    }
    let data = await response.json();
    console.log(data);

    let img = document.querySelector("img");
    img.src = data.url;
    img.alt = "Random Dog";
    img.width = 300;
    img.height = 300;
  } catch (error) {
    console.error("There was a problem with the fetch operation:", error);
  }
}

fetchRandomDog();