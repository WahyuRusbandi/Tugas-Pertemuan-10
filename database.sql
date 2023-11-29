CREATE TABLE tb_produk (
	kode_barang TINYINT (3) NOT NULL AUTO_INCREMENT,
	nama_barang VARCHAR(50) NOT NULL,
	harga_barang INT(12) NOT NULL,
	stock_barang INT(4) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	update_at DATETIME DEFAULT NULL,
	PRIMARY KEY(kode_barang)
);

CREATE TABLE tb_pelanggan (
	pelanggan_id TINYINT (3) NOT NULL AUTO_INCREMENT,
	kode_barang TINYINT (3) NOT NULL,
	nama_user VARCHAR(100) DEFAULT NULL,
	alamat_user TEXT NOT NULL,
	nohp_user CHAR(12) NOT NULL,
	ktp_user VARCHAR(50) NOT NULL,
	id_user INT(11) NOT NULL,
	pelanggan_aktif enum("Y",'N'),
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(pelanggan_id)
	UNIQUE KEY(kode_barang)
	UNIQUE KEY(id_user)
);

CREATE TABLE tb_users (
	id_user INT(11) NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_password VARCHAR(100) NOT NULL,
	nama_user VARCHAR(100) DEFAULT NULL,
	nohp_user CHAR (12) NOT NULL,
	alamat_user TEXT NOT NULL,
	role_user TINYINT(2) NOT NULL,
	aktif_user TINYINT(2) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT NULL,
	PRIMARY KEY(id_user),
	UNIQUE KEY(user_email)
);

INSERT INTO
	tb_users
VALUES
	(
		1,
		'admin@gmail.com',
		'*4ACFE3202A5FF5CF467898FC58AAB1D615029441',
		'Administrator',
		'083856206115',
		'jln gaharu b5 no7',
		1,
		2,
		'2023-11-03 03:40:43',
		NULL
	);