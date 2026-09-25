<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TrixSolution Cloud — Servers, storage and managed infrastructure</title>
<meta name="description" content="Cloud servers, managed infrastructure and backup, run from Karachi and Lahore. Provisioned in under two minutes.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  --paper:#edf0f5;
  --panel:#ffffff;
  --ink:#0f2038;
  --ink-soft:#4a5b74;
  --line:#c9d2e0;
  --blue:#1f4fff;
  --amber:#e08a1e;
  --green:#10805f;
  --display:"Archivo","Helvetica Neue",Arial,sans-serif;
  --body:"IBM Plex Sans",system-ui,-apple-system,sans-serif;
  --mono:"IBM Plex Mono",ui-monospace,Menlo,monospace;
}

*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  margin:0;
  background:var(--paper);
  color:var(--ink);
  font-family:var(--body);
  font-size:16px;
  line-height:1.6;
  -webkit-font-smoothing:antialiased;
}
.wrap{max-width:1120px;margin:0 auto;padding:0 28px}
a{color:inherit}
:focus-visible{outline:3px solid var(--blue);outline-offset:3px}

/* ---------- header ---------- */
.top{
  border-bottom:1px solid var(--line);
  background:rgba(237,240,245,.9);
  backdrop-filter:blur(8px);
  position:sticky;top:0;z-index:20;
}
.top .wrap{display:flex;align-items:center;gap:32px;height:68px}
.mark{
  font-family:var(--display);font-weight:700;font-size:19px;
  letter-spacing:-.02em;text-decoration:none;display:flex;align-items:center;gap:9px;
}
.dot{width:11px;height:11px;background:var(--blue);border-radius:2px;transform:rotate(45deg)}
.nav{margin-left:auto;display:flex;gap:28px;font-size:15px}
.nav a{text-decoration:none;color:var(--ink-soft)}
.nav a:hover{color:var(--ink)}
.btn{
  font-family:var(--body);font-weight:600;font-size:15px;
  padding:11px 20px;border-radius:6px;text-decoration:none;
  display:inline-block;border:1px solid transparent;cursor:pointer;
}
.btn-solid{background:var(--blue);color:#fff}
.btn-solid:hover{background:#1640d8}
.btn-line{border-color:var(--ink);color:var(--ink)}
.btn-line:hover{background:var(--ink);color:var(--paper)}
.top .btn{padding:9px 17px}

/* ---------- hero ---------- */
.hero{padding:76px 0 64px}
.hero .wrap{display:grid;grid-template-columns:1.05fr .95fr;gap:56px;align-items:center}
h1{
  font-family:var(--display);font-weight:700;
  font-size:clamp(38px,5vw,60px);line-height:1.04;
  letter-spacing:-.03em;margin:0 0 20px;
}
.lede{font-size:18px;color:var(--ink-soft);max-width:44ch;margin:0 0 30px}
.actions{display:flex;gap:12px;flex-wrap:wrap}
.assure{margin-top:26px;font-size:14px;color:var(--ink-soft)}

/* node board */
.board{
  background:var(--panel);border:1px solid var(--line);
  border-radius:10px;overflow:hidden;
  box-shadow:0 1px 0 rgba(15,32,56,.04);
}
.board-head{
  display:flex;align-items:center;justify-content:space-between;
  padding:15px 20px;border-bottom:1px solid var(--line);
  font-family:var(--mono);font-size:13px;color:var(--ink-soft);
}
.live{display:flex;align-items:center;gap:7px;color:var(--green);font-weight:500}
.pulse{width:7px;height:7px;border-radius:50%;background:var(--green)}
.node{
  display:grid;grid-template-columns:1fr auto;gap:4px 16px;
  padding:14px 20px;border-bottom:1px solid #e8ecf2;
}
.node:last-child{border-bottom:0}
.node-name{font-weight:500;font-size:15px}
.node-ms{font-family:var(--mono);font-size:14px;color:var(--ink-soft)}
.bar{grid-column:1/-1;height:4px;background:#e4e9f0;border-radius:2px;overflow:hidden}
.bar span{display:block;height:100%;background:var(--blue);width:0;border-radius:2px;transition:width 1.1s cubic-bezier(.22,.8,.3,1)}
.bar.warm span{background:var(--amber)}

/* ---------- services ---------- */
.band{padding:72px 0;border-top:1px solid var(--line)}
h2{
  font-family:var(--display);font-weight:600;
  font-size:clamp(27px,3.2vw,36px);letter-spacing:-.02em;
  margin:0 0 10px;line-height:1.15;
}
.band-lede{color:var(--ink-soft);max-width:56ch;margin:0 0 42px;font-size:17px}

.svc{border-top:1px solid var(--line)}
.svc-row{
  display:grid;grid-template-columns:230px 1fr 190px;
  gap:28px;padding:26px 0;border-bottom:1px solid var(--line);
  align-items:start;
}
.svc-row h3{
  font-family:var(--display);font-weight:600;font-size:19px;
  margin:0;letter-spacing:-.01em;
}
.svc-row p{margin:0;color:var(--ink-soft);font-size:15.5px;max-width:58ch}
.spec{font-family:var(--mono);font-size:13px;color:var(--ink-soft);line-height:1.9}
.spec b{color:var(--ink);font-weight:500}

/* ---------- plans ---------- */
.plans{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:8px}
.plan{
  background:var(--panel);border:1px solid var(--line);
  border-radius:10px;padding:26px 24px 28px;display:flex;flex-direction:column;
}
.plan.pick{border:2px solid var(--blue);padding:25px 23px 27px}
.plan h3{font-family:var(--display);font-weight:600;font-size:18px;margin:0 0 4px}
.plan .use{color:var(--ink-soft);font-size:14.5px;margin:0 0 20px;min-height:44px}
.price{font-family:var(--display);font-weight:700;font-size:34px;letter-spacing:-.02em;line-height:1}
.per{font-family:var(--body);font-weight:400;font-size:14px;color:var(--ink-soft);margin-left:4px}
.plan ul{list-style:none;margin:22px 0 26px;padding:0;font-size:15px}
.plan li{padding:7px 0;border-bottom:1px solid #e8ecf2;display:flex;justify-content:space-between;gap:12px}
.plan li:last-child{border-bottom:0}
.plan li span{font-family:var(--mono);font-size:13.5px;color:var(--ink-soft)}
.plan .btn{margin-top:auto;text-align:center}
.tag{
  font-family:var(--mono);font-size:12px;color:var(--blue);
  margin-bottom:12px;display:block;
}

/* ---------- migration steps ---------- */
.steps{counter-reset:s;display:grid;grid-template-columns:repeat(4,1fr);gap:0;margin-top:14px}
.step{padding:22px 24px 22px 0;border-top:2px solid var(--ink);position:relative}
.step:before{
  counter-increment:s;content:counter(s);
  font-family:var(--mono);font-size:13px;color:var(--ink-soft);
  display:block;margin-bottom:9px;
}
.step h4{font-family:var(--display);font-weight:600;font-size:16.5px;margin:0 0 6px}
.step p{margin:0;font-size:15px;color:var(--ink-soft)}

/* ---------- contact ---------- */
.cta{background:var(--ink);color:var(--paper);padding:66px 0}
.cta h2{color:#fff;margin-bottom:14px}
.cta p{color:#a9b8cd;max-width:52ch;font-size:17px;margin:0 0 28px}
.cta .btn-solid{background:#fff;color:var(--ink)}
.cta .btn-solid:hover{background:#dce3ee}
.cta .btn-line{border-color:#4a5b74;color:var(--paper)}
.cta .btn-line:hover{background:#1b3053;color:#fff}
.reach{display:flex;gap:36px;flex-wrap:wrap;margin-top:34px;font-size:15px;color:#a9b8cd}
.reach b{display:block;color:#fff;font-weight:500;font-family:var(--mono);font-size:14.5px;margin-top:3px}

footer{padding:26px 0;font-size:14px;color:var(--ink-soft)}
footer .wrap{display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}

/* ---------- responsive ---------- */
@media (max-width:920px){
  .hero .wrap{grid-template-columns:1fr;gap:42px}
  .svc-row{grid-template-columns:1fr;gap:10px}
  .plans{grid-template-columns:1fr}
  .steps{grid-template-columns:1fr 1fr}
  .nav{display:none}
}
@media (max-width:560px){
  .wrap{padding:0 20px}
  .hero{padding:52px 0 44px}
  .band{padding:54px 0}
  .steps{grid-template-columns:1fr}
  .step{padding-right:0}
}
@media (prefers-reduced-motion:reduce){
  *{transition:none!important;animation:none!important}
  html{scroll-behavior:auto}
}
</style>
</head>
<body>

<header class="top">
  <div class="wrap">
    <a class="mark" href="#top"><span class="dot"></span>TrixSolution Cloud</a>
    <nav class="nav">
      <a href="#services">Services</a>
      <a href="#plans">Plans</a>
      <a href="#migration">Migration</a>
      <a href="#contact">Contact</a>
    </nav>
    <a class="btn btn-solid" href="#contact">Talk to us</a>
  </div>
</header>

<section class="hero" id="top">
  <div class="wrap">
    <div>
      <h1>Cloud servers that stay close to your users.</h1>
      <p class="lede">We run and look after infrastructure for businesses across Pakistan — servers, storage, backups and the monitoring that keeps them honest.</p>
      <div class="actions">
        <a class="btn btn-solid" href="#plans">See plans and pricing</a>
        <a class="btn btn-line" href="#migration">Move an existing setup</a>
      </div>
      <p class="assure">New servers are ready in under two minutes. No setup fee, billed monthly, cancel whenever.</p>
    </div>

    <div class="board" aria-label="Network response times by location">
      <div class="board-head">
        <span>Response time from Karachi</span>
        <span class="live"><span class="pulse"></span>Live</span>
      </div>
      <div class="node">
        <span class="node-name">Karachi</span>
        <span class="node-ms">4 ms</span>
        <span class="bar"><span data-fill="8%"></span></span>
      </div>
      <div class="node">
        <span class="node-name">Lahore</span>
        <span class="node-ms">19 ms</span>
        <span class="bar"><span data-fill="22%"></span></span>
      </div>
      <div class="node">
        <span class="node-name">Dubai</span>
        <span class="node-ms">41 ms</span>
        <span class="bar"><span data-fill="44%"></span></span>
      </div>
      <div class="node">
        <span class="node-name">Singapore</span>
        <span class="node-ms">88 ms</span>
        <span class="bar warm"><span data-fill="78%"></span></span>
      </div>
    </div>
  </div>
</section>

<section class="band" id="services">
  <div class="wrap">
    <h2>What we run for you</h2>
    <p class="band-lede">Every service below includes monitoring, patching and a real person to call. You are not handed a login and left to it.</p>

    <div class="svc">
      <div class="svc-row">
        <h3>Cloud servers</h3>
        <p>Virtual servers with dedicated CPU and NVMe storage. Pick Ubuntu, Debian, Rocky or Windows Server, resize the plan as you grow, and keep a snapshot before every change you are unsure about.</p>
        <div class="spec">Ready in <b>under 2 min</b><br>Root access included<br>Hourly snapshots</div>
      </div>

      <div class="svc-row">
        <h3>Managed infrastructure</h3>
        <p>We handle the operating system, updates, web server and database so your team can stay on the product. Includes tuning, log review and a monthly report on what changed and why.</p>
        <div class="spec">Patched <b>weekly</b><br>24/7 monitoring<br>Named engineer</div>
      </div>

      <div class="svc-row">
        <h3>Backup and recovery</h3>
        <p>Automatic nightly backups kept in a second location, with a restore you can test yourself. We run a full recovery drill with you twice a year, because a backup nobody has restored is only a guess.</p>
        <div class="spec">Kept <b>30 days</b><br>Off-site copy<br>Self-serve restore</div>
      </div>

      <div class="svc-row">
        <h3>Security monitoring</h3>
        <p>Log collection, alerting and response for your servers and network. Built and watched by analysts who work in security operations day to day, not a dashboard left running unattended.</p>
        <div class="spec">Alerts in <b>real time</b><br>Monthly review<br>Incident support</div>
      </div>
    </div>
  </div>
</section>

<section class="band" id="plans">
  <div class="wrap">
    <h2>Plans</h2>
    <p class="band-lede">Prices in PKR, billed monthly. Move up or down at any time and we adjust the bill the same day.</p>

    <div class="plans">
      <div class="plan">
        <h3>Starter</h3>
        <p class="use">A website, a staging box, or a small internal tool.</p>
        <div><span class="price">4,500<span class="per">/ month</span></span></div>
        <ul>
          <li>Processor <span>2 vCPU</span></li>
          <li>Memory <span>4 GB</span></li>
          <li>Storage <span>80 GB NVMe</span></li>
          <li>Transfer <span>2 TB</span></li>
          <li>Backups <span>Nightly</span></li>
        </ul>
        <a class="btn btn-line" href="#contact">Choose Starter</a>
      </div>

      <div class="plan pick">
        <span class="tag">Most chosen</span>
        <h3>Business</h3>
        <p class="use">Production apps with a database and steady daily traffic.</p>
        <div><span class="price">11,900<span class="per">/ month</span></span></div>
        <ul>
          <li>Processor <span>4 vCPU</span></li>
          <li>Memory <span>16 GB</span></li>
          <li>Storage <span>320 GB NVMe</span></li>
          <li>Transfer <span>6 TB</span></li>
          <li>Backups <span>Hourly</span></li>
        </ul>
        <a class="btn btn-solid" href="#contact">Choose Business</a>
      </div>

      <div class="plan">
        <h3>Scale</h3>
        <p class="use">Heavier workloads, or several services on one footprint.</p>
        <div><span class="price">28,500<span class="per">/ month</span></span></div>
        <ul>
          <li>Processor <span>8 vCPU</span></li>
          <li>Memory <span>32 GB</span></li>
          <li>Storage <span>640 GB NVMe</span></li>
          <li>Transfer <span>12 TB</span></li>
          <li>Backups <span>Hourly + off-site</span></li>
        </ul>
        <a class="btn btn-line" href="#contact">Choose Scale</a>
      </div>
    </div>
  </div>
</section>

<section class="band" id="migration">
  <div class="wrap">
    <h2>Moving from somewhere else</h2>
    <p class="band-lede">We move you at a time you pick, usually overnight. Your current setup keeps running until you confirm the new one is right.</p>

    <div class="steps">
      <div class="step">
        <h4>We take a look</h4>
        <p>A short call to see what you are running now and what cannot go down.</p>
      </div>
      <div class="step">
        <h4>We build a copy</h4>
        <p>The new servers are set up and your data is synced across while the old ones keep serving.</p>
      </div>
      <div class="step">
        <h4>You test it</h4>
        <p>You get access to the copy and check it properly before anything is switched.</p>
      </div>
      <div class="step">
        <h4>We switch over</h4>
        <p>The cutover happens in your chosen window, with the old setup kept for two weeks.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta" id="contact">
  <div class="wrap">
    <h2>Tell us what you are running</h2>
    <p>Send over your current setup and we will come back with a plan, a price and a migration date. No sales call needed to get a number.</p>
    <div class="actions">
      <a class="btn btn-solid" href="mailto:hello@trixsolution.cloud">Email us</a>
      <a class="btn btn-line" href="tel:+922100000000">Call the office</a>
    </div>
    <div class="reach">
      <div>Email<b>hello@trixsolution.cloud</b></div>
      <div>Phone<b>+92 21 0000 000</b></div>
      <div>Office<b>Karachi, Pakistan</b></div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <span>TrixSolution Cloud Services</span>
    <span>Karachi and Lahore</span>
  </div>
</footer>

<script>
// one motion moment: the latency bars fill once, after paint
window.addEventListener('load', function () {
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  document.querySelectorAll('.bar span').forEach(function (el, i) {
    var w = el.getAttribute('data-fill');
    if (reduce) { el.style.width = w; return; }
    setTimeout(function () { el.style.width = w; }, 160 + i * 130);
  });
});
</script>

</body>
</html>