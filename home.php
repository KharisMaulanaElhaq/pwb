<?php
session_start();
// cek apakah yang mengakses halaman ini sudah login
if (empty($_SESSION['fullname'])) { ?>
    <script type="text/javascript">
        alert('Maaf Anda Belum login Silahkan Login Dahulu Jangan Curang 😋');
        window.location.assign('./index.php');
    </script>

<?php } ?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Kards</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css"> 
   <link rel="stylesheet" href="css/style.css">     
   <link rel="stylesheet" href="css/dark.css">  
   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<style>
	.container-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    width: 100%;
    margin: 0 auto; /* Tambahan ini */
    padding: 20px; /* Optional, untuk memberi ruang di sisi kiri dan kanan */
}

/* CSS lainnya tetap sama */
.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    max-width: 90%;
    text-align: center;
}

.container h2 {
    color: #1a237e;
    margin-bottom: 15px;
    font-size: 1.2em;
}

.card a {
    color: #fff !important;
    text-decoration: none; /* Menghilangkan garis bawah pada link */
}

/* Untuk teks yang langsung di dalam card (tanpa tag a) */
.card {
    background-color: #062b51;
    color: #fff;
    border-radius: 5px;
    padding: 10px;
    margin: 5px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Optional: style untuk link saat dihover */
.card a:hover {
    color: #fff !important;
}
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: scale(1.05); /* Membesarkan card sedikit */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Bayangan lebih dramatis */
}
.card-tugas {
    margin-top: 15px;
    padding: 10px;
    background-color: #ffffff;
    border: 1px solid #062b51;
    border-radius: 8px;
    color: #062b51;
}
.card-tugas h4 {
    margin-top: 0;
}
.sub-card {
    margin-top: 10px;
}
.sub-card button {
    width: 100%;
    padding: 12px; /* Tambah padding agar teks lebih tengah */
    background-color: #062b51;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    font-weight: bold;
    font-size: 14px;  /* Sesuaikan dengan card di atas */
    font-family: 'Arial', sans-serif; /* Ganti dengan font yang mirip */
    display: flex;
    justify-content: center;
    align-items: center;
    letter-spacing: 0.5px;  /* Tambah sedikit spasi antar huruf */
}
.sub-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.sub-card:hover {
  transform: scale(1.05); /* Membesarkan sedikit saat di-hover */
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Bayangan lebih besar untuk efek timbul */
  
}
.category-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
}
/* General Styles */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    color: #000000;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.content {
    padding: 20px;
    text-align: center;
    margin-top: 10%;
}

.text-tab {
	color: gray;
}




</style>
<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">KARDS</a>
		    </div>		      
			  <div class="toggle-container">
        		<input type="checkbox" id="dark-mode-toggle" />
        		<label for="dark-mode-toggle" class="toggle-label">
            	<span class="toggle-ball"></span>
        		</label>
    			</div>
		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Beranda</a></li>
						<li><a class="smoothscroll"  href="#about" title="">Tentang Saya</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Materi</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Basis Data</a></li>	
						<li><a class="smoothscroll"  href="#contact" title="">Kontak</a></li>
						<li><a  href="logout.php" title="">Keluar</a></li>					
					</ul>
				</nav>	
				
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Selamat Datang</h5>
	   			<h1><?= htmlspecialchars($_SESSION['fullname']); ?>!</h1>

	   			<p class="intro-position">
	   				<span>kalo mau tau tentang saya </span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title=""> Klik Disini </a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-behance"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
         <li><a href="https://www.instagram.com/khrismaulana_/profilecard/?igsh=MXp2MDlhanB5OTJh"><i class="fa fa-instagram"></i></a></li>
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Tentang Saya</h5>
   			<h2>MUH KHARIS MAULANA ELHAQ</h2>

   			<div class="intro-info">

   				<img src="images/munich.jpg" alt="Profile Picture">

   				<p class="lead">Saya adalah seorang desainer grafis Dengan pengalaman dalam menggunakan berbagai alat desain seperti Adobe Photoshop dan Illustrator, saya telah menciptakan berbagai proyek mulai dari logo, poster, hingga desain antarmuka.

					Saat ini, saya sedang memperdalam pengetahuan saya dalam bahasa pemrograman PHP. Saya percaya bahwa kombinasi antara desain grafis dan pengembangan web akan memungkinkan saya untuk menciptakan solusi yang lebih inovatif dan fungsional. Saya senang belajar dan beradaptasi dengan teknologi baru, dan saya berkomitmen untuk terus meningkatkan keterampilan saya di bidang ini.</p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Motivasi</h3>
   			<p class="text-tab">Hidup ini seperti kode pemrograman setiap keputusan adalah sebuah kondisi yang membawamu pada hasil akhir, Dan seperti sistem yang selalu update kita juga harus terus belajar dan beradaptasi dengan perubahan.</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Muh. Kharis Maulana Elhaq</span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span>23 Juni 2004</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Freelancer, Desain Grafis </span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>www.maulanaelhaq.com</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span>kharismaulana2326@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Keterampilan</h3>
   			<p class="text-tab">Saya adalah seorang manusia biasa yang memiliki bakat desainer, dan disini saya sedang mendalami tentang pemrograman PHP.</p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>CANVA</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>CORELDRAW</strong>
				   </li>
				   <li>
				   	<div class="progress percent60"><span>60%</span></div>
				   	<strong>UI UX</strong>
				   </li>
				   <li>
				   	<div class="progress percent30"><span>30%</span></div>
				   	<strong>HTML</strong>
				   </li>
				   <li>

				   	<div class="progress percent20"><span>20%</span></div>
				   	<strong>PHP</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>MATERI</h5>
   			<h1>BELAJAR PHP</h1>

   			<p class="lead">PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang digunakan untuk membuat halaman web dinamis. PHP dapat disematkan langsung ke dalam HTML dan berfungsi untuk mengelola data, seperti memproses formulir, berinteraksi dengan database, atau menghasilkan konten halaman web yang interaktif. Salah satu kelebihan PHP adalah kemampuannya untuk berjalan di berbagai platform, seperti Windows, Linux, dan macOS, serta dukungannya terhadap banyak jenis database, seperti MySQL, PostgreSQL, dan lainnya. PHP sering digunakan dalam pengembangan website berbasis CMS (Content Management System) seperti WordPress.</p>
   		</div>   		

	   			</div> <!-- /timeline-block -->
				   <div class="container-wrapper">
					<!-- Container 1: Materi Dasar PHP -->
					<div class="container">
						<h2>Struktur Dasar PHP</h2>
						<div class="card"><a href="Materi/hello.php">Say Hello To PHP</a></div>
						<div class="card"><a href="Materi/variabelbuku.php">Variabel</a></div>
						<div class="card"><a href="Materi/tipedata.php">Tipedata</a></div>
						<div class="card"><a href="Materi/operator.php">Operator</a></div>
						<div class="card"><a href="Materi/operator2.php">Operator 2</a></div>
						<div class="card"><a href="Materi/konstanta.php">Konstanta</a></div>
						<div class="card"><a href="Materi/komentar.php">Komentar</a></div>
					</div>
			
					<!-- Container 2: Struktur Kondisi dan Perulangan -->
					<div class="container">
						<h2>Kondisi Perulangan</h2>
						<div class="card"><a href="Kondisi/if.php">Struktur If</a></div>
						<div class="card"><a href="Kondisi/if_else.php">Struktur Else</a></div>
						<div class="card"><a href="Kondisi/if_else2.php">Username dan Password</a></div>
						<div class="card"><a href="Kondisi/if_var.php">Memeriksa Suatu Variabel</a></div>
						<div class="card"><a href="Kondisi/switch.php">Struktur Switch Case</a></div>
						<div class="card"><a href="Kondisi/if_khusus.php">Memeriksa Tahun Kabisat</a></div>
						<div class="card"><a href="Kondisi/for.php">For</a></div>
						<div class="card"><a href="Kondisi/while.php">While</a></div>
						<div class="card"><a href="Kondisi/dowhile.php">Dowhile</a></div>
						<div class="card"><a href="Kondisi/break.php">Break</a></div>
						<div class="card-tugas">
							<h4>Tugas</h4>
							<!-- Card Tugas 1 -->
							<div class="sub-card"><a href="Kondisi/tugas.php"><button>Tugas Diskon</button></a>
							</div>
							<!-- Card Tugas 2 -->
							<div class="sub-card"><a href="Kondisi/Studi1.php"><button>Studi 1</button></a>
							</div>
							<!-- Card Tugas 3 -->
							<div class="sub-card"><a href="Kondisi/Studi2.php"><button>Studi 2</button></a>
							</div>
							<!-- Card Tugas 3 -->
							<div class="sub-card"><a href="Kondisi/break2.php"><button>Bilangan Prima</button></a>
							</div>
						</div>
					</div>
			
					<!-- Container 3: Penanganan Form -->
					<div class="container">
						<h2>Penanganan Form</h2>
						<div class="card"><a href="Form/input01.php">Form One Page</a></div>
						<div class="card"><a href="Form/input02.php">Form (Post)</a></div>
						<div class="card"><a href="Form/input03.php">Form (Get)</a></div>
						<div class="card"><a href="Form/input04.php">Form Type Text</a></div>
						<div class="card"><a href="Form/input05.php">Form Type Password</a></div>
						<div class="card"><a href="Form/input06.php">Form Type Radio</a></div>
						<div class="card"><a href="Form/input07.php">Form Check Box</a></div>
						<div class="card"><a href="Form/input08.php">Form Combo Box</a></div>
						<div class="card"><a href="Form/input09.php">Form Text Area</a></div>
						<div class="card-tugas">
							<h4>Tugas</h4>
							
							<!-- Card Tugas 1 -->
							<div class="sub-card"><a href="Form/input10.php"><button>Latihan</button></a>
							</div>
							<!-- Card Tugas 2 -->
							<div class="sub-card"><a href="Form/quiz.php"><button>Quiz</button></a>
							</div>
						</div>
					</div>
					<!-- Container 4: Fungsi Array -->
					<div class="container">
						<h2>Array & Fungsi</h2>
						<div class="card"><a href="Array/array1.php">Array</a></div>
						<div class="card"><a href="Array/array02.php">Array Asosiatif</a></div>
						<div class="card"><a href="Array/array03.php">Array Numerik</a></div>
						<div class="card"><a href="Array/array04.php">Sort Dan Rsot</a></div>
						<div class="card"><a href="Array/array05.php">Ksort Dan Krsort</a></div>
						<div class="card"><a href="Array/array06.php">Pointer</a></div>
						<div class="card"><a href="Fungsi/Fungsi01.php">Tanpa Paramater</a></div>
						<div class="card"><a href="Fungsi/Fungsi02.php">Parameter</a></div>
						<div class="card"><a href="Fungsi/Fungsi03.php">Lingkaran</a></div>
						<div class="card"><a href="Fungsi/Fungsi04.php">Manipulasi String</a></div>
						<div class="card"><a href="Fungsi/Fungsi05.php">Parameter Refrensi</a></div>
						<div class="card"><a href="Fungsi/Fungsi06.php">Fungsi Bawaan & pengguna </a></div>
						<div class="card"><a href="Fungsi/Fungsi07.php">Function Exists</a></div>
						<div class="card-tugas">
							<h4>Tugas</h4>
							
							<!-- Card Tugas 1 -->
							<div class="sub-card"><a href="array-hitung/hitung.php"><button>Latihan</button></a>
							</div>
						</div>
					</div>
					<!-- Container 5: String & Date -->
					<div class="container">
						<h2>String & Date</h2>
						<div class="card"><a href="String/string01.php">Single Quoted</a></div>
						<div class="card"><a href="String/string02.php">Heredoc Sintaks</a></div>
						<div class="card"><a href="String/string03.php">Penggunaan Fungsi</a></div>
						<div class="card"><a href="String/string04.php">Fungsi Addslashes</a></div>
						<div class="card"><a href="String/string05.php">Fungsi Chr</a></div>
						<div class="card"><a href="String/string06.php">Strip Tags</a></div>
						<div class="card"><a href="String/string07.php">Number Format</a></div>
						<div class="card"><a href="String/date01.php">Date 01</a></div>
						<div class="card"><a href="String/date02.php">Date 02</a></div>
					</div>
					<!-- Container 6: File & Direktori -->
					<div class="container">
						<h2>File & Direktori</h2>
						<div class="card"><a href="direktori/file01.php">Membuka</div>
						<div class="card"><a href="direktori/file02.php">Menulis ke File</a></div>
						<div class="card"><a href="direktori/file03.php">Menampilkan Isi File </a></div>
						<div class="card"><a href="direktori/file04.php">Aplikasi User Counter</a></div>
						<div class="card"><a href="direktori/file05.php">Membuat Direktori</a></div>
						<div class="card"><a href="direktori/file06.php">Menghapus Direktori</a></div>
						<div class="card"><a href="direktori/file07.php">Menampilkan Isi Direktori</a></div>
						<div class="card"><a href="direktori/file08.php">Memeriksa File</a></div>
						<div class="card"><a href="direktori/file09.php">Copy, Rename & Delete</a></div>
						<div class="card"><a href="direktori/file10.php">Upload File</a></div>
					</div>
				</div>
			
   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">
   		</div>
		   <h5>BASIS DATA 2</h5>
		   <h1>TUGAS DATABASE</h1>
		   <div class="card-tugas">
			<!-- Card Tugas 1 -->
			<div class="sub-card"><a href="database/index.php"><button>Lihat Database</button></a>
			</div>
		</div>   
   	</div> <!-- /section-intro--> 	
	</section> <!-- /portfolio --> 



	</section> <!-- /services -->		
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I am ready to help you with your assignment</h1>

   			<p class="lead">If you are having difficulty in completing web assignments or creating graphic designs, UIUX design can contact me via the email below but please say thank you with a Brimo notification.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            Jatibaranglor <br>
            Kecamatan Jatibarang Kab.Brebes<br>
            Indonesia
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>kharismaulana2326@gmail.com<br>
			   	alinsulastri@gmail.com			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+62)857 1226 9070<br></p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="https://www.instagram.com/khrismaulana_/profilecard/?igsh=MXp2MDlhanB5OTJh"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script src="js/dark.js"></script>
   <script src="main.js"></script>
</body>

</html>