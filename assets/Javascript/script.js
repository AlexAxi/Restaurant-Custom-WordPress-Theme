// Burger menu
let burger = document.querySelector('#burger-menu');
let box = document.querySelector('#mobile-nav-box');

burger.addEventListener('click', () => {
    if (box.classList.contains('hide')) {
        box.classList.remove('hide');

    } else {
        box.classList.add('hide');
    }
})

// Mouse OVER
// let menuBtn = document.querySelector('#menu-nav-btn');
// let normalMenuP = document.querySelector('#menu-nav-p');

// menuBtn.addEventListener('mouseover', () => {
//     console.log('00000')
//     menuBtn.classList.toggle('x')
//     normalMenuP.classList.toggle('v')
// })


// let Btn = document.querySelector('#starters');
// let item1 = document.querySelector('#item1');
// let item2 = document.querySelector('#item2');
// let item3 = document.querySelector('#item3');
// let startersP = document.querySelector('#startersP');



// function add() {
//     item1.classList.add('fill');
//     item2.classList.add('fill');
//     item3.classList.add('fill');
//     startersP.classList.add('red');

// }

// function remove() {
//     item1.classList.remove('fill');
//     item2.classList.remove('fill');
//     item3.classList.remove('fill');
//     startersP.classList.remove('red');

// }

// MENU MAIN NAVIGATION

let menuNavBTn = document.getElementById('menu-nav-btn');
let monthlyMenuNavBtn = document.getElementById('monthly-menu-nav-btn');
let menuWrapper = document.getElementById('menu-wrapper');
let monthlyMenuWrapper = document.getElementById('monthly-menu-wrapper');

menuNavBTn.onclick = function(e) {
    menuWrapper.style.display = "block"
    monthlyMenuWrapper.style.display = "none"
    menuNavBTn.classList.add('active-bg')
    document.getElementById('menu-nav-p').classList.add('active-cl')
    monthlyMenuNavBtn.classList.remove('active-bg')
    document.getElementById('monthly-menu-nav-p').classList.remove('active-cl')
    e.preventDefault();
}

monthlyMenuNavBtn.onclick = function(e) {
    menuWrapper.style.display = "none"
    monthlyMenuWrapper.style.display = "block"
    monthlyMenuNavBtn.classList.add('active-bg')
    document.getElementById('monthly-menu-nav-p').classList.add('active-cl')
    menuNavBTn.classList.remove('active-bg')
    document.getElementById('menu-nav-p').classList.remove('active-cl')
    e.preventDefault();
}

function checkLink() {
    if (window.location.href.indexOf("?menu#see") > -1) {
        menuNavBTn.click();
    } else if (window.location.href.indexOf("?monthly-menu#see") > -1) {
        monthlyMenuNavBtn.click();
    } else if (window.location.href.indexOf("menu") > -1) {
        menuNavBTn.click();

    }
}

window.onload = checkLink();


// SUB MENU MAIN NAVIGATION////////////////////////////////////////////

//sub nav buttons
let startersBtn = document.getElementById('starters');
let mainCourseBtn = document.getElementById('mainCourse');
let dessertsBtn = document.getElementById('desserts');
let drinksBtn = document.getElementById('drinks');
let childrenBtn = document.getElementById('children');
let luxuryBtn = document.getElementById('luxury');
let coffeeBtn = document.getElementById('coffee');
let softBtn = document.getElementById('soft');

//menu items

let foodStarters = document.getElementById('food-starters');
let foodMainCourse = document.getElementById('food-main-course');
let foodDesserts = document.getElementById('food-desserts');
let foodDrinks = document.getElementById('food-drinks');
let foodChildren = document.getElementById('food-children');
let foodLuxury = document.getElementById('food-luxury');
let foodCoffee = document.getElementById('food-coffee');
let foodSoft = document.getElementById('food-soft');

//SVG paths + texts//////////////

//STARTERS paths 
let path1 = document.getElementById('path1');
let path2 = document.getElementById('path2');
let path3 = document.getElementById('path3');
let pStarters = document.getElementById('add-1');
//MAIN MENU paths
let path4 = document.getElementById('path4');
let pMain = document.getElementById('add-2');
//DESSERTS paths
let path5 = document.getElementById('path5');
let pDeserts = document.getElementById('add-3');
//DRINKS paths
let path6 = document.getElementById('path6');
let pDrinks = document.getElementById('add-4');
//CHILDREN paths
let path7 = document.getElementById('path7');
let pChildren = document.getElementById('add-5');
//LUXURY paths
let path8 = document.getElementById('path8');
let path9 = document.getElementById('path9');
let path10 = document.getElementById('path10');
let pLuxury = document.getElementById('add-6');
//COFFEE paths
let path11 = document.getElementById('path11');
let path12 = document.getElementById('path12');
let path13 = document.getElementById('path13');
let path14 = document.getElementById('path14');
let path15 = document.getElementById('path15');
let pCoffee = document.getElementById('add-7');
//SOFT paths
let path16 = document.getElementById('path16');
let path17 = document.getElementById('path17');
let path18 = document.getElementById('path18');
let pSoft = document.getElementById('add-8');
///////////////////////////////

//ACTIVATE STARTERS
startersBtn.onclick = function(e) {
    activateStarters(e);
    if (screen.width > 425) {
        foodStarters.style.display = "grid"
    } else {
        foodStarters.style.display = "block"
    }
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateStarters() {
    if (window.location.href.indexOf("starters")) {
        path1.classList.add('active-fill')
        path2.classList.add('active-fill')
        path3.classList.add('active-fill')
        pStarters.classList.add('active-p')
            //remove from others
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}

//ACTIVATE MAIN COURSE
mainCourseBtn.onclick = function(e) {
    activateMainCourse();
    if (screen.width > 425) {
        foodMainCourse.style.display = "grid"
    } else {
        foodMainCourse.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateMainCourse() {
    if (window.location.href.indexOf("mainCourse")) {
        path4.classList.add('active-fill')
        pMain.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}

//ACTIVATE DESERTS
dessertsBtn.onclick = function(e) {
    activateDesserts(e);
    if (screen.width > 425) {
        foodDesserts.style.display = "grid"
    } else {
        foodDesserts.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateDesserts() {
    if (window.location.href.indexOf("desserts")) {
        path5.classList.add('active-fill')
        pDeserts.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}

//ACTIVATE DRINKS
drinksBtn.onclick = function(e) {
    activateDrinks();
    if (screen.width > 425) {
        foodDrinks.style.display = "grid"
    } else {
        foodDrinks.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateDrinks() {
    if (window.location.href.indexOf("drinks")) {
        path6.classList.add('active-fill')
        pDrinks.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}

//ACTIVATE CHILDREN
childrenBtn.onclick = function(e) {
    activateChildren();
    if (screen.width > 425) {
        foodChildren.style.display = "grid"
    } else {
        foodChildren.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateChildren() {
    if (window.location.href.indexOf("children")) {
        path7.classList.add('active-fill')
        pChildren.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}
//ACTIVATE LUXURY
luxuryBtn.onclick = function(e) {
    activateLuxury();
    if (screen.width > 425) {
        foodLuxury.style.display = "grid"
    } else {
        foodLuxury.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodCoffee.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateLuxury() {
    if (window.location.href.indexOf("children")) {
        path8.classList.add('active-fill')
        path9.classList.add('active-fill')
        path10.classList.add('active-fill')
        pLuxury.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}

//ACTIVATE COFFEE
coffeeBtn.onclick = function(e) {
    activateCoffee();
    if (screen.width > 425) {
        foodCoffee.style.display = "grid"
    } else {
        foodCoffee.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodSoft.style.display = "none"
    e.preventDefault();
}

function activateCoffee() {
    if (window.location.href.indexOf("coffee")) {
        path11.classList.add('active-fill')
        path12.classList.add('active-fill')
        path13.classList.add('active-fill')
        path14.classList.add('active-fill')
        path15.classList.add('active-fill')
        pCoffee.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path16.classList.remove('active-fill')
        path17.classList.remove('active-fill')
        path18.classList.remove('active-fill')
        pSoft.classList.remove('active-p')
        console.log('active')
    } else {}
}


//ACTIVATE SOFT
softBtn.onclick = function(e) {
    activateSoft();
    if (screen.width > 425) {
        foodSoft.style.display = "grid"
    } else {
        foodSoft.style.display = "block"
    }
    foodStarters.style.display = "none"
    foodMainCourse.style.display = "none"
    foodDesserts.style.display = "none"
    foodDrinks.style.display = "none"
    foodChildren.style.display = "none"
    foodLuxury.style.display = "none"
    foodCoffee.style.display = "none"
    e.preventDefault();
}

function activateSoft() {
    if (window.location.href.indexOf("soft")) {
        path16.classList.add('active-fill')
        path17.classList.add('active-fill')
        path18.classList.add('active-fill')
        pSoft.classList.add('active-p')
            //remove from others
        path1.classList.remove('active-fill')
        path2.classList.remove('active-fill')
        path3.classList.remove('active-fill')
        pStarters.classList.remove('active-p')
        path4.classList.remove('active-fill')
        pMain.classList.remove('active-p')
        path5.classList.remove('active-fill')
        pDeserts.classList.remove('active-p')
        path6.classList.remove('active-fill')
        pDrinks.classList.remove('active-p')
        path7.classList.remove('active-fill')
        pChildren.classList.remove('active-p')
        path8.classList.remove('active-fill')
        path9.classList.remove('active-fill')
        path10.classList.remove('active-fill')
        pLuxury.classList.remove('active-p')
        path11.classList.remove('active-fill')
        path12.classList.remove('active-fill')
        path13.classList.remove('active-fill')
        path14.classList.remove('active-fill')
        path15.classList.remove('active-fill')
        pCoffee.classList.remove('active-p')
        console.log('active')
    } else {}
}


///SUB MENU LINKS FORM FRONT PAGE////////////////////////////////////
function checkMenu() {
    if (window.location.href.indexOf("starters") > -1) {
        menuNavBTn.click();
        startersBtn.click();

    } else if (window.location.href.indexOf("mainCourse") > -1) {
        menuNavBTn.click();
        mainCourseBtn.click();

    } else if (window.location.href.indexOf("desserts") > -1) {
        menuNavBTn.click();
        dessertsBtn.click();
    } else if (window.location.href.indexOf("drinks") > -1) {
        menuNavBTn.click();
        drinksBtn.click();
    } else if (window.location.href.indexOf("children") > -1) {
        menuNavBTn.click();
        childrenBtn.click();
    } else if (window.location.href.indexOf("luxury") > -1) {
        menuNavBTn.click();
        luxuryBtn.click();
    } else if (window.location.href.indexOf("coffee") > -1) {
        menuNavBTn.click();
        coffeeBtn.click();
    } else if (window.location.href.indexOf("soft") > -1) {
        menuNavBTn.click();
        softBtn.click();
    } else {
        /// menu button with starters activated
    }

}

window.onload = checkMenu();


//Custom reservation button

function clicks() {
    let myElement = document.querySelector('#glfButton0');
    myElement.click();

}