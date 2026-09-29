const FRAME_LENGTH_MS = 31;
const FAST_FRAME_LENGTH_MS = 4;
const START_FRAME = 16;
const KONAMI_CODE = [
  "arrowup",
  "arrowup",
  "arrowdown",
  "arrowdown",
  "arrowleft",
  "arrowright",
  "arrowleft",
  "arrowright",
  "b",
  "a",
];

class GhosttyTerminal {
  constructor(root, frames) {
    this.root = root;
    this.frames = frames;
    this.screen = root.querySelector("[data-ghostty-screen]");
    this.title = root.querySelector("[data-ghostty-title]");
    this.columns = Number(root.dataset.columns || 100);
    this.rows = Number(root.dataset.rows || 40);

    this.index = START_FRAME % frames.length;
    this.frameTime = FRAME_LENGTH_MS;
    this.lastTick = -1;
    this.rafId = null;
    this.konami = [];
    this.animated =
      !window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    this.build();

    if (this.animated) this.bind();

    this.paint();

    if (this.animated && document.visibilityState === "visible") this.play();
  }

  build() {
    this.root.style.setProperty("--ghostty-columns", this.columns);
    this.root.style.setProperty("--ghostty-rows", this.rows);

    if (this.title) {
      this.title.textContent = this.root.dataset.title || "👻 Ghostty";
    }

    if (!this.screen) return;

    const total = Math.max(...this.frames.map((frame) => frame.split("\n").length));

    this.screen.replaceChildren(
      ...Array.from({ length: total }, () => document.createElement("div")),
    );
    this.lines = this.screen.children;
  }

  bind() {
    window.addEventListener("focus", () => this.play());
    window.addEventListener("blur", () => this.pause());
    window.addEventListener("keyup", (event) => this.onKeyUp(event));
  }

  onKeyUp(event) {
    const key = event.key.toLowerCase();

    if (KONAMI_CODE[this.konami.length] === key) {
      this.konami.push(key);
    } else {
      this.konami.length = 0;
    }

    if (this.konami.length !== KONAMI_CODE.length) return;

    this.frameTime =
      this.frameTime === FRAME_LENGTH_MS ? FAST_FRAME_LENGTH_MS : FRAME_LENGTH_MS;
    this.konami.length = 0;
  }

  play() {
    if (this.rafId !== null) return;
    this.tick = (time) => {
      let delta = time - this.lastTick;

      if (this.lastTick === -1) {
        this.lastTick = time;
      } else {
        while (delta >= this.frameTime) {
          this.advance();
          delta -= this.frameTime;
          this.lastTick += this.frameTime;
        }
      }

      this.rafId = requestAnimationFrame(this.tick);
    };
    this.rafId = requestAnimationFrame(this.tick);
  }

  pause() {
    if (this.rafId === null) return;
    cancelAnimationFrame(this.rafId);
    this.rafId = null;
    this.lastTick = -1;
  }

  advance() {
    this.index = (this.index + 1) % this.frames.length;
    this.paint();
  }

  paint() {
    if (!this.screen) return;

    const frame = this.frames[this.index].split("\n");

    for (let row = 0; row < this.lines.length; row += 1) {
      const line = frame[row] ?? "";
      if (this.lines[row].innerHTML !== line) {
        this.lines[row].innerHTML = line;
      }
    }
  }
}

function inflate(response) {
  return new Response(response.body.pipeThrough(new DecompressionStream("gzip")))
    .text()
    .then(JSON.parse);
}

/* JetBrains Mono punya advance 0.6em; kalau art dirender lebih dulu dengan
   font cadangan, kolom akan meleset dan animasi terlihat tidak rapi. */
function waitForFont() {
  if (!document.fonts || !document.fonts.load) return Promise.resolve();
  return document.fonts
    .load('400 12px "JetBrains Mono"')
    .then(() => document.fonts.ready)
    .catch(() => {});
}

function mount(roots) {
  const [first] = roots;

  return Promise.all([fetch(first.dataset.src).then(inflate), waitForFont()])
    .then(([frames]) => {
      window.GHOSTTY_FRAMES = frames;
      roots.forEach((root) => new GhosttyTerminal(root, frames));
    })
    .catch(() => {
      roots.forEach((root) => root.classList.add("ghostty--failed"));
    });
}

function boot() {
  const roots = [...document.querySelectorAll("[data-ghostty-terminal]")];

  if (roots.length === 0) return;

  if (typeof DecompressionStream === "undefined") {
    roots.forEach((root) => root.classList.add("ghostty--failed"));
    return;
  }

  mount(roots);
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", boot);
} else {
  boot();
}
