import './bootstrap';
import '~resources/scss/app.scss';
import "bootstrap-icons/font/bootstrap-icons.css";
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

if (document.querySelector('project-form')) {

    const imageRemovedInput = document.getElementById('remove-img-input');
    const imageRemovedMessage = document.getElementById('img-removed-message');
    const imageRemovedButton = document.getElementById('remove-img-btn');

    imageRemovedButton.addEventListener('click', function () {
        removePreviousImage();
    })

    function removePreviousImage() {
        imageRemovedMessage.classList.remove('d-none');
        imageRemovedMessage.classList.add('d-block');

        imageRemovedButton.classList.add('d-none');

        imageRemovedInput.setAttribute('value', 'true');
    }

}
