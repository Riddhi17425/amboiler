@include('layouts.frontheader')

<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/contact_bg.png" alt="contact" class="img-fluid"> -->
        <div class="contact_banner_ctnt" style="background-image:url('{{ asset('public/front/images/contact_bg.png') }}');" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>Contact us</span>
            </div>
            <h1 class="main_white_head col-md-6 col-xl-6 col-xxl-6">Let’s Elevate Your  Industrial Efficiency</h1>
        </div>
    </div>
</section>

<section class="contact mt-80">
    <div class="ym_container">
        <div class="row g-0 g-md-5">
            <div class="col-lg-6  col-md-6  mb-4 pe-lg-5">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="ct_box">
                            <h3 class="ct_head">Corporate Head Office</h3>
                            <ul class="ct_link">
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="https://www.google.com/maps?q=Al+Quoz+Industrial+Area+4,+Dubai,+UAE">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </div>
                                        Al Quoz Industrial Area#4, PO BOX 181440, Dubai, UAE
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="tel:+971529037472">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57495 1.78507C4.86403 0.500097 7.0254 0.859428 7.938 2.37559L7.9444 2.38614L10.0481 5.98116C10.6675 7.06187 10.5113 8.45113 9.58707 9.3724L9.23813 9.7202C10.4735 11.6579 12.3503 13.575 14.2473 14.7248L14.5941 14.4175C15.5184 13.5164 16.898 13.3683 17.9731 13.9807L17.9809 13.9851L21.5408 16.0553C22.4222 16.4771 22.8861 17.2924 22.9811 18.1063C23.0759 18.9196 22.8156 19.8023 22.1826 20.4332L20.9831 21.629C19.7376 22.8705 17.7101 23.4199 15.9799 22.636C13.7025 21.7053 10.2867 19.9491 7.17367 16.8459C4.05248 13.7347 2.29312 10.2235 1.36877 8.07567C0.580207 6.3562 1.1236 4.34015 2.36039 3.0955L3.54727 1.8138C3.55631 1.80404 3.56553 1.79446 3.57495 1.78507ZM4.99956 3.18371L3.81678 4.46098C3.80775 4.47074 3.79851 4.48031 3.78909 4.48971C3.04036 5.23605 2.79125 6.39219 3.19015 7.25373C3.194 7.26207 3.19773 7.2704 3.20134 7.2788C4.07772 9.3172 5.71644 12.5749 8.5874 15.4367C11.4635 18.3037 14.635 19.9343 16.7561 20.7993C16.7697 20.8048 16.7831 20.8107 16.7965 20.8168C17.6608 21.2145 18.8206 20.9661 19.5693 20.2198L20.7689 19.024C20.9356 18.8578 21.0252 18.5945 20.9951 18.3365C20.9669 18.0949 20.8471 17.9295 20.6623 17.8457C20.6315 17.8317 20.6014 17.8162 20.5722 17.7993L16.9781 15.7093C16.6631 15.5317 16.2593 15.5759 15.9848 15.8495C15.9709 15.8633 15.9567 15.8767 15.9421 15.8896L15.0424 16.6868C14.7325 16.9613 14.2849 17.0168 13.9171 16.8261C11.2199 15.4281 8.5882 12.6858 7.10834 10.0515C6.8896 9.6622 6.95713 9.17547 7.27367 8.86L8.17334 7.9632C8.4478 7.6896 8.49207 7.287 8.31393 6.97307L6.22104 3.39667C5.93617 2.92942 5.31277 2.88679 4.99956 3.18371Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2554 7.7446C15.754 7.2432 14.9795 7.06347 14.4319 7.246C13.862 7.43593 13.2461 7.12793 13.0561 6.55811C12.8661 5.98827 13.1741 5.37233 13.744 5.18237C15.1541 4.71235 16.7723 5.18519 17.7935 6.20645C18.8148 7.22773 19.2877 8.84593 18.8176 10.256C18.6277 10.8259 18.0117 11.1339 17.4419 10.9439C16.872 10.7539 16.5641 10.138 16.754 9.56813C16.9365 9.02047 16.7568 8.246 16.2554 7.7446Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9493 5.05067C17.1752 3.27653 14.5963 2.65215 12.2855 3.27429C11.7415 3.42074 11.1818 3.09848 11.0353 2.5545C10.8889 2.01052 11.2111 1.45081 11.7551 1.30435C14.7485 0.498424 18.0859 1.3021 20.3919 3.60812C22.6979 5.91414 23.5016 9.25147 22.6957 12.2449C22.5492 12.7889 21.9895 13.1111 21.4455 12.9647C20.9015 12.8182 20.5793 12.2585 20.7257 11.7145C21.3479 9.40374 20.7235 6.8248 18.9493 5.05067Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        +971529037472 
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="mailto:sales@almufaddal.ae">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.61728 5C4.24604 5 3 6.22761 3 7.9724V16.0276C3 17.7724 4.24604 19 5.61728 19H18.4787C19.8543 19 21.0741 17.7763 20.9966 16.0731C20.9959 16.0579 20.9955 16.0427 20.9955 16.0276V7.9724C20.9955 6.22761 19.7495 5 18.3783 5H5.61728ZM1 7.9724C1 5.30343 2.96932 3 5.61728 3H18.3783C21.0262 3 22.9955 5.30343 22.9955 7.9724V16.0061C23.1061 18.7062 21.1146 21 18.4787 21H5.61728C2.96932 21 1 18.6966 1 16.0276V7.9724Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13017 7.50712C5.40247 7.02665 6.01273 6.85785 6.49322 7.13019L11.172 9.78172C11.7137 10.073 12.2867 10.073 12.8283 9.78172L17.5071 7.13019C17.9876 6.85785 18.5979 7.02665 18.8702 7.50712C19.1425 7.98759 18.9737 8.59785 18.4932 8.87019L13.8057 11.5267L13.7897 11.5355C12.6485 12.1551 11.3519 12.1551 10.2106 11.5355L10.1946 11.5267L5.50713 8.87019C5.02664 8.59785 4.85787 7.98759 5.13017 7.50712Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        sales@almufaddal.ae
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="ct_box">
                            <h3 class="ct_head">Fujairah</h3>
                            <ul class="ct_link">
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="https://www.google.com/maps?q=PO+BOX+Fujairah,+Dubai,+UAE">
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </div>
                                        PO BOX 50104 Fujairah, Dubai, UAE
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="tel:+97143244151">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57495 1.78507C4.86403 0.500097 7.0254 0.859428 7.938 2.37559L7.9444 2.38614L10.0481 5.98116C10.6675 7.06187 10.5113 8.45113 9.58707 9.3724L9.23813 9.7202C10.4735 11.6579 12.3503 13.575 14.2473 14.7248L14.5941 14.4175C15.5184 13.5164 16.898 13.3683 17.9731 13.9807L17.9809 13.9851L21.5408 16.0553C22.4222 16.4771 22.8861 17.2924 22.9811 18.1063C23.0759 18.9196 22.8156 19.8023 22.1826 20.4332L20.9831 21.629C19.7376 22.8705 17.7101 23.4199 15.9799 22.636C13.7025 21.7053 10.2867 19.9491 7.17367 16.8459C4.05248 13.7347 2.29312 10.2235 1.36877 8.07567C0.580207 6.3562 1.1236 4.34015 2.36039 3.0955L3.54727 1.8138C3.55631 1.80404 3.56553 1.79446 3.57495 1.78507ZM4.99956 3.18371L3.81678 4.46098C3.80775 4.47074 3.79851 4.48031 3.78909 4.48971C3.04036 5.23605 2.79125 6.39219 3.19015 7.25373C3.194 7.26207 3.19773 7.2704 3.20134 7.2788C4.07772 9.3172 5.71644 12.5749 8.5874 15.4367C11.4635 18.3037 14.635 19.9343 16.7561 20.7993C16.7697 20.8048 16.7831 20.8107 16.7965 20.8168C17.6608 21.2145 18.8206 20.9661 19.5693 20.2198L20.7689 19.024C20.9356 18.8578 21.0252 18.5945 20.9951 18.3365C20.9669 18.0949 20.8471 17.9295 20.6623 17.8457C20.6315 17.8317 20.6014 17.8162 20.5722 17.7993L16.9781 15.7093C16.6631 15.5317 16.2593 15.5759 15.9848 15.8495C15.9709 15.8633 15.9567 15.8767 15.9421 15.8896L15.0424 16.6868C14.7325 16.9613 14.2849 17.0168 13.9171 16.8261C11.2199 15.4281 8.5882 12.6858 7.10834 10.0515C6.8896 9.6622 6.95713 9.17547 7.27367 8.86L8.17334 7.9632C8.4478 7.6896 8.49207 7.287 8.31393 6.97307L6.22104 3.39667C5.93617 2.92942 5.31277 2.88679 4.99956 3.18371Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2554 7.7446C15.754 7.2432 14.9795 7.06347 14.4319 7.246C13.862 7.43593 13.2461 7.12793 13.0561 6.55811C12.8661 5.98827 13.1741 5.37233 13.744 5.18237C15.1541 4.71235 16.7723 5.18519 17.7935 6.20645C18.8148 7.22773 19.2877 8.84593 18.8176 10.256C18.6277 10.8259 18.0117 11.1339 17.4419 10.9439C16.872 10.7539 16.5641 10.138 16.754 9.56813C16.9365 9.02047 16.7568 8.246 16.2554 7.7446Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9493 5.05067C17.1752 3.27653 14.5963 2.65215 12.2855 3.27429C11.7415 3.42074 11.1818 3.09848 11.0353 2.5545C10.8889 2.01052 11.2111 1.45081 11.7551 1.30435C14.7485 0.498424 18.0859 1.3021 20.3919 3.60812C22.6979 5.91414 23.5016 9.25147 22.6957 12.2449C22.5492 12.7889 21.9895 13.1111 21.4455 12.9647C20.9015 12.8182 20.5793 12.2585 20.7257 11.7145C21.3479 9.40374 20.7235 6.8248 18.9493 5.05067Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        +97143244151
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="mailto:sales@almufaddal.ae">
                                         <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.61728 5C4.24604 5 3 6.22761 3 7.9724V16.0276C3 17.7724 4.24604 19 5.61728 19H18.4787C19.8543 19 21.0741 17.7763 20.9966 16.0731C20.9959 16.0579 20.9955 16.0427 20.9955 16.0276V7.9724C20.9955 6.22761 19.7495 5 18.3783 5H5.61728ZM1 7.9724C1 5.30343 2.96932 3 5.61728 3H18.3783C21.0262 3 22.9955 5.30343 22.9955 7.9724V16.0061C23.1061 18.7062 21.1146 21 18.4787 21H5.61728C2.96932 21 1 18.6966 1 16.0276V7.9724Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13017 7.50712C5.40247 7.02665 6.01273 6.85785 6.49322 7.13019L11.172 9.78172C11.7137 10.073 12.2867 10.073 12.8283 9.78172L17.5071 7.13019C17.9876 6.85785 18.5979 7.02665 18.8702 7.50712C19.1425 7.98759 18.9737 8.59785 18.4932 8.87019L13.8057 11.5267L13.7897 11.5355C12.6485 12.1551 11.3519 12.1551 10.2106 11.5355L10.1946 11.5267L5.50713 8.87019C5.02664 8.59785 4.85787 7.98759 5.13017 7.50712Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        sales@almufaddal.ae
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="ct_box">
                            <h3 class="ct_head">Al Jadaf Drydocks Center</h3>
                            <ul class="ct_link">
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="https://www.google.com/maps?q=AMG+Workshop+Shed+no.+1,+Al+Jadaf+Dry-docks+Center,+P.O.+Box:+181440,+Al+Jadaf,+Dubai,+UAE">
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </div>
                                        AMG Workshop Shed no. 1, Al Jadaf Dry-docks Center,<br> P.O. Box: 181440, Al Jadaf, Dubai, UAE
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="tel:+97143540601">
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57495 1.78507C4.86403 0.500097 7.0254 0.859428 7.938 2.37559L7.9444 2.38614L10.0481 5.98116C10.6675 7.06187 10.5113 8.45113 9.58707 9.3724L9.23813 9.7202C10.4735 11.6579 12.3503 13.575 14.2473 14.7248L14.5941 14.4175C15.5184 13.5164 16.898 13.3683 17.9731 13.9807L17.9809 13.9851L21.5408 16.0553C22.4222 16.4771 22.8861 17.2924 22.9811 18.1063C23.0759 18.9196 22.8156 19.8023 22.1826 20.4332L20.9831 21.629C19.7376 22.8705 17.7101 23.4199 15.9799 22.636C13.7025 21.7053 10.2867 19.9491 7.17367 16.8459C4.05248 13.7347 2.29312 10.2235 1.36877 8.07567C0.580207 6.3562 1.1236 4.34015 2.36039 3.0955L3.54727 1.8138C3.55631 1.80404 3.56553 1.79446 3.57495 1.78507ZM4.99956 3.18371L3.81678 4.46098C3.80775 4.47074 3.79851 4.48031 3.78909 4.48971C3.04036 5.23605 2.79125 6.39219 3.19015 7.25373C3.194 7.26207 3.19773 7.2704 3.20134 7.2788C4.07772 9.3172 5.71644 12.5749 8.5874 15.4367C11.4635 18.3037 14.635 19.9343 16.7561 20.7993C16.7697 20.8048 16.7831 20.8107 16.7965 20.8168C17.6608 21.2145 18.8206 20.9661 19.5693 20.2198L20.7689 19.024C20.9356 18.8578 21.0252 18.5945 20.9951 18.3365C20.9669 18.0949 20.8471 17.9295 20.6623 17.8457C20.6315 17.8317 20.6014 17.8162 20.5722 17.7993L16.9781 15.7093C16.6631 15.5317 16.2593 15.5759 15.9848 15.8495C15.9709 15.8633 15.9567 15.8767 15.9421 15.8896L15.0424 16.6868C14.7325 16.9613 14.2849 17.0168 13.9171 16.8261C11.2199 15.4281 8.5882 12.6858 7.10834 10.0515C6.8896 9.6622 6.95713 9.17547 7.27367 8.86L8.17334 7.9632C8.4478 7.6896 8.49207 7.287 8.31393 6.97307L6.22104 3.39667C5.93617 2.92942 5.31277 2.88679 4.99956 3.18371Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2554 7.7446C15.754 7.2432 14.9795 7.06347 14.4319 7.246C13.862 7.43593 13.2461 7.12793 13.0561 6.55811C12.8661 5.98827 13.1741 5.37233 13.744 5.18237C15.1541 4.71235 16.7723 5.18519 17.7935 6.20645C18.8148 7.22773 19.2877 8.84593 18.8176 10.256C18.6277 10.8259 18.0117 11.1339 17.4419 10.9439C16.872 10.7539 16.5641 10.138 16.754 9.56813C16.9365 9.02047 16.7568 8.246 16.2554 7.7446Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9493 5.05067C17.1752 3.27653 14.5963 2.65215 12.2855 3.27429C11.7415 3.42074 11.1818 3.09848 11.0353 2.5545C10.8889 2.01052 11.2111 1.45081 11.7551 1.30435C14.7485 0.498424 18.0859 1.3021 20.3919 3.60812C22.6979 5.91414 23.5016 9.25147 22.6957 12.2449C22.5492 12.7889 21.9895 13.1111 21.4455 12.9647C20.9015 12.8182 20.5793 12.2585 20.7257 11.7145C21.3479 9.40374 20.7235 6.8248 18.9493 5.05067Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        +97143540601
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="mailto:sales@almufaddal.ae">
                                        <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.61728 5C4.24604 5 3 6.22761 3 7.9724V16.0276C3 17.7724 4.24604 19 5.61728 19H18.4787C19.8543 19 21.0741 17.7763 20.9966 16.0731C20.9959 16.0579 20.9955 16.0427 20.9955 16.0276V7.9724C20.9955 6.22761 19.7495 5 18.3783 5H5.61728ZM1 7.9724C1 5.30343 2.96932 3 5.61728 3H18.3783C21.0262 3 22.9955 5.30343 22.9955 7.9724V16.0061C23.1061 18.7062 21.1146 21 18.4787 21H5.61728C2.96932 21 1 18.6966 1 16.0276V7.9724Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13017 7.50712C5.40247 7.02665 6.01273 6.85785 6.49322 7.13019L11.172 9.78172C11.7137 10.073 12.2867 10.073 12.8283 9.78172L17.5071 7.13019C17.9876 6.85785 18.5979 7.02665 18.8702 7.50712C19.1425 7.98759 18.9737 8.59785 18.4932 8.87019L13.8057 11.5267L13.7897 11.5355C12.6485 12.1551 11.3519 12.1551 10.2106 11.5355L10.1946 11.5267L5.50713 8.87019C5.02664 8.59785 4.85787 7.98759 5.13017 7.50712Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        sales@almufaddal.ae
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="ct_box">
                            <h3 class="ct_head">Bahrain</h3>
                            <ul class="ct_link">
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="https://www.google.com/maps?q=Arab+Shipbuilding+and+Repair+Yard+ASRY,+Hidd,+Bahrain">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#444444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        </div>
                                        C/O Arab Ship Building & Repair Yard (ASRY) PO BOX 50846,<br> HIDD, Kingdom of Bahrain
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="tel:+97317465263">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.57495 1.78507C4.86403 0.500097 7.0254 0.859428 7.938 2.37559L7.9444 2.38614L10.0481 5.98116C10.6675 7.06187 10.5113 8.45113 9.58707 9.3724L9.23813 9.7202C10.4735 11.6579 12.3503 13.575 14.2473 14.7248L14.5941 14.4175C15.5184 13.5164 16.898 13.3683 17.9731 13.9807L17.9809 13.9851L21.5408 16.0553C22.4222 16.4771 22.8861 17.2924 22.9811 18.1063C23.0759 18.9196 22.8156 19.8023 22.1826 20.4332L20.9831 21.629C19.7376 22.8705 17.7101 23.4199 15.9799 22.636C13.7025 21.7053 10.2867 19.9491 7.17367 16.8459C4.05248 13.7347 2.29312 10.2235 1.36877 8.07567C0.580207 6.3562 1.1236 4.34015 2.36039 3.0955L3.54727 1.8138C3.55631 1.80404 3.56553 1.79446 3.57495 1.78507ZM4.99956 3.18371L3.81678 4.46098C3.80775 4.47074 3.79851 4.48031 3.78909 4.48971C3.04036 5.23605 2.79125 6.39219 3.19015 7.25373C3.194 7.26207 3.19773 7.2704 3.20134 7.2788C4.07772 9.3172 5.71644 12.5749 8.5874 15.4367C11.4635 18.3037 14.635 19.9343 16.7561 20.7993C16.7697 20.8048 16.7831 20.8107 16.7965 20.8168C17.6608 21.2145 18.8206 20.9661 19.5693 20.2198L20.7689 19.024C20.9356 18.8578 21.0252 18.5945 20.9951 18.3365C20.9669 18.0949 20.8471 17.9295 20.6623 17.8457C20.6315 17.8317 20.6014 17.8162 20.5722 17.7993L16.9781 15.7093C16.6631 15.5317 16.2593 15.5759 15.9848 15.8495C15.9709 15.8633 15.9567 15.8767 15.9421 15.8896L15.0424 16.6868C14.7325 16.9613 14.2849 17.0168 13.9171 16.8261C11.2199 15.4281 8.5882 12.6858 7.10834 10.0515C6.8896 9.6622 6.95713 9.17547 7.27367 8.86L8.17334 7.9632C8.4478 7.6896 8.49207 7.287 8.31393 6.97307L6.22104 3.39667C5.93617 2.92942 5.31277 2.88679 4.99956 3.18371Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2554 7.7446C15.754 7.2432 14.9795 7.06347 14.4319 7.246C13.862 7.43593 13.2461 7.12793 13.0561 6.55811C12.8661 5.98827 13.1741 5.37233 13.744 5.18237C15.1541 4.71235 16.7723 5.18519 17.7935 6.20645C18.8148 7.22773 19.2877 8.84593 18.8176 10.256C18.6277 10.8259 18.0117 11.1339 17.4419 10.9439C16.872 10.7539 16.5641 10.138 16.754 9.56813C16.9365 9.02047 16.7568 8.246 16.2554 7.7446Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9493 5.05067C17.1752 3.27653 14.5963 2.65215 12.2855 3.27429C11.7415 3.42074 11.1818 3.09848 11.0353 2.5545C10.8889 2.01052 11.2111 1.45081 11.7551 1.30435C14.7485 0.498424 18.0859 1.3021 20.3919 3.60812C22.6979 5.91414 23.5016 9.25147 22.6957 12.2449C22.5492 12.7889 21.9895 13.1111 21.4455 12.9647C20.9015 12.8182 20.5793 12.2585 20.7257 11.7145C21.3479 9.40374 20.7235 6.8248 18.9493 5.05067Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        +97317465263
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a class="d-flex gap-2" href="mailto:sales@almufaddal.ae">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.61728 5C4.24604 5 3 6.22761 3 7.9724V16.0276C3 17.7724 4.24604 19 5.61728 19H18.4787C19.8543 19 21.0741 17.7763 20.9966 16.0731C20.9959 16.0579 20.9955 16.0427 20.9955 16.0276V7.9724C20.9955 6.22761 19.7495 5 18.3783 5H5.61728ZM1 7.9724C1 5.30343 2.96932 3 5.61728 3H18.3783C21.0262 3 22.9955 5.30343 22.9955 7.9724V16.0061C23.1061 18.7062 21.1146 21 18.4787 21H5.61728C2.96932 21 1 18.6966 1 16.0276V7.9724Z" fill="#444444" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.13017 7.50712C5.40247 7.02665 6.01273 6.85785 6.49322 7.13019L11.172 9.78172C11.7137 10.073 12.2867 10.073 12.8283 9.78172L17.5071 7.13019C17.9876 6.85785 18.5979 7.02665 18.8702 7.50712C19.1425 7.98759 18.9737 8.59785 18.4932 8.87019L13.8057 11.5267L13.7897 11.5355C12.6485 12.1551 11.3519 12.1551 10.2106 11.5355L10.1946 11.5267L5.50713 8.87019C5.02664 8.59785 4.85787 7.98759 5.13017 7.50712Z" fill="#444444" />
                                        </svg>
                                        </div>
                                        sales@almufaddal.ae
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-12 mb-4">
                        <div class="ct_box">
                            <h3 class="ct_head">Office Hours:</h3>
                            <p>
                                  Our regular office hours are from <b>8:00 AM to 5:00 PM</b>, Monday to Saturday.     
                            </p>
                            <h3 class="ct_head">We're Available 24×7:</h3>
                             <p>
                                 While our office operates during standard hours, our team is <b>available 24×7</b> to support urgent service requirements — ensuring uninterrupted assistance whenever you need us.    
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="map_wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28900.488175664028!2d55.18912791083984!3d25.116717000000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6be1f07355df%3A0xd196b9a8d36e7e31!2sAl%20Mufaddal%20Group%20(AMG)!5e0!3m2!1sen!2sin!4v1740993407811!5m2!1sen!2sin" width="100%" height="350" style="line-height:0;border:0;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=25.116717,55.189127" class="main_btn">Get Directions 
                                <span class="btn_svg">
                                    <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-md-6  bd_left ps-lg-5">
                <div class="form_wrapper">
                    <div class="form">
                        <form id="contactform" method="post" action="{{ route('contact.submit') }}">
                               <div class="row mb-3">
                            <h2 class="contact_main_head">We’re Just a Message Away</h2>
                            <p >
                                Have a question, need assistance, or want to explore how we can collaborate? Our team is just a message away. Whether it's within office hours or beyond, we’re here for you — available 24×7 to ensure your business never stops. Reach out via phone, email, or the contact form below. We’ll respond promptly.
                            </p>
                        </div>
                        <div style="position:absolute; left:-9999px; opacity:0; height:0; overflow:hidden;">
                            <input type="text" name="website" value="" tabindex="-1" autocomplete="new-password" aria-hidden="true" >
                        </div>
                        @error('pot')
                            <label class="error">{{ $message }}</label>
                        @enderror
                        <!--@if(session('error'))-->
                        <!--    <div class="alert alert-danger">-->
                        <!--        {{ session('error') }}-->
                        <!--    </div>-->
                        <!--@endif-->

                            @csrf
                            <div class="row">
                                <div class="col-lg-6 form_item">
                                    <label for="firstName">First name *:</label><br>
                                    <input type="text" id="firstName" name="firstname" maxlength="50"
                                        value="{{ old('firstname') }}"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                        placeholder="First name">
                                    @error('firstname')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-6 form_item">
                                    <label for="lastName">Last name *:</label><br>
                                    <input type="text" id="lastName" name="lastname" maxlength="50"
                                        value="{{ old('lastname') }}"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"
                                        placeholder="Last name">
                                    @error('lastname')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-12 form_item">
                                    <label for="email">Email *:</label><br>
                                    <input type="email" id="email" name="email" maxlength="60"
                                        value="{{ old('email') }}"
                                        placeholder="Your Email ID">
                                    @error('email')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-12 form_item">
                                    <label for="phone">Phone number *:</label><br>
                                    <input type="tel" id="phone" name="phone" maxlength="15" minlength="10"
                                        value="{{ old('phone') }}"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);"
                                        placeholder="Your Contact No."
                                        pattern="\d{10,15}"
                                        title="Phone number must be between 10 to 15 digits">
                                    @error('phone')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-12 form_item">
                                    <label for="subject">Subject *:</label><br>
                                    <input type="text" id="subject" name="subject" maxlength="50"
                                        value="{{ old('subject') }}"
                                        placeholder="Subject">
                                    @error('subject')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-12 form_item">
                                    <label for="message">Message :</label><br>
                                    <textarea id="message" name="message" maxlength="100"
                                        placeholder="Message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <label class="error">{{ $message }}</label>
                                    @enderror
                                </div>
                            
                                <div class="col-lg-12">
                                    <div class="form_item">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfTLWAsAAAAADlJboKj1mvD4P2RsAQaSex8CYMp"
                                            data-callback="recaptchaVerified">
                                        </div>
                            
                                        <div id="recaptcha-error" class="error-message"
                                            style="color: red; margin-top: 5px;"></div>
                            
                                        @error('g-recaptcha-response')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submitBtn" class="main_btn">Send Message 
                                <span class="btn_svg">
                                    <img src="{{ asset('public/front/images/blue_gear.svg') }}" loading="lazy" alt="setting icon" class="img-fluid">
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.frontfooter')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
const disposableDomains = [
    'mailinator.com', '10minutemail.com', 'guerrillamail.com', 'tempmail.com',
    'temp-mail.org', 'throwawaymail.com', 'maildrop.cc', 'dispostable.com',
    'getairmail.com', 'moakt.com', 'spamgourmet.com', 'yopmail.com',
    'sharklasers.com', 'mailnesia.com', 'fakemail.net', 'emailondeck.com',
    'trashmail.com', 'mintemail.com', 'mytemp.email'
];

function recaptchaVerified() {
    document.getElementById('recaptcha-error').innerText = '';
}

$(document).ready(function () {
    const blurredFields = {};

    // $('#contactform input, #contactform textarea').on('input', function () {
    //     let fieldId = $(this).attr('id');
    //     let errorId = '#error-' + fieldId;
    //     let value = $(this).val().trim();

    //     // Skip phone/email format validation until blur
    //     if ((fieldId === 'phone' || fieldId === 'email') && !blurredFields[fieldId]) {
    //         $(errorId).text('');
    //         return;
    //     }

    //     if (value === '') {
    //         switch (fieldId) {
    //             case 'firstName':
    //                 $(errorId).text('Please enter your first name');
    //                 break;
    //             case 'lastName':
    //                 $(errorId).text('Please enter your last name');
    //                 break;
    //             case 'phone':
    //                 $(errorId).text('Please enter your phone number');
    //                 break;
    //             case 'email':
    //                 $(errorId).text('Please enter your email');
    //                 break;
    //             case 'subject':
    //                 $(errorId).text('Please enter your subject');
    //                 break;
    //             // Removed 'message' case
    //         }
    //     } else {
    //         if (fieldId === 'phone') {
    //             if (!/^\d{10,15}$/.test(value)) {
    //                 $(errorId).text('Phone number must be between 10 to 15 digits');
    //             } else {
    //                 $(errorId).text('');
    //             }
    //         } else if (fieldId === 'email') {
    //             if (!/^\S+@\S+\.\S+$/.test(value)) {
    //                 $(errorId).text('Please enter a valid email');
    //             } else {
    //                 let domain = value.split('@')[1].toLowerCase();
    //                 if (disposableDomains.includes(domain)) {
    //                     $(errorId).text('Invalid email addresses are not allowed');
    //                 } else {
    //                     $(errorId).text('');
    //                 }
    //             }
    //         } else {
    //             $(errorId).text('');
    //         }
    //     }
    // });

    // $('#contactform input, #contactform textarea').on('blur', function () {
    //     let fieldId = $(this).attr('id');
    //     blurredFields[fieldId] = true;
    //     $(this).trigger('input');
    // });
    
    $('#contactform').validate({
        ignore: [],
        rules: {
            firstname: {
                required: true,
                minlength: 2,
                maxlength: 50,
                normalizer: function(value) {
                    return $.trim(value);
                }
            },
            lastname: {
                required: true,
                minlength: 2,
                maxlength: 50,
                normalizer: function(value) {
                    return $.trim(value);
                }
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            email: {
                required: true,
                email: true,
                maxlength: 100
            },
            subject: {
                required: true,
                minlength: 3,
                maxlength: 150,
                normalizer: function(value) {
                    return $.trim(value);
                }
            }
        },
    
        messages: {
            firstname: {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters",
                maxlength: "First name cannot exceed 50 characters"
            },
    
            lastname: {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters",
                maxlength: "Last name cannot exceed 50 characters"
            },
    
            phone: {
                required: "Please enter your phone number",
                digits: "Please enter digits only",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
    
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address",
                maxlength: "Email cannot exceed 100 characters"
            },
    
            subject: {
                required: "Please enter your subject",
                minlength: "Subject must be at least 3 characters",
                maxlength: "Subject cannot exceed 150 characters"
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
            if (grecaptcha.getResponse() === '') {
                $('#recaptcha-error').text('Please verify that you are not a robot');
                return false;
            }
            $('#recaptcha-error').text('');
            const submitBtn = $(form).find('button[type="submit"]');
            submitBtn.prop('disabled', true).text('Submitting...');
            form.submit();
        }
    });



    // $('#contactform').on('submit', function (e) {
    //     e.preventDefault();
    //     let isValid = true;

    //     $('.error').text('');

    //     if ($('#firstName').val().trim() === '') {
    //         $('#error-firstName').text('Please enter your first name');
    //         isValid = false;
    //     }

    //     if ($('#lastName').val().trim() === '') {
    //         $('#error-lastName').text('Please enter your last name');
    //         isValid = false;
    //     }

    //     let phone = $('#phone').val().trim();
    //     if (phone === '') {
    //         $('#error-phone').text('Please enter your phone number');
    //         isValid = false;
    //     } else if (!/^\d{10,15}$/.test(phone)) {
    //         $('#error-phone').text('Phone number must be between 10 to 15 digits');
    //         isValid = false;
    //     }

    //     let email = $('#email').val().trim();
    //     if (email === '') {
    //         $('#error-email').text('Please enter your email');
    //         isValid = false;
    //     } else if (!/^\S+@\S+\.\S+$/.test(email)) {
    //         $('#error-email').text('Please enter a valid email');
    //         isValid = false;
    //     } else {
    //         let domain = email.split('@')[1].toLowerCase();
    //         if (disposableDomains.includes(domain)) {
    //             $('#error-email').text('Invalid email addresses are not allowed');
    //             isValid = false;
    //         }
    //     }

    //     if ($('#subject').val().trim() === '') {
    //         $('#error-subject').text('Please enter your subject');
    //         isValid = false;
    //     }

    //     // Removed message validation

    //     if (grecaptcha.getResponse() === '') {
    //         $('#recaptcha-error').text('Please verify that you are not a robot');
    //         isValid = false;
    //     }

    //     if (isValid) {
    //         const submitBtn = $(this).find('button[type="submit"]');
    //         submitBtn.prop('disabled', true).text('Submitting...');
    //         this.submit();
    //     }
    // });
});
</script>


