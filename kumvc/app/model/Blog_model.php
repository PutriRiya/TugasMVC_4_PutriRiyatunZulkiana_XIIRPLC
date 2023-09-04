<?php
class Blog_model{
    
    private $blog = [
        [
            "kkl" => "Teknik Konstruksi dan Perumahan (TKP)",
            "des" => "Salah satu kompetensi keahlian yang berhubungan dengan pembangunan perumahan, mulai dari perencanaan, pelaksanaan, dan evaluasi kegiatan konstruksi."
        ],
        [
            "kkl" => "Desain Permodelan dan Informasi Bangunan (DPIB)",
            "des" => "Salah satu kompetensi keahlian yang mempelajari tentang perencanaan bangunan, pelaksanaan pembuatan gedung dan perbaikan gedung."
        ],
        [
            "kkl" => "Teknik Pemanasan, Tata Udara dan Pendingin (TPTUP)",
            "des" => "Salah satu kompetensi keahlian yang mempelajari tentang pengendalian suhu, kelembaban, dan kebersihan udara pada suatu ruangan."
        ],
        [
            "kkl" => "Teknik Pengelasan (TP)",
            "des" => "Salah satu kompetensi keahlian yang mempelajari satu bidang kerja saja yaitu bagaimana cara untuk mengelas yang baik, dan teori tentang apa-apa saja bahan untuk proses pengelasan."
        ],
        [
            "kkl" => "Rekayasa Perangkat Lunak (RPL)",
            "des" => "Salah satu kompetensi keahlian dalam bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman komputer."
        ],
        [
            "kkl" => "Kuliner",
            "des" => "Ilmu pengetahuan mengenai seni mengolah makanan, mulai dari persiapan, pengolahan, hingga cara menghidangkan makanan."
        ],
        [
            "kkl" => "Akuntansi",
            "des" => "Suatu kegiatan mempelajari ekonomi yang terdiri dari proses pencatatan, peringkasan, klarifikasi, pengolahan, dan penyajian data transaksi dan berbagai kegiatan yang berhubungan dengan keuangan."
        ],
        
    ];
    
    public function getAllBlog(){
        return $this->blog;
    }
}
?>