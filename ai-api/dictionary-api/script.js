// Search Dictionary | searchinput & searchbtn
const dictionary = (word) => {
    const options = {
        method: 'GET',
        headers: {
            // 'X-RapidAPI-Key': 'c7652bc8cbmsh6ba89869b719900p1eae6bjsna5572da222c6',
            // 'X-RapidAPI-Host': 'dictionary-by-api-ninjas.p.rapidapi.com'
        }
    };

    // fetch('https://dictionary-by-api-ninjas.p.rapidapi.com/v1/dictionary?word=' + word, options)
    .then(response => response.json())
    .then((response) => {
        wordheading.innerHTML = 'The meaning of "' + response.word +'" here:';
        definition.innerHTML = response.definition.replace("2.", "<br>2.").replace("3.", "<br>3.").replace("4.", "<br>4.");
        console.log(word, response);
    })
    .catch(err => console.error(err));
}

searchbtn.addEventListener("click", (e) => {
    e.preventDefault();
    dictionary(searchinput.value);
})

