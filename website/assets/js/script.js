const switchForm = (to) => {
    const customerForm = document.getElementById('customer-form');
    const proForm = document.getElementById('pro-form');
    const toggleCustomer = document.getElementById('toggle-customer-form');
    const togglePro = document.getElementById('toggle-pro-form');

    if (to === 'customer') {
        proForm.classList.remove('flex');
        proForm.classList.add('hidden');
        togglePro.classList.remove('active');
        togglePro.classList.add('inactive');

        customerForm.classList.add('flex');
        customerForm.classList.remove('hidden');
        toggleCustomer.classList.remove('inactive');
        toggleCustomer.classList.add('active');

    }

    if (to === 'pro') {
        customerForm.classList.remove('flex');
        customerForm.classList.add('hidden');
        toggleCustomer.classList.remove('active');
        toggleCustomer.classList.add('inactive');

        proForm.classList.add('flex');
        proForm.classList.remove('hidden');
        togglePro.classList.remove('inactive');
        togglePro.classList.add('active');
    }
}


const openTab = (evt, id, scope) => {
    const rootElm = document.getElementById(scope);
    let taskTabs = rootElm.getElementsByClassName("tab-content");
    for (let i = 0; i < taskTabs.length; i++) {
        taskTabs[i].style.display = "none";
    }
    let tabMenuItems = rootElm.getElementsByClassName("tab-menu-item");
    for (let i = 0; i < taskTabs.length; i++) {
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" tab-menu-active", "");
    }
    document.getElementById(id).style.display = "flex";
    evt.currentTarget.className += " tab-menu-active";
}

class Typer {
    constructor(id, ar) {
        this.i = 0;
        this.a = 0;
        this.isBackspacing = false;
        this.isParagraph = false;
        this.speedForward = 100;
        this.speedWait = 1000;
        this.speedBetweenLines = 1000;
        this.speedBackspace = 25;
        this.id = id;
        this.ar = ar;

    }

    typeWriter() {
        const element = document.getElementById(this.id);
        const aString = this.ar[this.a];
        const eHeader = element.querySelector(`#${this.id} h1`);
        const eParagraph = element.querySelector(`#${this.id} p`);

        if (!this.isBackspacing) {
            if (this.i < aString.length) {
                if (aString.charAt(this.i) == "|") {
                    this.isParagraph = true;
                    eHeader.classList.remove("cursor");
                    eParagraph.classList.add("cursor");
                    this.i++;
                    setTimeout(() => { this.typeWriter(); }, this.speedBetweenLines);
                } else {
                    if (!this.isParagraph) {
                        eHeader.textContent = eHeader.textContent + aString.charAt(this.i);
                    } else {
                        eParagraph.textContent = eParagraph.textContent + aString.charAt(this.i);
                    }
                    this.i++;
                    setTimeout(() => { this.typeWriter(); }, this.speedForward);
                }
            } else if (this.i == aString.length) {

                this.isBackspacing = true;
                setTimeout(() => { this.typeWriter(); }, this.speedWait);

            }
        } else {
            
            if (eHeader.textContent.length > 0 || eParagraph.textContent.length > 0) {

                if (eParagraph.textContent.length > 0) {
                    eParagraph.textContent = eParagraph.textContent.substring(0, eParagraph.textContent.length - 1);
                     } else if (eHeader.textContent.length > 0) {
                    eHeader.classList.remove("cursor");
                    eParagraph.classList.add("cursor");
                    eHeader.textContent = eHeader.textContent.substring(0, eHeader.textContent.length - 1);
                }
                setTimeout(() => { this.typeWriter(); }, this.speedBackspace);

                   } else {

                this.isBackspacing = false;
                this.i = 0;
                this.isParagraph = false;
                this.a = (this.a + 1) % this.ar.length;
                setTimeout(() => { this.typeWriter(); }, 50);

            }
        }
    }
}
