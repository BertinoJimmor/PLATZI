function response () {
    fetch("https://rickandmortyapi.com/api/character")
        .then(response => response.json())
        .then((data)=> {
            console.log(data);
        })
        .catch((error) => {
            console.error("Error fetching data:", error);
        })
}




async function fetchData() {
    try {
        let response = await fetch("https://rickandmortyapi.com/api/character");
        let data = await response.json();
        console.log(data);
    }
    catch (error) {
        console.error("Error fetching data:", error);
    }
}



//para cuando se requieren hacer varias peticiones

let urls = [
    "https://rickandmortyapi.com/api/character",
    "https://rickandmortyapi.com/api/location",
    "https://rickandmortyapi.com/api/episode"
];

async function fetchNewData() {
    try{
        for (let url of urls){
            let response = await fetch(url);
            let data = await response.json();
            console.log(data);
        }
    }
    catch (error) {
        console.error("Error fetching data:", error);
    }
}



