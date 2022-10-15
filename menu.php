<?php 
/*Template Name: Menu */
get_header();
?>




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/normalize.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/menu.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/nav.css" />
<link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/assets/Css/footer.css" />


<script src="<?php echo get_template_directory_uri(); ?>/assets/Javascript/script.js" defer></script>













<!-- HERO SECTION -->

<div id="hero" class="hero">
        <div class="hero-text">
            <h1 class="hero-h1">Our Menus</h1>
            <p class="hero-p">The people, food and the prime locations make Bøf og Vin <br> the perfect place good friends & family to come together and have great time</p>
        <div id="see" ></div>
        </div>
    </div>


    <div id="bg">
        <img  src="<?php bloginfo('template_directory');?>/assets/Images/Backgound-test-4.jpg" alt="landing-page">
    </div>

    <!-- MAIN MENU NAVIGATION -->

    <div  class="main-menu-nav-div">
        <a id="menu-nav-btn" class="menu-nav-btn" href="#menu">
            <div>
                <p id="menu-nav-p" class="menu-nav-p menu-main-nav">Menu</p>
            </div>
        </a>
        <a id="monthly-menu-nav-btn" class="monthly-menu-nav-btn" href="#monthly-menu">
            <div>
                <p id="monthly-menu-nav-p" class="monthly-menu-nav-p menu-main-nav">Monthly Menu</p>
            </div>
        </a>

    </div>

    <!-- MENU -->

    <!-- NAV MENU -->
    <div id="menu-wrapper" class="menu-wrapper">


        <h1  class="menu-h1">Menu</h1>
        <div class="nav-menu">
            <a id="starters" class="mmm nav-menu-item" href="#starters">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="57" height="56" viewBox="0 0 57 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="active-fill" id="path1" d="M26.5739 28.8545C26.7231 28.207 27.0603 27.6173 27.5437 27.1585C27.6924 27.0119 27.8661 26.8927 28.0567 26.8064L28.0753 26.8017C28.6789 26.9042 29.2988 26.7665 29.8011 26.4185C30.3034 26.0705 30.6478 25.5401 30.7598 24.9419C30.8719 24.3437 30.7427 23.7256 30.4 23.2213C30.0574 22.717 29.5288 22.3669 28.9286 22.2466C27.0542 21.8528 25.3849 22.8166 24.359 23.7758C23.1753 24.8837 22.3562 26.3213 22.009 27.8999C21.8816 28.5015 21.9999 29.1288 22.3379 29.6437C22.6759 30.1585 23.2058 30.5189 23.8112 30.6455C24.4165 30.7721 25.0476 30.6545 25.5658 30.3186C26.0839 29.9828 26.4465 29.4561 26.5739 28.8545Z" fill="white"/>
                    <path class="active-fill" id="path2" d="M29.399 44.517C33.48 44.517 37.3938 42.9059 40.2795 40.0382C43.1652 37.1704 44.7863 33.2809 44.7863 29.2253C44.7863 25.1697 43.1652 21.2802 40.2795 18.4124C37.3938 15.5447 33.48 13.9336 29.399 13.9336C25.3181 13.9336 21.4042 15.5447 18.5186 18.4124C15.6329 21.2802 14.0117 25.1697 14.0117 29.2253C14.0117 33.2809 15.6329 37.1704 18.5186 40.0382C21.4042 42.9059 25.3181 44.517 29.399 44.517ZM29.399 39.8832C26.5547 39.8832 23.8269 38.7603 21.8157 36.7616C19.8044 34.7628 18.6745 32.052 18.6745 29.2253C18.6745 26.3987 19.8044 23.6878 21.8157 21.6891C23.8269 19.6903 26.5547 18.5674 29.399 18.5674C32.2433 18.5674 34.9712 19.6903 36.9824 21.6891C38.9936 23.6878 40.1235 26.3987 40.1235 29.2253C40.1235 32.052 38.9936 34.7628 36.9824 36.7616C34.9712 38.7603 32.2433 39.8832 29.399 39.8832Z" fill="white"/>
                    <path class="active-fill" id="path3" d="M33.6094 0.0501417C37.2744 0.286469 40.7342 1.37079 43.2335 2.93704C48.8382 6.45414 50.8945 9.67931 52.685 12.7794C54.4755 15.8887 56.35 19.8506 56.35 25.9812C56.35 28.8542 56.0283 30.2907 55.7625 31.4955L55.7159 31.7041C55.492 32.7003 55.3102 33.6086 55.5014 35.9394C55.7122 39.0839 55.1521 42.2323 53.8694 45.1144C52.6057 48.0013 50.6007 50.7029 47.887 52.3896C42.3708 55.8187 35.7123 56.5601 29.4688 54.081C26.6944 52.9781 25.8411 52.7603 24.9086 52.7001C24.1921 52.6739 23.4748 52.6816 22.759 52.7232H22.731C21.7425 52.7603 20.4556 52.8113 18.6744 52.8113C10.6077 52.8113 5.24544 48.006 2.52236 42.8021C-1.44571 35.2165 -1.37577 23.6643 7.43697 16.7459C10.0388 14.707 10.7336 14.0907 11.5449 12.7423C13.0044 10.328 14.4032 8.40963 16.1098 6.74607C17.8211 5.07788 19.7608 3.74333 22.2181 2.40414C25.8598 0.411584 29.9258 -0.190819 33.6094 0.0501417ZM33.3017 4.67474C30.3174 4.48011 27.1747 4.98057 24.4609 6.46341C22.2508 7.66821 20.6934 8.77107 19.3785 10.0546C18.0496 11.3429 16.8839 12.9045 15.5456 15.1241C14.24 17.2835 12.9018 18.3678 10.3233 20.3835C3.74402 25.5503 3.41762 34.4658 6.66294 40.6659C8.78919 44.7345 12.7573 48.1728 18.6744 48.1728C20.367 48.1728 21.584 48.1311 22.5632 48.094H22.6471C23.575 48.0569 24.4003 48.0245 25.1977 48.0755C26.9602 48.1867 28.4383 48.6825 31.1987 49.7807C36.0061 51.6899 41.1072 51.1338 45.4203 48.4601C47.1269 47.3943 48.5957 45.5408 49.5982 43.2609C50.5914 40.9903 51.0344 38.488 50.8572 36.3194C50.6194 33.4742 50.8572 32.0979 51.1603 30.7124L51.2116 30.4807C51.4447 29.4335 51.6872 28.3538 51.6872 25.9812C51.6872 20.9489 50.2044 17.7932 48.6377 15.087C47.071 12.3669 45.4809 9.82759 40.7435 6.85729C38.995 5.75906 36.3138 4.86936 33.3017 4.67474Z" fill="white"/>
                    </svg>
                    <p id="add-1" class="nav-menu-p add-1 active-p">Starters</p>
                </div>
            </a>
            <a id="mainCourse" class="mmm nav-menu-item" href="#mainCourse">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path4" d="M57.0816 57.0483C55.5546 58.6047 53.4696 59.5289 50.8268 59.8207C48.1839 60.1125 45.2376 59.6845 41.9878 58.5366C38.7381 57.3888 35.5862 55.5892 32.5322 53.1378C31.0052 51.8927 29.2629 50.9394 27.3052 50.2779C25.3475 49.6164 23.4779 49.1981 21.6964 49.023C19.9149 48.8479 18.1628 48.6923 16.44 48.5561C14.7173 48.4199 13.1022 48.1281 11.5948 47.6806C10.0874 47.2331 8.88338 46.5425 7.98285 45.6086C4.85055 42.4569 2.68731 38.4588 1.49313 33.6145C0.298939 28.7701 0.23042 23.9257 1.28757 19.0814C2.34472 14.237 4.43944 10.239 7.57174 7.0872C10.704 3.93545 14.6683 1.82455 19.4647 0.754515C24.261 -0.315525 29.0573 -0.247431 33.8536 0.958795C38.65 2.16502 42.6143 4.36347 45.7466 7.55413C47.6651 9.46074 49.5934 12.0872 51.5315 15.4335C53.4696 18.7798 55.1728 22.4374 56.6411 26.4063C58.1094 30.3752 59.235 34.3051 60.0181 38.1962C60.8012 42.0872 60.9676 45.7351 60.5173 49.1398C60.067 52.5444 58.9218 55.1806 57.0816 57.0483ZM43.8085 11.2312C41.6159 9.01327 39.0415 7.24285 36.0854 5.91989C33.1293 4.59693 30.0655 3.87708 26.8941 3.76035C23.8401 3.68253 20.8448 4.18837 17.9083 5.27786C14.9718 6.36736 12.4855 7.92378 10.4495 9.94713C6.10347 14.344 4.06748 19.7526 4.34156 26.1728C4.41986 28.8187 4.90929 31.5522 5.80982 34.3732C6.71036 37.1942 7.74793 39.6553 8.92254 41.7565C9.50984 42.7682 10.5474 43.5075 12.0353 43.9744C13.5231 44.4413 15.2361 44.7331 17.1742 44.8499C19.1123 44.9666 21.0993 45.0833 23.1353 45.2001C25.1713 45.3168 27.2269 45.6475 29.302 46.1923C31.3772 46.737 33.0804 47.5541 34.4116 48.6436C37.1915 50.9005 39.7854 52.6125 42.1934 53.7798C44.6013 54.9472 46.8037 55.56 48.8006 55.6184C50.7974 55.6767 52.4614 55.025 53.7927 53.6631C55.398 52.0289 56.3964 49.7526 56.7879 46.8343C57.1795 43.916 57.0228 40.7934 56.3181 37.4666C55.6133 34.1397 54.6247 30.7837 53.3522 27.3985C52.0797 24.0133 50.5919 20.9004 48.8887 18.06C47.1855 15.2195 45.4921 12.9432 43.8085 11.2312ZM34.4116 44.9082C33.0021 43.7409 31.0639 42.8654 28.5973 42.2818C26.1306 41.6981 23.8107 41.3577 21.6377 41.2604C19.4647 41.1631 17.4189 40.9685 15.5004 40.6767C13.5818 40.3849 12.3681 39.9082 11.8591 39.2468C9.549 36.3674 8.29608 32.2429 8.10031 26.8732C7.86539 21.3479 9.60773 16.6786 13.3273 12.8654C15.0501 11.1144 17.1742 9.7623 19.6996 8.80899C22.225 7.85569 24.7994 7.41794 27.4227 7.49576C30.1243 7.57358 32.7476 8.19615 35.2925 9.36347C37.8375 10.5308 40.0497 12.0677 41.9291 13.9744C44.709 16.7759 47.2834 21.1728 49.6522 27.165C52.021 33.1573 53.2054 38.4491 53.2054 43.0405C53.2054 44.9471 53.0977 46.4549 52.8823 47.5639C52.667 48.6728 52.1482 49.6553 51.326 50.5113C48.3503 53.5075 42.7122 51.6398 34.4116 44.9082ZM21.2559 14.9666C19.6898 14.9666 18.3586 15.5211 17.2623 16.63C16.166 17.739 15.6178 19.0619 15.6178 20.5989C15.6178 22.1358 16.166 23.4491 17.2623 24.5386C18.3586 25.6281 19.6898 26.1728 21.2559 26.1728C22.8221 26.1728 24.1533 25.6281 25.2496 24.5386C26.3459 23.4491 26.8941 22.1358 26.8941 20.5989C26.8941 19.0619 26.3459 17.739 25.2496 16.63C24.1533 15.5211 22.8221 14.9666 21.2559 14.9666Z" fill="white"/>
                    </svg>

                    <p id="add-2" class="nav-menu-p add-2">Main</p>
                </div>
            </a>
            <a id="children" class="mmm nav-menu-item" href="#children">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="51" height="50" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path7" d="M6.89014 9.79749L3.76324 4.82499C3.52524 4.44657 3.39351 4.01172 3.38173 3.56562C3.36994 3.11951 3.47853 2.6784 3.69621 2.28808C3.9139 1.89776 4.23274 1.57246 4.61965 1.34595C5.00656 1.11945 5.44743 0.999999 5.89648 1H9.3982C9.84725 0.999999 10.2881 1.11945 10.675 1.34595C11.0619 1.57246 11.3808 1.89776 11.5985 2.28808C11.8162 2.6784 11.9247 3.11951 11.913 3.56562C11.9012 4.01172 11.7694 4.44657 11.5314 4.82499L8.39951 9.79999M40.3156 41.5617L45.3192 38.4542C45.7 38.2177 46.1375 38.0868 46.5864 38.0751C47.0353 38.0634 47.4792 38.1713 47.872 38.3876C48.2647 38.6039 48.5921 38.9208 48.82 39.3053C49.0479 39.6898 49.1681 40.128 49.1681 40.5742V44.0542C49.1681 44.5005 49.0479 44.9386 48.82 45.3231C48.5921 45.7076 48.2647 46.0245 47.872 46.2408C47.4792 46.4571 47.0353 46.5651 46.5864 46.5533C46.1375 46.5416 45.7 46.4107 45.3192 46.1742L40.3105 43.0617M7.65822 9.75C5.99025 9.75 4.3906 10.4085 3.21117 11.5806C2.03174 12.7527 1.36914 14.3424 1.36914 16C1.36914 33.95 16.0101 48.5 34.0724 48.5C35.7403 48.5 37.34 47.8415 38.5194 46.6694C39.6989 45.4973 40.3615 43.9076 40.3615 42.25C40.3615 40.5924 39.6989 39.0027 38.5194 37.8306C37.34 36.6585 35.7403 36 34.0724 36C28.7349 36 23.616 33.8929 19.8418 30.1421C16.0676 26.3914 13.9473 21.3043 13.9473 16C13.9473 14.3424 13.2847 12.7527 12.1053 11.5806C10.9258 10.4085 9.32619 9.75 7.65822 9.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <p id="add-5" class="nav-menu-p add-5">Children</p>
                </div>
            </a>
            <a id="luxury" class="mmm nav-menu-item" href="#luxury">
                <div id="" class="nav-menu-item">

                    <svg class="nav-menu-img" width="61" height="38" viewBox="0 0 61 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path8" fill-rule="evenodd" clip-rule="evenodd" d="M58.8693 34.0352H2.33935C1.31675 34.0352 0.494141 34.8114 0.494141 35.7639C0.494141 36.7239 1.32052 37.5002 2.33935 37.5002H58.8693C59.8919 37.5002 60.7183 36.7239 60.7183 35.7639C60.7183 34.8114 59.8881 34.0352 58.8693 34.0352Z" fill="white"/>
                    <path id="path9" fill-rule="evenodd" clip-rule="evenodd" d="M30.6298 4.50391C16.1435 4.50391 4.4043 15.7839 4.4043 29.6964H56.8552C56.859 15.7839 45.1123 4.50391 30.6298 4.50391Z" fill="white"/>
                    <path id="path10" fill-rule="evenodd" clip-rule="evenodd" d="M26.9043 0H34.3342V7.38373H26.9043V0Z" fill="white"/>
                    </svg>

                    <p id="add-6" class="nav-menu-p add-6">Luxury</p>
                </div>
            </a>
            <a id="desserts" class="mmm nav-menu-item" href="#desserts">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="48" height="55" viewBox="0 0 48 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path5" d="M24.0871 0C19.0973 0 14.8481 3.16938 13.2373 7.59229C8.79372 9.185 5.57211 13.3833 5.57211 18.3333C5.57211 18.4777 5.56285 18.6198 5.57211 18.7642C2.89669 19.7198 0.943359 22.2452 0.943359 25.2083C0.943359 28.9781 4.07934 32.0833 7.88648 32.0833H8.75437L18.7363 51.5625C18.7525 51.5992 18.7895 51.5992 18.8057 51.6335C19.787 53.6663 21.8121 55 24.0871 55C26.3621 55 28.3918 53.6663 29.3662 51.6335H29.4402C29.4472 51.6152 29.431 51.5808 29.4402 51.5625L39.4198 32.0833H40.2877C44.0949 32.0833 47.2308 28.9781 47.2308 25.2083C47.2308 22.1994 45.1965 19.6854 42.4563 18.7619C42.1299 16.866 41.3306 15.0808 40.1311 13.5681C38.9317 12.0554 37.3698 10.8631 35.5872 10.0994C34.8906 4.43667 29.9818 0 24.0871 0ZM24.0871 4.58333C27.1421 4.58333 29.7295 6.48083 30.6692 9.16667C25.2628 9.33625 20.7336 13.239 19.6759 18.3333H10.2009C10.2009 14.5475 13.3206 11.4583 17.144 11.4583C17.7851 11.4583 18.4285 11.5844 19.0256 11.7448C20.0439 10.4019 21.2312 9.17583 22.6406 8.23625C21.4456 7.6095 20.1481 7.19676 18.808 7.01708C19.4536 6.25258 20.2612 5.6382 21.1736 5.21758C22.086 4.79696 23.0807 4.58042 24.0871 4.58333ZM31.0302 13.75C34.0852 13.75 36.6727 15.6475 37.6123 18.3333H24.4481C24.9264 16.9857 25.8178 15.8195 26.9978 14.9978C28.1779 14.1761 29.5876 13.7399 31.0302 13.75ZM7.88648 22.9167H40.2877C41.5976 22.9167 42.6021 23.9113 42.6021 25.2083C42.6021 26.5054 41.5976 27.5 40.2877 27.5H16.2761L18.6622 32.0833H34.2125L25.316 49.5573L25.2443 49.6283V49.7017C25.1438 49.9203 24.9804 50.1048 24.7746 50.2319C24.5687 50.3591 24.3296 50.4234 24.0871 50.4167C23.8443 50.4232 23.605 50.3586 23.3992 50.231C23.1933 50.1034 23.0301 49.9185 22.9299 49.6994V49.6306L22.8582 49.5573L12.2977 28.7879L11.6473 27.5H7.88648C6.57655 27.5 5.57211 26.5054 5.57211 25.2083C5.57211 23.9113 6.57655 22.9167 7.88648 22.9167Z" fill="white"/>
                    </svg>

                    <p id="add-3" class="nav-menu-p add-3">Desserts</p>
                </div>
            </a>
            <a id="coffee" class="mmm nav-menu-item" href="#desserts">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="53" height="57" viewBox="0 0 53 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="path11" d="M52.885 25.7819C52.5641 24.4843 51.5287 23.6247 50.3328 23.6247H45.0241C45.1116 23.1056 45.1991 22.5704 45.2721 22.0189C45.3741 21.3377 45.5929 19.0183 44.2512 17.2504C43.4782 16.2448 42.3698 15.6934 41.1156 15.6934H4.45108C3.09476 15.6934 1.89886 16.2773 1.09673 17.3315C-0.230424 19.067 -0.0262458 21.3215 0.0758431 21.9865C1.16965 29.4799 3.05101 35.1567 5.80741 39.3575C8.73882 43.8017 10.7077 51.0031 10.8535 51.5708C11.4952 54.2632 13.8578 56.2907 16.3663 56.2907H28.967C31.4755 56.2907 33.8235 54.2794 34.4798 51.6032C34.9319 50.0299 36.0841 46.4779 37.4841 43.3313C39.7009 43.234 43.7407 42.8934 45.6367 41.612C46.0742 41.3039 47.4305 40.3956 50.3473 34.1511C53.3662 27.7282 53.0892 26.6091 52.885 25.7819ZM40.1968 21.3702C41.3198 23.0246 40.9697 25.7656 40.5322 29.1879C40.153 32.1237 39.4092 34.443 38.7967 36.0001C38.4029 36.7624 33.6777 45.4723 24.3438 46.2184C17.4747 46.7698 10.8098 42.7961 7.22207 36.0001C6.66787 34.9459 5.06362 32.5454 4.21774 28.8636C3.26977 24.7114 3.70729 21.1918 4.07189 19.2941C13.3036 22.1649 20.5811 22.0838 25.6564 21.4026C32.1463 20.543 38.1258 18.3047 40.1968 21.3702ZM42.9094 36.8111C42.5448 36.9895 41.7719 37.1841 40.7947 37.3301C42.0052 35.0432 43.0115 32.3832 43.8136 29.3015H46.8326C45.6367 32.1237 43.7407 35.8866 42.9094 36.8111Z" fill="white"/>
                        <path id="path12" d="M16.9206 21.0138C16.8331 21.0138 16.731 20.9976 16.6435 20.9652C16.3518 20.8517 16.2497 20.5759 16.3955 20.3651C17.8831 18.1917 19.8374 14.1855 16.1476 11.8012C12.2391 9.25474 13.5662 4.37269 13.6245 4.17806C13.6975 3.93476 14.0037 3.78879 14.3246 3.83745C14.6454 3.88611 14.835 4.1294 14.7767 4.37269C14.7621 4.42135 13.537 8.93036 16.9206 11.12C21.2375 13.9097 19.1082 18.3863 17.4456 20.803C17.3289 20.9327 17.1247 21.0138 16.9206 21.0138Z" fill="white"/>
                        <path id="path13" d="M20.1438 20.6076C20.0563 20.6076 19.9542 20.5914 19.8667 20.5589C19.575 20.4454 19.4729 20.1697 19.6188 19.9588C21.1064 17.7854 23.0606 13.7792 19.3708 11.395C15.4477 8.86472 16.7895 3.98266 16.8478 3.77181C16.9207 3.52851 17.227 3.38254 17.5478 3.4312C17.8687 3.47986 18.0583 3.72315 17.9999 3.96644C17.9854 4.0151 16.7603 8.52411 20.1438 10.7137C24.4607 13.5035 22.3314 17.9801 20.6688 20.3968C20.5522 20.5265 20.348 20.6076 20.1438 20.6076Z" fill="white"/>
                        <path id="path14" d="M25.6563 17.592C25.5688 17.592 25.4667 17.5758 25.3792 17.5433C25.0875 17.4298 24.9854 17.1541 25.1312 16.9432C26.6188 14.7698 28.5731 10.7636 24.8833 8.37933C20.9602 5.84909 22.3019 0.967035 22.3602 0.756182C22.4332 0.51289 22.7394 0.366915 23.0603 0.415573C23.3811 0.464231 23.5707 0.707523 23.5124 0.950815C23.4978 1.01569 22.2873 5.50848 25.6563 7.69811C29.9732 10.4879 27.8439 14.9644 26.1813 17.3811C26.0792 17.5109 25.875 17.592 25.6563 17.592Z" fill="white"/>
                        <path id="path15" d="M28.8796 17.1857C28.7921 17.1857 28.6901 17.1695 28.6025 17.1371C28.3109 17.0235 28.2088 16.7478 28.3546 16.537C29.8422 14.3635 31.7965 10.3573 28.1067 7.97308C24.1836 5.44284 25.5253 0.560785 25.5836 0.349932C25.6566 0.10664 25.9628 -0.0393354 26.2837 0.00932303C26.6045 0.0579814 26.7941 0.301273 26.7358 0.544565C26.7212 0.593224 25.4961 5.10223 28.8796 7.29186C33.1965 10.0816 31.0673 14.5582 29.4047 16.9749C29.3026 17.1046 29.0984 17.1857 28.8796 17.1857Z" fill="white"/>
                    </svg>

                    <p id="add-7" class="nav-menu-p add-7">Coffee</p>
                </div>
            </a>
            <a id="soft" class="mmm nav-menu-item" href="#desserts">
                <div id="" class="nav-menu-item">
                    
                    <svg class="nav-menu-img" width="34" height="56" viewBox="0 0 34 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <path id="path16" d="M31.7328 12.2767L31.3751 11.5138H19.5628L10.4011 11.4287C10.3895 11.4547 10.3866 11.4821 10.3838 11.5138C9.78384 11.5138 8.61141 16.4141 8.61141 16.4141L8.21194 18.9349C7.74759 22.8776 7.92641 27.9567 10.5857 32.322C15.0374 39.6479 11.288 50.5257 11.2519 50.6325L11.1726 50.8488V56H30.3988L30.3051 50.7695L30.1868 50.5156C30.1508 50.4334 26.407 42.0937 30.9555 32.5224C36.0605 21.7903 31.9101 12.6617 31.7328 12.2767ZM27.6703 51.3651L27.7035 53.3537H13.8203V51.2944C14.3885 49.5797 17.5784 38.9946 12.9478 31.1351C13.3761 31.7826 15.2292 33.7237 20.6747 30.2035C27.0618 26.0834 28.5659 31.3832 28.5659 31.3832C23.8819 41.2313 26.9839 49.7239 27.6703 51.3651Z" fill="white"/>
                       <path id="path17" d="M2.32238 7.59804C3.10689 3.90768 6.75254 1.54118 10.44 2.33001C14.1318 3.11596 16.4983 6.75584 15.7153 10.4476L17.8395 10.9034C18.8778 6.03623 15.7643 1.23401 10.8986 0.200014C6.03726 -0.839747 1.23647 2.27809 0.199598 7.14233C-0.838721 12.0066 2.27768 16.8059 7.13759 17.8399L7.59473 15.7128C3.90438 14.9326 1.53787 11.287 2.32238 7.59804Z" fill="white"/>
                       <path id="path18" d="M15.0562 10.4534L15.0908 10.2876C15.4384 8.66519 15.1283 7.00676 14.227 5.61224C13.3242 4.22349 11.9326 3.26593 10.3088 2.91838C9.72904 2.79725 9.13345 2.75254 8.5393 2.79725C5.81372 3.00635 3.50923 5.01954 2.94248 7.70042C2.22863 11.049 4.37449 14.3529 7.72163 15.0653L7.89324 15.1013L9.61368 10.0511L15.0562 10.4534ZM9.34544 9.64582L9.3166 9.72081C9.15364 9.80301 8.9604 9.82753 8.78014 9.78571C8.56526 9.741 8.38067 9.61698 8.26242 9.43095C8.13984 9.24492 8.09946 9.02283 8.14849 8.80507C8.21771 8.4532 8.52921 8.1792 8.88829 8.15468C8.96905 8.14891 9.04693 8.15468 9.1248 8.17199C9.57474 8.26717 9.85739 8.70701 9.76365 9.15262C9.71751 9.3574 9.60646 9.52901 9.4363 9.65015L9.34544 9.64582Z" fill="white"/>
                    </svg>


                    <p id="add-8" class="nav-menu-p add-8">Drinks</p>
                </div>
            </a>
            <a id="drinks" class="mmm nav-menu-item" href="#drinks">
                <div id="" class="nav-menu-item">
                    <svg class="nav-menu-img" width="42" height="57" viewBox="0 0 42 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="path6" d="M41.6132 17.2922C41.6132 6.60187 36.2285 0.001875 36.2276 0H5.49016C5.49016 0 0.105469 6.61125 0.105469 17.2922C0.105469 27.4434 8.83719 36.8728 19.8169 37.4381C19.6886 43.3331 19.1839 49.4719 17.7312 51.5981C15.685 54.5944 8.51362 53.055 8.51362 56.25H33.2079C33.2079 53.0541 26.0337 54.5944 23.9875 51.5981C22.5347 49.4719 22.0301 43.3341 21.9018 37.4381C32.8787 36.8737 41.6132 27.4434 41.6132 17.2922ZM20.8593 34.9256C11.6201 34.9256 4.0204 27.6309 3.03554 19.3088C2.96161 18.7049 2.92349 18.0973 2.92139 17.4891C2.92139 8.25469 7.57498 2.54156 7.57498 2.54156H34.1428C34.1437 2.54437 38.7143 8.15625 38.7907 17.2622C38.7916 17.3372 38.7973 17.4113 38.7973 17.4891C38.7973 26.5387 30.7665 34.9256 20.8593 34.9256Z" fill="white"/>
                    </svg>

                    <p id="add-4" class="nav-menu-p add-4">Wines</p>
                </div>
            </a>
          
           
        </div>
        <hr class="nav-menu-hr">




        <!-- CONTENT MENU -->  <!-- How to query posts based on taxonomy https://support.advancedcustomfields.com/forums/topic/taxonomy-field-in-post-query/ -->
        
      <div id="food-starters" class="content-menu-wrapper prectivated-starters">
       <?php

         $args = array(
             'post_type' => 'post',
             'post_status' => 'publish',
             'cat' => '8',
             'posts_per_page' => 100,
         );
         $arr_posts = new WP_Query( $args );
           
         if ( $arr_posts->have_posts() ) :
             while ( $arr_posts->have_posts() ) :
                 $arr_posts->the_post();
                 ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                                ?>
                        <div class="menu-item">
                                 <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
                             <div class="dish-text">
                                      <p class="dish-name"><?php the_title(); ?></p>
                                <div class="dish-price-wrap">
                                      <p class="dots">.........................................................</p>
                                      <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                                </div>
                            </div>
                        </div>  
                    </article>
                                  <?php
                              endwhile;
                          endif;?>
        </div> <!-- CLOSING STARTERS -->



<!-- MAIN COURSE-->

<div id="food-main-course" style="display: none;" class="content-menu-wrapper content-menu-wrapper-adj">
<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '6',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :

while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
        
           <div class="menu-item menu-item-adj">
               <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none; height: 14em;"  alt="<?php echo $title;?>" class="dish-img dish-img-adj"> </div>
                   
               <div class="dish-text dish-text-adj">
                         <p style="margin-top: 0; font-size: 20px;" class="dish-name dish-name-adj"><?php the_title(); ?></p>
                         <p class="dish-desc"><?php echo get_field("description"); ?></p>
                    <div class="dish-price-wrap">
                         
                    </div>
                        <div class="accessories-main">
                              <?php
                              $field = get_field_object('accessories');
                              ?>
                              <p class="dish-name dish-name-adj-access"><?php echo $field['label']; ?>   </p>
                              <p style="margin-top: -15px; font-size: 16px;" class="dish-name"><?php echo $field['value']; ?></p>
                        </div>

                        <div class="approx-prices-main">
                              <?php
                              $aprox_1 = get_field_object('aprox1');
                              ?>
                              <p class="dish-name" style="font-size: 16px;">
                              <?php if( $aprox_1['value'] ): ?>    
                              <?php echo $aprox_1['label']; ?>  <?php echo $aprox_1['value']; ?></p>
                              <?php endif; ?>

                              <?php
                              $aprox_2 = get_field_object('aprox2');
                              ?>
                              <p class="dish-name" style="font-size: 16px;">
                              <?php if( $aprox_2['value'] ): ?>    
                              <?php echo $aprox_2['label']; ?>  <?php echo $aprox_2['value']; ?></p>
                              <?php endif; ?>

                              <?php
                              $aprox_3 = get_field_object('aprox3');
                              ?>
                              <p class="dish-name" style="font-size: 16px;">
                              <?php if( $aprox_3['value'] ): ?>    
                              <?php echo $aprox_3['label']; ?>  <?php echo $aprox_3['value']; ?></p>
                              <?php endif; ?>

                              <?php
                              $aprox_4 = get_field_object('aprox4');
                              ?>
                              <p class="dish-name" style="font-size: 16px;">
                              <?php if( $aprox_4['value'] ): ?>    
                              <?php echo $aprox_4['label']; ?>  <?php echo $aprox_4['value']; ?></p>
                              <?php endif; ?>
                        </div>

                       

               </div>
           </div> 
       </article>
                     <?php
                 endwhile;
             endif;?>
</div> <!-- CLOSING MAIN COURSE -->


<!-- DESSERTS-->
<div id="food-desserts" style="display: none;" class="content-menu-wrapper">                    
<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '4',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
           <div class="menu-item">
                  <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
                <div class="dish-text">
                         <p class="dish-name"><?php the_title(); ?></p>
                   <div class="dish-price-wrap">
                         <p class="dots">.........................................................</p>
                         <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                   </div>
                </div>
            </div>
       </article>
                     <?php
                 endwhile;
             endif;?>
             

</div> <!-- CLOSING DESSERTS -->

<!-- DRINKS-->
<div class="wines" id="food-drinks" style="display: none;">
<!-- DRINKS ---- WHITE WINE-->
<div class="price-wines-wrap">
 <div class="price-wine">
     <h2 class="total-price">White Wine</h2>
        <hr class="nav-menu-hr hr-wine-adj">
 </div>
</div>


<div id="" style="margin-top: 1em;" class="content-menu-wrapper">
<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '13',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
           <div class="menu-item">
               <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img wine-img"> </div>
                   
                <div class="dish-text dish-text-wine">
                         <p class="dish-name"><?php the_title(); ?></p>
                   <div class="dish-price-wrap">
                         <p class="dots">.........................................................</p>
                         <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                         
                   </div>
                         <p class="dish-desc"><?php echo get_field("description"); ?></p>
                </div>
            </div>
       </article>
                     <?php
                 endwhile;
             endif;?>

    </div> <!-- CLOSING DRINKS WHITE WINE -->


    <!-- RED WINE -->
<div class="price-wines-wrap">
 <div class="price-wine">
     <h2 class="total-price">Red Wine</h2>
        <hr class="nav-menu-hr hr-wine-adj">
 </div>
</div>

<div id="" style="margin-top: 2em;" class="content-menu-wrapper">

<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '11',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
           <div class="menu-item">
               <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img wine-img"> </div>
                   
                <div class="dish-text dish-text-wine">
                         <p class="dish-name"><?php the_title(); ?></p>
                   <div class="dish-price-wrap">
                         <p class="dots">.........................................................</p>
                         <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                         
                   </div>
                         <p class="dish-desc"><?php echo get_field("description"); ?></p>
                </div>
            </div>
       </article>
                     <?php
                 endwhile;
             endif;?>

    </div> <!-- CLOSING RED WINE -->


       <!-- ROSE WINE -->

<div class="price-wines-wrap">
 <div class="price-wine">
     <h2 class="total-price">Rosé Wine</h2>
        <hr class="nav-menu-hr hr-wine-adj">
 </div>
</div>

<div id="" style="margin-top: 2em;" class="content-menu-wrapper">

<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '12',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
           <div class="menu-item">
               <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img wine-img"> </div>
                   
                <div class="dish-text dish-text-wine">
                         <p class="dish-name"><?php the_title(); ?></p>
                   <div class="dish-price-wrap">
                         <p class="dots">.........................................................</p>
                         <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                         
                   </div>
                         <p class="dish-desc"><?php echo get_field("description"); ?></p>
                </div>
            </div>
       </article>
                     <?php
                 endwhile;
             endif;?>

    </div> <!-- CLOSING ROSE WINE -->

</div><!-- CLOSING ALLLLL DRINKS -->

<!-- CHILDREN -->
        <div id="food-children" style="display: none;" class="content-menu-wrapper">
    <?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '2',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
    ?>
       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                   <?php
                   if ( has_post_thumbnail() ) :
                       the_post_thumbnail();
                   endif;
                   ?>
           <div class="menu-item">
                   <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
                <div class="dish-text">
                         <p class="dish-name"><?php the_title(); ?></p>
                   <div class="dish-price-wrap">
                         <p class="dots">.........................................................</p>
                         <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                   </div>
                </div>
            </div>
       </article>
                     <?php
                 endwhile;
             endif;?>

    </div><!-- CLOSING CHILDREN -->




<!--  LUXURY -->
<div id="food-luxury" style="display: none;">  

<div class="price-wines-wrap">
 <div class="price-wine price-lux-adj">
     <h2 class="total-price">Total Price: 398/kr</h2>
        <hr class="nav-menu-hr hr-wine-adj ">
 </div>
</div>

<div id="" style="margin-top: 1em;" class="content-menu-wrapper">
<?php

$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'cat' => '5',
'posts_per_page' => 100,
);
$arr_posts = new WP_Query( $args );

if ( $arr_posts->have_posts() ) :
while ( $arr_posts->have_posts() ) :
$arr_posts->the_post();
?>
   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <?php
               if ( has_post_thumbnail() ) :
                   the_post_thumbnail();
               endif;
               ?>
               
       <div class="menu-item">
              <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
            <div class="dish-text">
                     <p class="dish-name"><?php the_title(); ?></p>
               <div class="dish-price-wrap">
                     <p class="dish-desc"><?php echo get_field("description"); ?></p>
               </div>
            </div>
        </div>
   </article>
                 <?php
             endwhile;
         endif;?>

              <!-- <div class="" style="width:90%; display:block; margin-left: -2%; margin-top:3em;">
                 <h2 class="total-price">Total Price: 398 kr.</h2>
                 <hr class="nav-menu-hr">
               </div> -->
</div> 

</div><!-- CLOSING LUXURY -->


<!-- COFFEE -->
<div id="food-coffee" style="display: none;" class="content-menu-wrapper">
       <?php

         $args = array(
             'post_type' => 'post',
             'post_status' => 'publish',
             'cat' => '3',
             'posts_per_page' => 100,
         );
         $arr_posts = new WP_Query( $args );
           
         if ( $arr_posts->have_posts() ) :
             while ( $arr_posts->have_posts() ) :
                 $arr_posts->the_post();
                 ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                                ?>
                        <div class="menu-item">
                                 <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
                             <div class="dish-text">
                                      <p class="dish-name"><?php the_title(); ?></p>
                                <div class="dish-price-wrap">
                                      <p class="dots">.........................................................</p>
                                      <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                                </div>
                            </div>
                        </div>  
                    </article>
                                  <?php
                              endwhile;
                          endif;?>
        </div> <!-- CLOSING COFFEE -->



        <!-- SOFT DRINKS + BEER -->
<div id="food-soft" style="display: none;" class="content-menu-wrapper">
       <?php

         $args = array(
             'post_type' => 'post',
             'post_status' => 'publish',
             'cat' => '16',
             'posts_per_page' => 100,
         );
         $arr_posts = new WP_Query( $args );
           
         if ( $arr_posts->have_posts() ) :
             while ( $arr_posts->have_posts() ) :
                 $arr_posts->the_post();
                 ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php
                                if ( has_post_thumbnail() ) :
                                    the_post_thumbnail();
                                endif;
                                ?>
                        <div class="menu-item">
                                 <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="dish-img"> </div>
                             <div class="dish-text">
                                      <p class="dish-name"><?php the_title(); ?></p>
                                <div class="dish-price-wrap">
                                      <p class="dots">.........................................................</p>
                                      <p class="dish-price"><?php echo get_field( "price" );?>.kr</p>
                                </div>
                            </div>
                        </div>  
                    </article>
                                  <?php
                              endwhile;
                          endif;?>
        </div> <!-- CLOSING SOFT DRINKS -->

</div>  <!-------------------- CLOSING MAIN WRAPPER MENU     ------------------>



</div>




    <!-- MONTHLY MENU -->
    <div id="monthly-menu-wrapper" class="monthly-menu-wrapper">
        <h1 class="menu-h1">Monthly Menu</h1>

        <!-- CONTENT MONTHLY MENU  -->
        <h2 class="total-price">Total Price: <?php echo get_field('monthly_menu_price', 335); ?> /kr</h2>
        <hr class="nav-menu-hr">

        <div class="content-menu-wrapper add-wrapper-mm">
        <?php

              $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'cat' => '7',
              'posts_per_page' => 100,
              );
              $arr_posts = new WP_Query( $args );
              
              if ( $arr_posts->have_posts() ) :
              while ( $arr_posts->have_posts() ) :
              $arr_posts->the_post();
              ?>
                 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                             <?php
                             if ( has_post_thumbnail() ) :
                                 the_post_thumbnail();
                             endif;
                             ?>
                      <div class="monthly-menu-item">
                          <div style="background-image: url(<?php echo get_field('image');?>);  background-position: center;
    background-size: cover; background-repeat: no-repeat; border-style: none;"  alt="<?php echo $title;?>" class="monthly-dish-img"> </div>
                              
                              <div class="title-price-wrap">
                                  <h2 class="dish-category"><?php the_title(); ?></h2>
                                  
                              </div>
                              <p class="dish-desc"><?php echo get_field("description"); ?></p>
                             
                          </div>
                 </article>
                               <?php
                           endwhile;
                       endif;?>
              
              
              
                      </div>

    </div> <!-- CLOSING MONTHLY MENU -->

    <!-- RESERVE BTN -->

    <div class="res" id="reserve" onclick="clicks()">
    <button style="border:none;  height: 2.4em;" class="all-buttons reserve-btn">Reservation<i class="far fa-calendar-alt i-reserve"></i></button>
    </div>





    <?php get_footer();?>