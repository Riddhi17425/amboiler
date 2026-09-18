@include('layouts.frontheader')

<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif;color:#152449;-webkit-font-smoothing:antialiased}
a{text-decoration:none;color:inherit}

/* Header */
header{display:flex;align-items:center;justify-content:space-between;padding:14px 40px;border-bottom:1px solid #e8eaef;flex-wrap:wrap;gap:12px}
.logo{display:flex;align-items:center;gap:8px;font-size:22px;font-weight:700;margin:0 auto}
.icon-btn{width:34px;height:34px;border-radius:50%;border:1px solid #e8eaef;display:flex;align-items:center;justify-content:center;background:#fff}
.phone-btn{display:flex;align-items:center;gap:8px;background:#152449;color:#fff;padding:8px 16px;border-radius:22px;font-weight:600;font-size:13px;white-space:nowrap}
.lang-btn{display:flex;align-items:center;gap:8px;border:1px solid #e8eaef;padding:8px 14px;border-radius:22px;font-size:13px;white-space:nowrap}

/* Thank you section - fits one screen */
.thanks{
  min-height:calc(100vh - 66px);
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  text-align:center;
  padding:1.5vh 24px;
  background:radial-gradient(circle at 50% 0%, #f5f8e0 0%, #ffffff 60%);
}
.thanks svg.illustration{width:100%;max-width:560px;height:auto;max-height:34vh;margin-bottom:1.5vh}
.thanks h1{font-size:clamp(24px,4vh,34px);font-weight:800;margin-bottom:8px}
.thanks p{font-size:clamp(13px,2vh,15px);line-height:1.5;color:#5b6577;max-width:420px}
.cta{display:inline-flex;align-items:center;gap:8px;margin-top:2vh;background:#152449;color:#fff;font-weight:600;font-size:15px;padding:11px 26px;border-radius:8px;transition:background .2s}
.cta:hover{background:#1c3160}

@media (max-width:600px){
  header{padding:12px 18px;justify-content:center}
  .logo{order:1;width:100%;text-align:center;font-size:19px}
  .thanks svg.illustration{max-height:26vh}
}
</style>

<header>
  <div class="icon-btn" aria-label="Search">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#152449" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="7"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
  </div>

  <div class="logo">
    <svg width="26" height="22" viewBox="0 0 40 34" fill="none">
      <path d="M2 32V16L11 4V32" stroke="#152449" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M11 32V14L20 2V32" stroke="#152449" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M20 32V16L29 4" stroke="#c7d92e" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
      <circle cx="29" cy="4" r="3" fill="#c7d92e"/>
    </svg>
    <span>BOILERS</span>
  </div>

  <div style="display:flex;align-items:center;gap:12px">
    <div class="phone-btn">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      +971 52 903 7472
    </div>
    <div class="lang-btn">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#152449" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
      Select Language
    </div>
  </div>
</header>

<div class="thanks">
  <svg class="illustration" viewBox="0 0 860 260" xmlns="http://www.w3.org/2000/svg">
    <line x1="10" y1="238" x2="850" y2="238" stroke="#152449" stroke-width="1.5"/>

    <!-- desk -->
    <rect x="330" y="132" width="230" height="10" fill="#152449"/>
    <line x1="345" y1="142" x2="345" y2="190" stroke="#152449" stroke-width="2"/>
    <line x1="545" y1="142" x2="545" y2="190" stroke="#152449" stroke-width="2"/>
    <path d="M400 132 L400 105 L455 105 L455 132" fill="none" stroke="#152449" stroke-width="2"/>
    <rect x="405" y="109" width="45" height="19" fill="#c7d92e"/>
    <rect x="345" y="118" width="34" height="14" fill="#fff" stroke="#152449" stroke-width="1.6"/>
    <line x1="350" y1="122" x2="373" y2="122" stroke="#152449" stroke-width="1.2"/>
    <line x1="350" y1="126" x2="368" y2="126" stroke="#152449" stroke-width="1.2"/>

    <!-- interviewer -->
    <g transform="translate(478,10)">
      <path d="M60 40 L60 130" stroke="#152449" stroke-width="2"/>
      <path d="M18 130 C18 95 30 78 45 78 C60 78 72 95 72 130 Z" fill="#1c3160"/>
      <path d="M35 82 L45 96 L55 82" fill="none" stroke="#c7d92e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M70 100 C 92 100 100 108 108 118" fill="none" stroke="#1c3160" stroke-width="6" stroke-linecap="round"/>
      <circle cx="112" cy="121" r="7" fill="#c7d92e"/>
      <circle cx="45" cy="58" r="20" fill="#f2d9bd" stroke="#152449" stroke-width="2"/>
      <path d="M26 52 C 28 34 62 34 64 52 C 58 44 32 44 26 52 Z" fill="#152449"/>
    </g>

    <!-- applicant -->
    <g transform="translate(230,-50)">
      <path d="M40 200 L34 270" stroke="#152449" stroke-width="7" stroke-linecap="round"/>
      <path d="M60 200 L66 270" stroke="#152449" stroke-width="7" stroke-linecap="round"/>
      <path d="M24 270 h20" stroke="#152449" stroke-width="6" stroke-linecap="round"/>
      <path d="M56 270 h20" stroke="#152449" stroke-width="6" stroke-linecap="round"/>
      <path d="M18 200 C16 150 24 118 50 118 C76 118 84 150 82 200 Z" fill="#152449"/>
      <path d="M40 122 L50 142 L60 122" fill="none" stroke="#c7d92e" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M20 150 C 8 165 6 185 10 205" fill="none" stroke="#152449" stroke-width="7" stroke-linecap="round"/>
      <path d="M80 150 C 105 152 122 148 148 138" fill="none" stroke="#152449" stroke-width="7" stroke-linecap="round"/>
      <g transform="translate(148,118) rotate(-8)">
        <rect x="0" y="0" width="34" height="44" fill="#fff" stroke="#152449" stroke-width="2"/>
        <line x1="6" y1="10" x2="28" y2="10" stroke="#152449" stroke-width="1.4"/>
        <line x1="6" y1="17" x2="28" y2="17" stroke="#152449" stroke-width="1.4"/>
        <line x1="6" y1="24" x2="22" y2="24" stroke="#152449" stroke-width="1.4"/>
        <path d="M9 32 l5 5 l11 -12" fill="none" stroke="#c7d92e" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
      </g>
      <circle cx="50" cy="96" r="21" fill="#f2d9bd" stroke="#152449" stroke-width="2"/>
      <path d="M29 92 C 30 70 70 70 71 92 C 62 82 38 82 29 92 Z" fill="#152449"/>
    </g>
  </svg>

  <h1>Thank You</h1>
  <p>Your job application has been submitted successfully. We will get in touch with you shortly.</p>
  <a href="{{ route('index') }}" class="cta">Go To Home</a>
</div>

@include('layouts.frontfooter')
