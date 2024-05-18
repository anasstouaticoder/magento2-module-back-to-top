/**
 * Copyright (c) 2024
 * MIT License
 * Module AnassTouatiCoder_BackToTop
 * Author Anass TOUATI anass1touati@gmail.com
 *
 * @description This js code is compatible with Luma, Hyva and other Magento themes, it uses Vanilla JS
 */
class BackToTopButton {
    constructor() {
        this.button = document.getElementById('backToTop-component');
        this.positionList = [
            {position: 'top-left', style:  {left: '1em', top: '2em'}},
            {position: 'top-right', style: {right: '1em', top: '2em'}},
            {position: 'bottom-left', style: {left: '1em', bottom: '2em'}},
            {position: 'bottom-right', style: {right: '1em', bottom: '2em'}}
        ];
        if (this.button) {
            this.config = window.backToTopConfig;
            this.updateButton();
            this.addButtonListeners();
        }
    }

    updateButton() {
        const { display } = this.config, position = display?.position;

        this.button.innerHTML = display?.label || 'Back To Top';
        this.button.style.color = display?.label_color || '#FAFAFA';
        this.button.style.backgroundColor = display?.background_color || '#F44336';
        this.button.style.borderColor = display?.border_color || '#e0e0e0';
        this.button.style.display = 'inline';
        this.applyPosition(position);

    }

    applyPosition(position) {
        const positionStyle = this.positionList.find(item => item.position === position);
        if (positionStyle) {
            for (const [key, value] of Object.entries(positionStyle.style)) {
                this.button.style[key] = value;
            }
        }
    }

    addButtonListeners() {
        this.button.addEventListener('click', (event) => this.scrollToTop(event));
        window.addEventListener('scroll', () => this.toggleVisibility());
    }

    scrollToTop(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    toggleVisibility() {
        if (window.scrollY > 150) {
            this.button.classList.remove('fadeout');
            this.button.classList.add('fadein');
        } else {
            this.button.classList.remove('fadein');
            this.button.classList.add('fadeout');
        }
    }
}
document.addEventListener('DOMContentLoaded', () => new BackToTopButton());
