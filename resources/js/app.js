import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


function updateMaskWidth(value) {
    const maskRect = document.getElementById('mask-rect');
    const mapSvg = document.getElementById('map-svg');
    const svgWidth = mapSvg.viewBox.baseVal.width;
    maskRect.setAttribute('width', (value / 100) * svgWidth);
}

document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('input[name="percentage"]');
    slider.addEventListener('input', function(event) {
        updateMaskWidth(event.target.value);
    });
});
