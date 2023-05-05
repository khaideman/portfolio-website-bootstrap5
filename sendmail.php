<?php
ini_set("SMTP","khaideman99@gmail.com");
ini_set("smtp_port","25");

// Setel penerima email
$to = "khaideman99@gmail.com";

// Ambil data dari form
$name = $_POST["nama"];
$email = $_POST["email"];
$message = $_POST["pesan"];

// Setel subjek email
$subject = "Pesan dari $name ($email)";

// Setel pesan email
$body = "Pesan dari $name ($email):\n\n$message";

// Setel header email
$headers = "From: $email";

// Kirim email
if (mail($to, $subject, $body, $headers)) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Terkirim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-9+V7mnJh+cVE/7dNQaZDW/v+Y8N/gLrklN1yokc9yti67pJlP8llkcLjZQbRoZfzDtEESgJrK1rRyX9DyHZT2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .paper-plane {
        position: absolute;
        width: 50px;
        animation: fly 6s linear infinite;
        animation-delay: 2s;
        top: calc(85px + 10px);
        left: -100px;
      }

      @keyframes fly {
        from {
          left: -100px;
        }
        to {
          left: calc(100% + 100px);
        }
      }
      
      @media (max-width: 486px) {
          .paper-plane {
              padding-top: calc(18px);
              width: 40px;
            }
        }

      @media (max-width: 266px) {
          .paper-plane {
              padding-top: calc(36px);
              width: 30px;
            }
        }
        </style>
  </head>
  <body>
    <div class="container my-5">
        <div class="container">
            <div class="alert alert-success text-center" role="alert">
              <h4 class="alert-heading">Email berhasil terkirim!</h4>
              <p>Terima kasih sudah menghubungi kami, kami akan merespon secepatnya.</p>
            </div>
        </div>
        <img src="https://www.onlygfx.com/wp-content/uploads/2021/07/paper-plane-9.png" alt="Paper plane" class="paper-plane">
        <hr>
        <br>
        <p class="mb-0">Kembali ke <a href="https://kalvinhaideman.000webhostapp.com" class="alert-link">Halaman Portfolio</a>.</p>
    </div>
  </body>
</html>

<?php
} else {
  echo "Pesan gagal terkirim.";
}
?>
