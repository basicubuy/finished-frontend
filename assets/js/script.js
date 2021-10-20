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

const sidebar = document.getElementById('sidebar');
const openSidebarBtn = document.getElementById('nav-toggle-open');
const closeSidebarBtn = document.getElementById('nav-toggle-close');

const onSidebarOpen = () => {
    sidebar.classList.add('open');
}

const onSidebarClose = () => {
    sidebar.classList.remove('open');
}


const formSteps = [
    document.getElementById('post-task-form-1'),
    document.getElementById('post-task-form-2'),
    document.getElementById('post-task-form-3'),
];

const toggleSubmitTaskForm = () => {
    const submitTaskForm = document.getElementById('submit-task-form');
    submitTaskForm.classList.remove('hidden');
    document.getElementById('post-task-form-1').style.display = 'flex';
    submitTaskForm.classList.add('grid');
}

const closeSubmitTaskForm = () => {
    const submitTaskForm = document.getElementById('submit-task-form');
    formSteps.forEach((form) => {
        form.style.display = 'none';
    })
    submitTaskForm.classList.remove('grid');
    submitTaskForm.classList.add('hidden');
}

const onNext = (current, next) => {
    formSteps[current].style.display = 'none';
    formSteps[next].style.display = 'flex';
};


const markJobCompletePopup = document.getElementById('mark-job-completed');
const onMarkJobComplete = () => {
    markJobCompletePopup.style.display = 'grid';
}

const onCloseMarkJobComplete = () => {
    markJobCompletePopup.style.display = 'none';
}

const onOpenPopup = (id) => {
    document.getElementById(id).style.display = 'grid';
}


const onOpenPopuper = (id) => {
    let details = $("#rating-input").val();
    let data = details.split("~");
    let firstname = data[0];
    let lastname = data[1];
    $(".pro-pic").html('<img src="' + data[2] + '" class="rounded-full" width="120" height="120"> ');
    $(".pro-service").html(data[3]);
    $(".pro-firstname").html(firstname)
    $(".pro-names").html(lastname + ' ' + firstname);
    $("#prof-id").val(data[4]);
    document.getElementById(id).style.display = 'grid';
}

const onOpenPopupAttach = (id, user_name_id) => {
    document.getElementById(id).style.display = 'grid';
    var split = user_name_id.split("~");
    var pro_name = split[0];
    var pro_id = split[1];
    $(".pro_name").html(pro_name);
    $("#pro-id").val(pro_id);
}



const onOpenPopupAttachTwo = (id, userdetails) => {
    document.getElementById(id).style.display = 'grid';
    // console.log(userdetails);
    // return;
    // console.log(userdetails); Dafe G~Web Design~0~0~Aug 2021~2~user_pic
    //Dafe George~Jabi~Graphic Design~0~0~Aug 3~2~http://127.0.0.1:8000/storage/profile_pictures/zK6G3zDSKssaeWTeDsV0E1AIdCFBaPb1loduBg98.png~28
    var split = userdetails.split("~");
    var pro_name = split[0];
    var splitName = pro_name.split(" ");
    var pro_subCat = split[1];
    var pro_rating = split[2];
    var pro_job_done = split[3];
    var pro_date_joined = split[4];
    var pro_id = split[5];
    var pro_img = split[6];
    var projectID = split[7];

    if (pro_img == "http://127.0.0.1:8000/storage" || pro_img == "http://new.ubuy.ng/storage") {
        var default_img = "assets/images/ubuy_logo.svg";
    } else {
        var default_img = pro_img;
    }
    $(".pro_name").html(splitName[0] + " " + splitName[1][0]);
    $("#pro_id").val(pro_id);
    $("#project_id").val(projectID);
    $("#pro_service").html(pro_subCat);
    $("#pro_rating").html(pro_rating);
    $("#pro_job_done").html(pro_job_done);
    $("#pro_date_joined").html(pro_date_joined);
    $("#pro_img").html('<img src="' + default_img + '" alt="avatar" class="rounded-full w-32 h-32" />');
    $("#pro_img_mobile").html('<img src="' + default_img + '" alt="avatar" class="rounded-full w-32 h-32" />');
}


const onClosePopup = (id) => {
    document.getElementById(id).style.display = 'none';
}

const onTabSwitch = (id) => {

    const setting = document.getElementById("account-settings");
    const btnSetting = document.getElementById("account-settings-btn");
    const billing = document.getElementById("billing");
    const billings = document.getElementById("billings");
    const billingBtn = document.getElementById("billing-btn");

    if (id == "account-settings") {
        setting.classList.add('flex');
        btnSetting.classList.add('border-b-4');
        setting.classList.remove('hidden');

        billing.classList.remove('flex');
        billing.classList.add('hidden');
        billingBtn.classList.remove('border-b-4')
    }

    if (id === "billing") {
        billing.classList.add('flex');
        billing.classList.remove('hidden');
        billingBtn.classList.add('border-b-4');

        setting.classList.remove('flex');
        btnSetting.classList.remove('border-b-4');
        setting.classList.add('hidden');
    }

}

const openTab = (evt, id) => {
    let taskTabs = document.getElementsByClassName("task-tab");
    for (let i = 0; i < taskTabs.length; i++) {
        taskTabs[i].style.display = "none";
    }
    let tabMenuItems = document.getElementsByClassName("task-menu-item");
    for (let i = 0; i < taskTabs.length; i++) {
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" task-menu-active", "");
    }
    document.getElementById(id).style.display = "flex";
    evt.currentTarget.className += " task-menu-active";
}


const openTabHome = (evt, id) => {
    let taskTabs = document.getElementsByClassName("task-tab");
    for (let i = 0; i < taskTabs.length; i++) {
        taskTabs[i].style.display = "none";
    }
    let tabMenuItems = document.getElementsByClassName("task-menu-item");
    for (let i = 0; i < taskTabs.length; i++) {
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" task-menu-active", "");
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" bg-ubuy-blue", "");
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" bg-ubuy-blue", "");
        tabMenuItems[i].className = tabMenuItems[i].className.replace(" text-white", "");
    }
    document.getElementById(id).style.display = "flex";
    evt.currentTarget.className += " task-menu-active";
    evt.currentTarget.className += " bg-ubuy-blue";
    evt.currentTarget.className += " text-white";
}


const openTabOther = (evt, id, scope) => {
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


const openTabOtherer = (evt, id) => {
    if (id == 'services') {
        document.getElementById('services').style.display = "flex";
        document.getElementById('work-hour').style.display = "none";
    } else if (id == 'work-hour') {
        document.getElementById('services').style.display = "none";
        document.getElementById('work-hour').style.display = "flex";
    }
}

const openTabOtherers = (evt, id) => {
    if (id == 'portfolio') {
        document.getElementById('portfolio').style.display = "flex";
        document.getElementById('reviews').style.display = "none";
    } else if (id == 'reviews') {
        document.getElementById('portfolio').style.display = "none";
        document.getElementById('reviews').style.display = "flex";
    }
}