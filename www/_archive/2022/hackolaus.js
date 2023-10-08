const addClickEventListenerToReadMoreLink = () => {
    const readMoreLinks = document.querySelectorAll('.read-more-link');
    readMoreLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            if (link.previousElementSibling.classList.contains("hidden")) {
                link.previousElementSibling.classList.remove("hidden")
                link.textContent = "...read less"
            } else {
                link.previousElementSibling.classList.add("hidden")
                link.textContent = "...read more"
            }
        })
    })
}

addClickEventListenerToReadMoreLink();