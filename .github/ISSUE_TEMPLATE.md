## Judul
Add filter items by category

## Deskripsi
Menambahkan fitur penyaringan data item berdasarkan ID kategori yang dikirim melalui query parameter pada API endpoint.

## Harapan
- Endpoint GET /api/v1/items dapat menerima parameter ?category_id={id}
- Jika parameter valid, tampilkan data yang sesuai.
- Jika parameter tidak ada item atau tidak valid, kembalikan array kosong dengan status 200.

## Label
- enhancement