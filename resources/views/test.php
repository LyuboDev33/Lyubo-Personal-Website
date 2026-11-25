<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Founder Journal Dashboard</title>
<style>
:root{--bg:#0d0f12;--panel:#15181d;--panel2:#1b1f25;--border:#2a3038;--text:#f5f7fa;--muted:#87909c;--soft:#b8c0cb;--sidebar:280px}
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:Arial,Helvetica,sans-serif;background:linear-gradient(180deg,#0b0d10,#11151a);color:var(--text);min-height:100vh}
button,input,textarea{font:inherit}
.app{display:flex;min-height:100vh}
.sidebar{position:fixed;left:0;top:0;bottom:0;width:var(--sidebar);background:#101318;border-right:1px solid var(--border);padding:22px;display:flex;flex-direction:column;z-index:50;transition:.25s}
.brand{display:flex;align-items:center;gap:12px;padding-bottom:18px;border-bottom:1px solid var(--border)}
.brand-logo{width:42px;height:42px;border-radius:12px;background:#f0f1f3;color:#111318;display:grid;place-items:center;font-weight:900}
.brand h1{font-size:17px}.brand span{display:block;color:var(--muted);font-size:12px;margin-top:3px}
.close{display:none;margin-left:auto;background:transparent;color:#fff;border:1px solid var(--border);border-radius:10px;width:38px;height:38px}
.profile{margin-top:20px;background:var(--panel);border:1px solid var(--border);border-radius:16px;padding:14px;display:flex;gap:12px;align-items:center}
.avatar{width:42px;height:42px;border-radius:50%;background:#eceef1;color:#111318;display:grid;place-items:center;font-weight:800}
.profile strong{font-size:14px}.profile span{display:block;color:var(--muted);font-size:12px;margin-top:3px}
.nav{margin-top:24px;display:grid;gap:8px}.nav small{color:var(--muted);text-transform:uppercase;font-weight:800;letter-spacing:.12em;font-size:10px;margin:0 8px 4px}
.nav a,.nav button{display:flex;align-items:center;gap:12px;min-height:44px;padding:0 12px;border-radius:11px;color:var(--soft);border:0;background:transparent;text-decoration:none;cursor:pointer;text-align:left}
.nav a:hover,.nav button:hover{background:#171b21;color:#fff}.nav a.active{background:#f0f1f3;color:#111318;font-weight:800}
.sidebar-foot{margin-top:auto;border:1px solid var(--border);background:var(--panel);border-radius:14px;padding:14px}
.sidebar-foot strong{font-size:13px}.days{display:grid;grid-template-columns:repeat(7,1fr);gap:5px;margin-top:10px}.day{height:26px;border:1px solid var(--border);border-radius:7px;display:grid;place-items:center;color:var(--muted);font-size:10px}.done{background:#f0f1f3;color:#111318}
.main{margin-left:var(--sidebar);width:calc(100% - var(--sidebar));min-height:100vh}
.topbar{position:sticky;top:0;z-index:30;background:rgba(13,15,18,.88);backdrop-filter:blur(14px);border-bottom:1px solid var(--border);padding:16px 28px;display:flex;align-items:center;gap:14px}
.menu{display:none;width:42px;height:42px;border-radius:10px;border:1px solid var(--border);background:var(--panel);color:#fff}
.top-title span{color:var(--muted);font-size:12px}.top-title h2{font-size:18px;margin-top:3px}
.top-actions{margin-left:auto;display:flex;gap:10px}.btn{border:1px solid var(--border);background:var(--panel);color:var(--soft);border-radius:11px;min-height:42px;padding:0 14px;cursor:pointer}.btn.light{background:#f0f1f3;color:#111318;border-color:#f0f1f3;font-weight:800}
.content{padding:30px;max-width:1500px;margin:0 auto}
.hero{display:grid;grid-template-columns:1.4fr .6fr;gap:20px;margin-bottom:20px}
.card{background:var(--panel);border:1px solid var(--border);border-radius:22px}
.hero-main{padding:28px}.eyebrow{font-size:11px;text-transform:uppercase;letter-spacing:.12em;color:var(--muted);font-weight:800}.hero-main h3{font-size:42px;line-height:1.04;letter-spacing:-.04em;margin-top:10px;max-width:760px}.hero-main p{margin-top:15px;color:var(--soft);line-height:1.7;max-width:760px}.chips{display:flex;flex-wrap:wrap;gap:8px;margin-top:20px}.chip{border:1px solid #343b45;border-radius:999px;padding:8px 11px;color:var(--soft);font-size:12px}
.hero-side{padding:22px;display:flex;flex-direction:column;justify-content:space-between;gap:18px}.progress{display:flex;align-items:center;gap:16px}.ring{width:90px;height:90px;border-radius:50%;background:conic-gradient(#f3f4f5 var(--p,0%),#272d34 0);display:grid;place-items:center;position:relative}.ring:before{content:"";position:absolute;width:66px;height:66px;border-radius:50%;background:var(--panel)}.ring span{position:relative;font-weight:900}.progress p{color:var(--muted);font-size:12px;margin-top:4px;line-height:1.5}
.quote{border-top:1px solid var(--border);padding-top:16px;color:var(--soft);font-size:13px;line-height:1.6}
.stats{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:20px}.stat{padding:18px}.stat span{color:var(--muted);font-size:12px}.stat strong{display:block;font-size:28px;margin-top:8px}.stat small{display:block;color:var(--soft);font-size:11px;margin-top:5px}
.section{margin-bottom:20px}.section-head{padding:22px;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;gap:14px}.section-head h4{font-size:20px;margin-top:6px}.section-head p{color:var(--soft);font-size:13px;line-height:1.6;margin-top:6px}.status{color:var(--muted);font-size:12px}.questions{padding:8px 22px 22px}.question{padding:20px 0;border-bottom:1px solid var(--border)}.question:last-child{border-bottom:0}.qtop{display:flex;gap:14px}.num{width:34px;height:34px;border-radius:9px;background:#20252c;border:1px solid #343b45;display:grid;place-items:center;color:var(--soft);font-size:12px;font-weight:900;flex:0 0 34px}.qcopy{flex:1}.qcopy h5{font-size:15px;line-height:1.5}.qcopy p{color:var(--muted);font-size:12px;margin-top:5px;line-height:1.5}.field{position:relative;margin-top:12px}.field textarea,.reflect textarea{width:100%;min-height:140px;background:#101318;color:#fff;border:1px solid var(--border);border-radius:13px;padding:15px 15px 36px;outline:none;line-height:1.65;resize:vertical}.field textarea:focus,.reflect textarea:focus{border-color:#515a65;box-shadow:0 0 0 4px rgba(255,255,255,.03)}.meta{position:absolute;right:10px;bottom:9px;color:var(--muted);font-size:11px;display:flex;gap:10px}.saved{color:#9de2bb;opacity:0}.saved.show{opacity:1}
.reflect-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;padding:20px}.reflect{border:1px solid var(--border);border-radius:15px;padding:17px;background:#171b20}.reflect h5{font-size:14px}.reflect p{color:var(--muted);font-size:12px;margin-top:5px}.reflect textarea{min-height:110px;margin-top:12px;padding-bottom:15px}
.footer-actions{display:flex;justify-content:space-between;gap:12px;align-items:center;padding:8px 0 2px;color:var(--muted);font-size:12px}.footer-buttons{display:flex;gap:10px}
.overlay{position:fixed;inset:0;background:rgba(0,0,0,.6);z-index:40;opacity:0;visibility:hidden}.overlay.show{opacity:1;visibility:visible}
.toast{position:fixed;right:20px;bottom:20px;background:#f0f1f3;color:#111318;border-radius:12px;padding:13px 16px;font-size:13px;box-shadow:0 18px 50px rgba(0,0,0,.4);opacity:0;transform:translateY(10px);transition:.2s;z-index:100}.toast.show{opacity:1;transform:translateY(0)}
@media(max-width:1100px){.hero{grid-template-columns:1fr}.stats{grid-template-columns:repeat(2,1fr)}.reflect-grid{grid-template-columns:1fr}}
@media(max-width:900px){.sidebar{transform:translateX(-100%)}.sidebar.open{transform:translateX(0)}.close,.menu{display:block}.main{margin-left:0;width:100%}}
@media(max-width:650px){.content{padding:18px 14px}.topbar{padding:12px 14px}.top-actions .btn span{display:none}.hero-main{padding:22px}.hero-main h3{font-size:31px}.stats{grid-template-columns:1fr}.section-head{flex-direction:column}.questions{padding:6px 16px 18px}.reflect-grid{padding:14px}.footer-actions{flex-direction:column;align-items:stretch}.footer-buttons{width:100%}.footer-buttons .btn{flex:1}}
</style>
</head>
<body>
<div class="app">
<aside class="sidebar" id="sidebar">
<div class="brand">
<div class="brand-logo">FJ</div>
<div><h1>Founder Journal</h1><span>Private business diary</span></div>
<button class="close" id="closeSidebar">✕</button>
</div>

<div class="profile">
<div class="avatar">LS</div>
<div><strong>Lyubomir Stoyanov</strong><span>Founder · Owner</span></div>
</div>

<nav class="nav">
<small>Workspace</small>
<a href="#today" class="active">⌂ Today</a>
<a href="#strategy">◫ Strategy</a>
<a href="#leadership">◎ Leadership</a>
<a href="#numbers">↗ Numbers</a>
<a href="#reflection">✦ Reflection</a>
</nav>

<nav class="nav">
<small>Journal</small>
<button id="resetBtn">↺ Reset today</button>
<button id="exportBtn">⇩ Export entry</button>
</nav>

<div class="sidebar-foot">
<strong>Writing streak</strong>
<div class="days">
<div class="day done">M</div><div class="day done">T</div><div class="day done">W</div><div class="day done">T</div><div class="day done">F</div><div class="day">S</div><div class="day">S</div>
</div>
</div>
</aside>

<div class="overlay" id="overlay"></div>

<main class="main">
<header class="topbar">
<button class="menu" id="menuBtn">☰</button>
<div class="top-title"><span id="dateLabel">Daily journal</span><h2>Business Owner Dashboard</h2></div>
<div class="top-actions">
<button class="btn" id="focusBtn">◉ <span>Focus mode</span></button>
<button class="btn light" id="saveBtn">✓ <span>Save journal</span></button>
</div>
</header>

<div class="content">
<section class="hero" id="today">
<div class="card hero-main">
<div class="eyebrow">Daily clarity</div>
<h3>Build the business on purpose, not by accident.</h3>
<p>This journal is your private operating room. Capture what is working, what is broken, what needs your attention, and what decisions you are avoiding. The goal is not to write beautifully. The goal is to think clearly.</p>
<div class="chips"><div class="chip">● Private by default</div><div class="chip">✦ Autosaved locally</div><div class="chip">⌁ Single-page demo</div></div>
</div>
<div class="card hero-side">
<div class="progress"><div class="ring" id="ring"><span id="percent">0%</span></div><div><strong>Today’s journal</strong><p id="progressText">0 of 11 prompts completed</p></div></div>
<div class="quote"><strong>Founder note:</strong> You rarely need more information. You usually need a better decision.</div>
</div>
</section>

<section class="stats">
<div class="card stat"><span>Prompts answered</span><strong id="answered">0</strong><small>out of 11 today</small></div>
<div class="card stat"><span>Words written</span><strong id="words">0</strong><small>across all sections</small></div>
<div class="card stat"><span>Current focus</span><strong>1</strong><small>critical priority</small></div>
<div class="card stat"><span>Journal streak</span><strong>5</strong><small>consecutive days</small></div>
</section>

<section class="card section" id="strategy">
<div class="section-head"><div><div class="eyebrow">01 · Strategy</div><h4>Direction & priorities</h4><p>Think about where the business is going, what matters today, and what should be ignored.</p></div><div class="status">In progress</div></div>
<div class="questions">
<div class="question"><div class="qtop"><div class="num">01</div><div class="qcopy"><h5>What is the single most important thing the business needs from me today?</h5><p>Choose one outcome. Not five tasks.</p><div class="field"><textarea data-key="strategy_priority" placeholder="Example: Finish the pricing decision and communicate it to the team..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">02</div><div class="qcopy"><h5>What opportunity has the highest leverage right now?</h5><p>Think in terms of impact, not urgency.</p><div class="field"><textarea data-key="strategy_opportunity" placeholder="Describe the opportunity and why it matters..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">03</div><div class="qcopy"><h5>What am I doing that should probably be stopped, delegated, or postponed?</h5><p>Identify low-value work stealing attention from the business.</p><div class="field"><textarea data-key="strategy_stop" placeholder="Write down the work that does not deserve your attention..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
</div>
</section>

<section class="card section" id="leadership">
<div class="section-head"><div><div class="eyebrow">02 · Leadership</div><h4>People & decisions</h4><p>Leadership becomes clearer when uncomfortable issues are written down.</p></div><div class="status">In progress</div></div>
<div class="questions">
<div class="question"><div class="qtop"><div class="num">04</div><div class="qcopy"><h5>Who on the team needs clarity, support, or a difficult conversation?</h5><p>Write the truth before you soften it for the actual conversation.</p><div class="field"><textarea data-key="leadership_conversation" placeholder="Who needs your attention and what needs to be said?"></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">05</div><div class="qcopy"><h5>What decision have I been avoiding?</h5><p>If the answer is obvious but uncomfortable, this is probably it.</p><div class="field"><textarea data-key="leadership_avoiding" placeholder="Describe the decision and what makes it uncomfortable..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">06</div><div class="qcopy"><h5>Where am I becoming the bottleneck?</h5><p>Look for approvals, knowledge, or responsibilities only you currently hold.</p><div class="field"><textarea data-key="leadership_bottleneck" placeholder="Where does progress slow down because everything depends on you?"></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
</div>
</section>

<section class="card section" id="numbers">
<div class="section-head"><div><div class="eyebrow">03 · Numbers</div><h4>Performance & reality</h4><p>Numbers remove stories. Use this section to confront what the business is actually doing.</p></div><div class="status">In progress</div></div>
<div class="questions">
<div class="question"><div class="qtop"><div class="num">07</div><div class="qcopy"><h5>Which number deserves my attention today?</h5><p>Revenue, margin, leads, churn, stock, cash, conversion — choose what matters.</p><div class="field"><textarea data-key="numbers_attention" placeholder="Write the number and what it is telling you..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">08</div><div class="qcopy"><h5>Where is money being wasted or underutilized?</h5><p>Consider tools, inventory, people, ads, time, and neglected opportunities.</p><div class="field"><textarea data-key="numbers_waste" placeholder="List spending or resources that deserve a closer look..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
</div>
</section>

<section class="card section">
<div class="section-head"><div><div class="eyebrow">04 · Momentum</div><h4>Execution & obstacles</h4><p>Capture what is moving and what is stuck before the day disappears into activity.</p></div><div class="status">In progress</div></div>
<div class="questions">
<div class="question"><div class="qtop"><div class="num">09</div><div class="qcopy"><h5>What is working better than expected?</h5><p>Find momentum worth protecting or doubling down on.</p><div class="field"><textarea data-key="momentum_working" placeholder="What is quietly working and deserves more attention?"></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">10</div><div class="qcopy"><h5>What is currently stuck, and what is the next physical action?</h5><p>Turn vague frustration into one concrete move.</p><div class="field"><textarea data-key="momentum_stuck" placeholder="Describe the blockage, then write the next action..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
<div class="question"><div class="qtop"><div class="num">11</div><div class="qcopy"><h5>If today goes extremely well, what will be true by the end of the day?</h5><p>Describe the finished state, not the activity.</p><div class="field"><textarea data-key="momentum_success" placeholder="By the end of today, I want..."></textarea><div class="meta"><span class="saved">Saved</span><span class="count">0 words</span></div></div></div></div></div>
</div>
</section>

<section class="card section" id="reflection">
<div class="section-head"><div><div class="eyebrow">05 · Reflection</div><h4>End-of-day review</h4><p>Three short notes are enough to close the loop and carry useful insight into tomorrow.</p></div></div>
<div class="reflect-grid">
<div class="reflect"><h5>✓ One win</h5><p>What are you proud of today?</p><textarea data-key="reflection_win" placeholder="A result, conversation, decision, or small victory..."></textarea></div>
<div class="reflect"><h5>! One lesson</h5><p>What did today teach you?</p><textarea data-key="reflection_lesson" placeholder="Something you understand better now..."></textarea></div>
<div class="reflect"><h5>→ One move tomorrow</h5><p>What deserves your attention first?</p><textarea data-key="reflection_tomorrow" placeholder="The first meaningful move for tomorrow..."></textarea></div>
</div>
</section>

<div class="footer-actions">
<div>Entries are stored in your browser with localStorage for this demo.</div>
<div class="footer-buttons"><button class="btn" id="copyBtn">Copy journal</button><button class="btn light" id="completeBtn">Complete day</button></div>
</div>
</div>
</main>
</div>

<div class="toast" id="toast">Saved</div>

<script>
(function(){
const fields=[...document.querySelectorAll('[data-key]')];
const promptFields=[...document.querySelectorAll('.question textarea[data-key]')];
const date=new Date();
const dateKey=[date.getFullYear(),String(date.getMonth()+1).padStart(2,'0'),String(date.getDate()).padStart(2,'0')].join('-');
const prefix='founder-journal:'+dateKey+':';
const sidebar=document.getElementById('sidebar');
const overlay=document.getElementById('overlay');
const ring=document.getElementById('ring');
const percent=document.getElementById('percent');
const progressText=document.getElementById('progressText');
const answered=document.getElementById('answered');
const words=document.getElementById('words');
const toast=document.getElementById('toast');
document.getElementById('dateLabel').textContent=new Intl.DateTimeFormat('en',{weekday:'long',day:'numeric',month:'long',year:'numeric'}).format(date);

function wc(v){v=v.trim();return v?v.split(/\s+/).length:0}
function saveField(f){
localStorage.setItem(prefix+f.dataset.key,f.value);
const box=f.closest('.field');
if(box){const s=box.querySelector('.saved');if(s){s.classList.add('show');setTimeout(()=>s.classList.remove('show'),900)}}
}
function update(){
let done=promptFields.filter(f=>f.value.trim()).length;
let total=promptFields.length;
let p=Math.round(done/total*100);
ring.style.setProperty('--p',p+'%');
percent.textContent=p+'%';
progressText.textContent=done+' of '+total+' prompts completed';
answered.textContent=done;
words.textContent=fields.reduce((a,f)=>a+wc(f.value),0);
fields.forEach(f=>{const box=f.closest('.field');if(box){const c=box.querySelector('.count');if(c)c.textContent=wc(f.value)+' words'}})
}
fields.forEach(f=>{
const saved=localStorage.getItem(prefix+f.dataset.key);
if(saved!==null)f.value=saved;
f.addEventListener('input',()=>{saveField(f);update()});
});
update();

function show(msg){toast.textContent=msg;toast.classList.add('show');setTimeout(()=>toast.classList.remove('show'),1800)}
document.getElementById('saveBtn').onclick=()=>{fields.forEach(saveField);update();show('Journal saved locally')};
document.getElementById('resetBtn').onclick=()=>{if(confirm('Clear today\'s journal?')){fields.forEach(f=>{localStorage.removeItem(prefix+f.dataset.key);f.value=''});update();show('Today reset')}};

function buildText(){
let out=['FOUNDER JOURNAL',document.getElementById('dateLabel').textContent,''];
fields.forEach(f=>{out.push(f.dataset.key.replaceAll('_',' ').toUpperCase());out.push(f.value.trim()||'(No entry)');out.push('')});
return out.join('\n')
}
document.getElementById('copyBtn').onclick=async()=>{try{await navigator.clipboard.writeText(buildText());show('Journal copied')}catch(e){show('Copy blocked by browser')}};
document.getElementById('exportBtn').onclick=()=>{
const blob=new Blob([buildText()],{type:'text/plain'});
const url=URL.createObjectURL(blob);
const a=document.createElement('a');
a.href=url;a.download='founder-journal-'+dateKey+'.txt';a.click();
URL.revokeObjectURL(url);show('Journal exported')
};
document.getElementById('completeBtn').onclick=()=>{localStorage.setItem(prefix+'completed','1');show('Day completed')};

document.getElementById('menuBtn').onclick=()=>{sidebar.classList.add('open');overlay.classList.add('show')};
document.getElementById('closeSidebar').onclick=closeSidebar;
overlay.onclick=closeSidebar;
function closeSidebar(){sidebar.classList.remove('open');overlay.classList.remove('show')}

document.querySelectorAll('.nav a').forEach(a=>a.addEventListener('click',()=>{document.querySelectorAll('.nav a').forEach(x=>x.classList.remove('active'));a.classList.add('active');if(innerWidth<900)closeSidebar()}));

let focus=false;
document.getElementById('focusBtn').onclick=()=>{
focus=!focus;
if(focus){sidebar.style.display='none';document.querySelector('.main').style.marginLeft='0';document.querySelector('.main').style.width='100%';show('Focus mode enabled')}
else{sidebar.style.display='';document.querySelector('.main').style.marginLeft='';document.querySelector('.main').style.width='';show('Focus mode disabled')}
};

window.addEventListener('beforeunload',()=>fields.forEach(saveField));
})();
</script>
</body>
</html>
