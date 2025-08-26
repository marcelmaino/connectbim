{
    const btnMenu = document.getElementById('js-btn-menu');
    const overlayMenu = document.querySelector('.js-overlay');

    function openMenu() {
        document.documentElement.classList.toggle('menu-opened');
    }

    btnMenu.addEventListener('click', openMenu);

    overlayMenu.addEventListener('click', openMenu);

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: true,
        infinite: true,
        navigation: {
            nextEl: ".custom-swiper-button-next",
            prevEl: ".custom-swiper-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });

    var swiper = new Swiper(".swiperTimeline", {
        slidesPerView: 3,
        spaceBetween: 0,
        grabCursor: true,
        breakpoints: {
            "@0.00": {
            slidesPerView: 1,
            },
            "@0.75": {
            slidesPerView: 2,
            },
            "@1.50": {
            slidesPerView: 3,
            },
        },
    });

    new Accordion('.accordion-container');

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    let fileInput = document.getElementById("file-input");
    let fileList = document.getElementById("files-list");
    let numOfFiles = document.getElementById("num-of-files");
    fileInput.addEventListener("change", () => {
    fileList.innerHTML = "";
    numOfFiles.textContent = `${fileInput.files.length} Arquivos selecionados`;
    for (i of fileInput.files) {
        let reader = new FileReader();
        let listItem = document.createElement("li");
        let fileName = i.name;
        let fileSize = (i.size / 1024).toFixed(1);
        listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}KB</p>`;
        if (fileSize >= 1024) {
        fileSize = (fileSize / 1024).toFixed(1);
        listItem.innerHTML = `<p>${fileName}</p><p>${fileSize}MB</p>`;
        }
        fileList.appendChild(listItem);
    }
    });
}
