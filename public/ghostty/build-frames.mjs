import { readdir, readFile, writeFile, unlink } from "node:fs/promises";
import { fileURLToPath } from "node:url";
import { dirname, join } from "node:path";
import { gzipSync } from "node:zlib";

const here = dirname(fileURLToPath(import.meta.url));
const framesDir = join(here, "animation_frames");
const outputPath = join(here, "frames.json.gz");
const legacyPath = join(here, "..", "js", "ghostty-frames.js");

const files = (await readdir(framesDir))
  .filter((name) => name.endsWith(".txt"))
  .sort();

const frames = [];

for (const file of files) {
  const raw = await readFile(join(framesDir, file), "utf8");
  const lines = raw.split("\n").map((line) => line.replace(/\r$/, "").trimEnd());
  while (lines.length > 0 && lines[lines.length - 1] === "") lines.pop();
  frames.push(lines.join("\n"));
}

const payload = Buffer.from(JSON.stringify(frames), "utf8");
const compressed = gzipSync(payload, { level: 9 });

await writeFile(outputPath, compressed);

await unlink(legacyPath).catch(() => {});

console.log(`frames    ${frames.length}`);
console.log(`raw       ${(payload.length / 1024).toFixed(1)} KB`);
console.log(`gzip      ${(compressed.length / 1024).toFixed(1)} KB`);
console.log(`written   ${outputPath}`);
