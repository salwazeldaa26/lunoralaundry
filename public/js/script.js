/* ==========================================================================
   LUNORALAUNDRY — Data layer (purwarupa)
   Menyimulasikan tb_users, tb_layanan, tb_pesanan menggunakan localStorage.
   Pada implementasi produksi, fungsi-fungsi ini akan diganti dengan
   pemanggilan API/backend yang terhubung ke database MySQL sesungguhnya.
   ========================================================================== */

const DB = {
  KEYS: { users: "lunoralaundry_users", layanan: "lunoralaundry_layanan", pesanan: "lunoralaundry_pesanan", session: "lunoralaundry_session" },

  read(key){ try{ return JSON.parse(localStorage.getItem(key)) || []; }catch(e){ return []; } },
  write(key, val){ localStorage.setItem(key, JSON.stringify(val)); },

  seed(){
    if(!localStorage.getItem(this.KEYS.users)){
      this.write(this.KEYS.users, [
        { id: 1, nama: "Admin Lunoralaundry", email: "admin@lunoralaundry.id", password: "admin123", no_hp: "081200000000", alamat: "Kantor Pusat Lunoralaundry", role: "admin" },
        { id: 2, nama: "Dewi Anjani", email: "dewi@mail.com", password: "user123", no_hp: "081234567890", alamat: "Jl. Melati No. 12, Bekasi", role: "user" },
      ]);
    }
    if(!localStorage.getItem(this.KEYS.layanan)){
      this.write(this.KEYS.layanan, [
        { id: 1, nama: "Cuci Kilat", harga: 8000, estimasi: 6, deskripsi: "Cuci + kering, siap dalam hitungan jam." },
        { id: 2, nama: "Cuci Setrika", harga: 10000, estimasi: 24, deskripsi: "Cuci, kering, dan rapi disetrika." },
        { id: 3, nama: "Super Express", harga: 15000, estimasi: 3, deskripsi: "Untuk kebutuhan mendadak, 3 jam selesai." },
        { id: 4, nama: "Dry Clean", harga: 25000, estimasi: 48, deskripsi: "Perawatan khusus untuk bahan premium." },
      ]);
    }
    if(!localStorage.getItem(this.KEYS.pesanan)){
      this.write(this.KEYS.pesanan, [
        { id: 1, id_user: 2, id_layanan: 2, berat: 4, total: 40000, status: "diproses", tanggal_masuk: "2026-09-17T09:00:00" },
        { id: 2, id_user: 2, id_layanan: 1, berat: 2.5, total: 20000, status: "selesai", tanggal_masuk: "2026-09-14T14:00:00" },
      ]);
    }
  },

  nextId(arr){ return arr.length ? Math.max(...arr.map(x => x.id)) + 1 : 1; },

  // --- Users ---
  findUserByEmail(email){ return this.read(this.KEYS.users).find(u => u.email.toLowerCase() === email.toLowerCase()); },
  registerUser({ nama, email, password, no_hp, alamat }){
    const users = this.read(this.KEYS.users);
    if(users.some(u => u.email.toLowerCase() === email.toLowerCase())) return { ok: false, msg: "Email sudah terdaftar." };
    const user = { id: this.nextId(users), nama, email, password, no_hp, alamat, role: "user" };
    users.push(user);
    this.write(this.KEYS.users, users);
    return { ok: true, user };
  },
  login(email, password, roleExpected){
    const user = this.findUserByEmail(email);
    if(!user || user.password !== password) return { ok: false, msg: "Email atau password salah." };
    if(roleExpected && user.role !== roleExpected) return { ok: false, msg: `Akun ini terdaftar sebagai ${user.role}, bukan ${roleExpected}.` };
    this.write(this.KEYS.session, { id: user.id, nama: user.nama, email: user.email, role: user.role });
    return { ok: true, user };
  },
  logout(){ localStorage.removeItem(this.KEYS.session); },
  session(){ return JSON.parse(localStorage.getItem(this.KEYS.session) || "null"); },

  // --- Layanan ---
  getLayanan(){ return this.read(this.KEYS.layanan); },
  addLayanan(data){
    const list = this.getLayanan();
    list.push({ id: this.nextId(list), ...data });
    this.write(this.KEYS.layanan, list);
  },
  deleteLayanan(id){
    this.write(this.KEYS.layanan, this.getLayanan().filter(l => l.id !== id));
  },

  // --- Pesanan ---
  getPesanan(){ return this.read(this.KEYS.pesanan); },
  addPesanan({ id_user, id_layanan, berat }){
    const layanan = this.getLayanan().find(l => l.id == id_layanan);
    const list = this.getPesanan();
    const pesanan = {
      id: this.nextId(list), id_user: Number(id_user), id_layanan: Number(id_layanan),
      berat: Number(berat), total: Math.round(Number(berat) * layanan.harga),
      status: "menunggu", tanggal_masuk: new Date().toISOString(),
    };
    list.push(pesanan);
    this.write(this.KEYS.pesanan, list);
    return pesanan;
  },
  updateStatus(id, status){
    const list = this.getPesanan().map(p => p.id === id ? { ...p, status, tanggal_selesai: (status === "selesai" || status==="diambil") ? new Date().toISOString() : p.tanggal_selesai } : p);
    this.write(this.KEYS.pesanan, list);
  },
  getUsers(){ return this.read(this.KEYS.users); },
};

DB.seed();

function requireRole(role){
  const s = DB.session();
  if(!s || s.role !== role){ window.location.href = "login.html"; }
  return s;
}

function fmtRupiah(n){ return "Rp" + Number(n).toLocaleString("id-ID"); }
function fmtTanggal(iso){
  if(!iso) return "-";
  return new Date(iso).toLocaleString("id-ID", { day: "numeric", month: "short", year: "numeric", hour: "2-digit", minute: "2-digit" });
}
function statusBadge(status){
  const map = {
    menunggu: ["badge-wait", "Menunggu"],
    diproses: ["badge-process", "Diproses"],
    selesai: ["badge-done", "Selesai"],
    diambil: ["badge-picked", "Diambil"],
  };
  const [cls, label] = map[status] || ["badge-wait", status];
  return `<span class="badge ${cls}">${label}</span>`;
}
function showToast(msg){
  let t = document.getElementById("toast");
  if(!t){
    t = document.createElement("div");
    t.id = "toast"; t.className = "toast";
    document.body.appendChild(t);
  }
  t.textContent = msg;
  t.classList.add("show");
  clearTimeout(window.__toastTimer);
  window.__toastTimer = setTimeout(() => t.classList.remove("show"), 2600);
}
