// Do not deploy this API Key or upload onto GitHub.
// const OPENAI_API_KEY = "sk-proj-3AgtG94Y5alwkHK4DTLsT3BlbkFJ4ofWrfRjFKPpUMQ3CMx6"
const submitIcon = document.querySelector("#submit-icon")
const inputElement = document.querySelector("input")
const imageSection = document.querySelector(".images-section")

const getImages = async () => {
    const options = {
        method: "POST",
        headers: {
            "Authorization": `Bearer ${OPENAI_API_KEY}`,
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            prompt: inputElement.value,
            n: 4,
            size: "1024x1024"
        })
    }
    try {
        // const response = await fetch("https://api.openai.com/v1/images/generations", options)
        const data = await response.json()
        console.log(data)
        
        data?.data.forEach(imageObject => {
            const imageContainer = document.createElement("div")
            imageContainer.classList.add("image-container")
            const imageElement = document.createElement("img")
            imageElement.setAttribute("src", imageObject.url)
            imageContainer.append(imageElement)
            imageSection.append(imageContainer)
        })
    }
    catch (error) {
        console.log(error)
    }
}

submitIcon.addEventListener('click', getImages)