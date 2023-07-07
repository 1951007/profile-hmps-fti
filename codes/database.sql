CREATE TABLE `berita_fti` (
  `id_berita` int AUTO_INCREMENT,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` datetime NOT NULL,
  `gambar_berita` varchar(64) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(60) NOT NULL,
  `nim` int(20) NOT NULL,
  `id_password` int(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(5) NOT NULL AUTO_INCREMENT,
  `gambar_struktur` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `struktur_kategori` int(5) NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `visi` (
  `id_visi` int(5) NOT NULL AUTO_INCREMENT,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `id_kategori` int(5) NOT NULL,
  PRIMARY KEY (`id_visi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;