<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Hi';
    $t['view_site'] = 'Tampilan';
    $t['logout'] = 'Keluar';
    $t['javascript_msg'] = 'JavaScript tidak difungsikan atau tidak di dukung oleh browser Anda.
                            Harap perbarui browser Anda atau <a href="https://support.google.com/answer/23852" target="_blank">Fungsikan JavaScript</a> untuk menggunakan Panel Admin.';
    $t['add_new'] = 'Tambah Baru';
    $t['add_new_page'] = 'Tambah Laman';
    $t['add_new_user'] = 'Tambah Anggota';
    $t['view'] = 'Lihat';
    $t['list'] = 'Daftar';
    $t['edit'] = 'Edit';
    $t['delete'] = 'Hapus';
    $t['delete_selected'] = 'Hapus Pilihan';
    $t['advanced_settings'] = 'Seting Lengkap';

    // Sidebar
    $t['comment'] = 'Komentar';
    $t['comments'] = 'Komentar';
    $t['manage_comments'] = 'Kelola Komentar';
    $t['users'] = 'Anggota';
    $t['manage_users'] = 'Kelola Anggota';

    // List pages
    $t['view_all_folders'] = 'Lihat Semua Direktori';
    $t['filter'] = 'Filter';
    $t['showing'] = 'Perlihatkan';
    $t['title'] = 'Judul';
    $t['folder'] = 'Direktori';
    $t['date'] = 'Tanggal';
    $t['actions'] = 'Aksi';
    $t['no_pages_found'] = 'Laman Kosong';
    $t['published'] = 'Terbit';
    $t['unpublished'] = 'Draft';
    $t['confirm_delete_page'] = 'Hapus laman ini'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Ingin menghapus laman yang dipilih?';
    $t['remove_template'] = 'Hapus Template';
    $t['template_missing'] = 'Template hilang';
    $t['prev'] = 'Sebelumnya'; // Pagination button
    $t['next'] = 'Berikutnya'; // Pagination button

    // Pages
    $t['welcome'] = 'Selamat Datang';
    $t['no_regions_defined'] = 'Tentukan Area Mana yang Diedit';
    $t['no_templates_defined'] = 'Tidak ada template yang dikelola oleh CMS';
    $t['access_level'] = 'Level Akses';
    $t['superadmin'] = 'Super Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Anggota Terdaftar (Special)';
    $t['authenitcated_user'] = 'Anggota Terdaftar';
    $t['unauthenticated_user'] = 'Umum';
    $t['allow_comments'] = 'Semua anggota boleh berkomentar';
    $t['status'] = 'Status';
    $t['name'] = 'Nama';
    $t['title_desc'] = 'kosongkan kolom ini untuk digunakan sistim membuat nama secara otomatis';
    $t['required'] = 'Penting'; // Required field
    $t['required_msg'] = 'Baris ini tidak boleh dikosongkan';
    $t['browse_server'] = 'Cek Server';
    $t['view_image'] = 'Lihat Gambar';
    $t['thumb_created_auto'] = 'akan otomatis muncul';
    $t['recreate'] = 'Recreate';
    $t['thumb_recreated'] = 'Thumbnail recreated';
    $t['crop_from'] = 'crop dari';
    $t['top_left'] = 'Pojok Kiri Atas';
    $t['top_center'] = 'Pojok Tengah Atas';
    $t['top_right'] = 'Pojok Kanan Atas';
    $t['middle_left'] = 'Tengah Kiri';
    $t['middle'] = 'Tengah';
    $t['middle_right'] = 'Tengah Kanan';
    $t['bottom_left'] = 'Pojok Kiri Bawah';
    $t['bottom_center'] = 'Pojok Tengah Bawah';
    $t['bottom_right'] = 'Pojoj Kanan Bawah';
    $t['view_thumbnail'] = 'Lihat Thumbnail';
    $t['field_not_found'] = 'Area kosong!';
    $t['delete_permanently'] = 'Hapus Selamanya?';
    $t['view_code'] = 'Lihat Kode';
    $t['confirm_delete_field'] = 'Sudah pasti menghapus area ini selamanya?';
    $t['save'] = 'Simpan';

    // Comments
    $t['all'] = 'Semua';
    $t['unapprove'] = 'Tidak Disetujui';
    $t['unapproved'] = 'Tidak Disetujui';
    $t['approve'] = 'Disetujui';
    $t['approved'] = 'Disetujui';
    $t['select-deselect'] = 'Pilih Semua atau Tidak';
    $t['confirm_delete_comment'] = 'Apakah Anda akan menghapus komentar ini?';
    $t['confirm_delete_selected_comments'] = 'Apakah Anda akan menghapus komentar ini?';
    $t['bulk_action'] = 'Tindakan massal';
    $t['apply'] = 'Terapkan';
    $t['submitted_on'] = 'Diserahkan pada';
    $t['email'] = 'Alamat Surel';
    $t['website'] = 'Situs';
    $t['duplicate_content'] = 'Konten Duplikat';
    $t['insufficient_interval'] = 'Tidak ada jedah waktu antar komentar';

    // Users
    $t['user_name_restrictions'] = 'Hanya huruf kecil, angka, tanda garis tengah dan garis bawah diperbolehkan.';
    $t['display_name'] = 'Tampilkan Nama';
    $t['role'] = 'Peranan';
    $t['no_users_found'] = 'Anggota tidak ada';
    $t['confirm_delete_user'] = 'Anda akan menghapus anggota ini'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Anda akan menghapus anggota ini?';
    $t['disabled'] = 'Tidak Berfungsi';
    $t['new_password'] = 'Kata Sandi Baru';
    $t['new_password_msg'] = 'Ketik disini jika ingin mengganti kata sandi, kosongkan jika tidak.';
    $t['repeat_password'] = 'Ulangi Kata Sandi';
    $t['repeat_password_msg'] = 'Ketik kata sandi.';
    $t['user_name_exists'] = 'Nama sudah terpakai';
    $t['email_exists'] = 'Alamat surel sudah terpakai';

    // Login
    $t['user_name'] = 'Nama Anggota';
    $t['password'] = 'Kata Sandi';
    $t['login'] = 'Masuk';
    $t['forgot_password'] = 'Lupa Kata Sandi?';
    $t['prompt_cookies'] = 'Cookies harus difungsikan saat memakai CMS';
    $t['prompt_username'] = 'Ketik nama anggota';
    $t['prompt_password'] = 'Ketik kata sandi';
    $t['invalid_credentials'] = 'Nama anggota atau kata sandi salah';
    $t['account_disabled'] = 'Akun Non-Aktif';
    $t['access_denied'] = 'Akses di Non-aktifkan';
    $t['insufficient_privileges'] = 'Anda tidak mempunyai peranan untuk melihat laman yang Anda tuju.
                                    Untuk melihat laman ini keluar dan masuk lagi menggunakan akses yang lebih tinggi.';

    // Password recovery
    $t['recovery_prompt'] = 'Ketik nama anggota atau alamat surel.<br/>
                            Anda akan menerima surel berisikan kata sandi baru.';
    $t['name_or_email'] = 'Nama Anggota atau Alamat Surel';
    $t['submit'] = 'Serahkan';
    $t['submit_error'] = 'Ketik nama anggota atau alamat surel.';
    $t['no_such_user'] = 'Nama anggota tidak ada dalam data Kami';
    $t['reset_req_email_subject'] = 'Kata sandi baru yang Anda minta';
    $t['reset_req_email_msg_0'] = 'Ada permintaan untuk merubah kata sandi dari situs dan nama anggota ini';
    $t['reset_req_email_msg_1'] = 'Untuk memastikan permintaan ini dari Anda, kunjungi laman ini. Bila Anda tidak berencana menggantinya, abaikan surel ini.';
    $t['email_failed'] = 'Surel tidak dapat dikirim';
    $t['reset_req_email_confirm'] = 'Konfirmasi surel telah dikirim.<br/>
                                    Lihat kotak surel Anda.';
    $t['invalid_key'] = 'Invalid key';
    $t['reset_email_subject'] = 'Kata sandi baru';
    $t['reset_email_msg_0'] = 'Kata sandi anda telah diperbarui dari situs dan nama anggota ini.';
    $t['reset_email_msg_1'] = 'Anda dapat mengganti kata sandi ini setelah masuk.';
    $t['reset_email_confirm'] = 'Kata sandi telah diperbarui.<br/>
                                Lihat kotak surel Anda untuk kata sandi baru.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Mode Pemeliharaan</h2>
                        <p>
                            Mohon Maaf atas ketidaknyamanan ini.<br/>
                            Situs kami masih dalam pemeliharaan.<br/>
                            <b>Coba beberapa saat lagi.</b>
                        </p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Panel Admin';
    $t['login_title'] = 'CouchCMS';

    // Folders
    $t['no_folders'] = 'Tidak ada direktori';
    $t['select_folder'] = 'Pilih Direktori';
    $t['folders'] = 'Direktori';
    $t['manage_folders'] = 'Kelola Direktori';
    $t['add_new_folder'] = 'Tambah Direktori';
    $t['parent_folder'] = 'Direktori Utama';
    $t['weight'] = 'Berat';
    $t['weight_desc'] = 'Semakin tinggi nilai value, menurunkan direktori akan muncul didaftar. Dapat dirubah menjadi nilai negatif.';
    $t['desc'] = 'Keterangan';
    $t['image'] = 'Gambar';
    $t['cannot_be_own_parent'] = 'Tidak bisa di direktori utama';
    $t['name_already_exists'] = 'Nama sudah ada';
    $t['pages'] = 'Laman';
    $t['none'] = 'Kosong';
    $t['confirm_delete_folder'] = 'Akan menghapus direktori ini'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Akan menghapus direktori ini?';

    // Drafts
    $t['draft_caps'] = 'DRAFT'; // Upper case
    $t['draft'] = 'Draft';
    $t['drafts'] = 'Draft';
    $t['create_draft'] = 'Buat Draft';
    $t['create_draft_msg'] = 'Buat copy dari laman ini (setelah perubahan disimpan)';
    $t['manage_drafts'] = 'Kelola Draft'; // Plural
    $t['update_original'] = 'Perbarui Original';
    $t['update_original_msg'] = 'Copy isi konten dari draft ini ke laman asli (dan hapus draft)';
    $t['recreate_original'] = 'Recreate Original';
    $t['no_drafts_found'] = 'Draft tidak ditemukan';
    $t['original_page'] = 'Laman Original';
    $t['template'] = 'Template';
    $t['modified'] = 'Perubahan'; // Date of last modification
    $t['preview'] = 'Preview';
    $t['confirm_delete_draft'] = 'Apakah Anda akan menghapus draft ini'; // No question mark please
    $t['confirm_delete_selected_drafts'] = 'Apakah Anda akan menghapus draft ini?';
    $t['confirm_apply_selected_drafts'] = 'Apakah Anda akan menghapus draft ini?';
    $t['view_all_drafts'] = 'Lihat semua draft';
    $t['original_deleted'] = 'ORIGINAL DIHAPUS'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Laman Utama';
    $t['page_weight_desc'] = 'Semakin tinggi nilai value, menurunkan direktori akan muncul didaftar. Dapat dirubah menjadi nilai negatif.';
    $t['active'] = 'Aktif';
    $t['inactive'] = 'Non-Aktif';
    $t['menu'] = 'Menu';
    $t['menu_text'] = 'Menu Text';
    $t['show_in_menu'] = 'Tampilkan di menu';
    $t['not_shown_in_menu'] = 'Tidak tampil di menu';
    $t['leave_empty'] = 'Kosongkan untuk judul laman';
    $t['menu_link'] = 'Menu Link';
    $t['link_url'] = 'Laman ini menunjukan lokasi berikut ini';
    $t['link_url_desc'] = 'Dapat dikosongkan';
    $t['separate_window'] = 'Buka di jendela berbeda';
    $t['pointer_page'] = 'Laman Penunjuk';
    $t['points_to_another_page'] = 'Tunjuk ke laman lain';
    $t['points_to'] = 'Tunjuk ke';
    $t['redirects'] = 'Redirects';
    $t['masquerades'] = 'Penyamaran';
    $t['strict_matching'] = 'Tandai untuk semua laman di link di bawah ini';
    $t['up'] = 'Keatas';
    $t['down'] = 'Kebawah';
    $t['remove_template_completely'] = 'Hapus semua laman dan draft dari template ini';
    $t['remove_uncloned_template_completely'] = 'Hapus semua draft dari template ini';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Unggah';
    $t['folder_empty'] = 'Direktori ini kosong. Gunakan tombol unggah diatas untuk mengunggah gambar';
    $t['root'] = 'Root';
    $t['item'] = 'gambar'; // Single
    $t['items'] = 'gambar'; // Multiple
    $t['container'] = 'direktori'; // Single
    $t['containers'] = 'direktori'; // Multiple

    //
    $t['columns_missing'] = 'Beberapa baris hilang!';
    $t['confirm_delete_columns'] = 'Apakah Anda akan menghapus kolom yang hilang selamanya?';
    $t['add_row'] = 'Tambah Baris';

    // 2.0
    $t['left'] = 'Pindah Kekiri';
    $t['right'] = 'Pindah Kekanan';
    $t['crop'] = 'Crop';
    $t['menu_templates'] = 'Template';
    $t['menu_modules'] = 'Administrasi';
    $t['cancel'] = 'Batal';
    $t['selected'] = 'Terpilih';
    $t['add'] = 'Tambah';
    $t['remove'] = 'Hapus';
    // 2.1
    $t['tiles_missing'] = 'Beberapa tile hilang!';
    $t['confirm_delete_tiles'] = 'Apakah Anda sudah pasti akan menghapus file ini selamanya?';
    $t['add_above'] = 'Tambah Atas';
    $t['confirm_delete_row'] = 'Hapus baris ini?';
    $t['no_data_message'] = '- Kosong -';
    $t['ok'] = 'OK';
    $t['globals'] = 'Massal';
    $t['manage_globals'] = 'Kelola Massal';
    $t['bulk_action_with_selected'] = 'Terapkan massal dari yang dipilih';
    $t['month01'] = 'Januari';
    $t['month02'] = 'Februari';
    $t['month03'] = 'Maret';
    $t['month04'] = 'April';
    $t['month05'] = 'Mei';
    $t['month06'] = 'Juni';
    $t['month07'] = 'Juli';
    $t['month08'] = 'Agustus';
    $t['month09'] = 'September';
    $t['month10'] = 'Oktober';
    $t['month11'] = 'November';
    $t['month12'] = 'Desember';
