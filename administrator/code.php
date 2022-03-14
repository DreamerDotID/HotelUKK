<?php
include('security.php');
require 'db/dbconfig.php';

if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['confirmpassword']);
    $permission = $_POST['permission'];

    if ($password === $cpassword) {
        $query = "INSERT INTO administrator (username,password,permission) VALUES ('$username', '$password', '$permission')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            // echo "Saved";
            $_SESSION['success'] = "Admin Profile Created";
            header('Location: user.php');
        } else {
            $_SESSION['status'] = "Admin Profile Creation Cancelled";
            header('Location: user.php');
        }
    } else {
        $_SESSION['status'] = "Your Password does not match!";
        header('Location: user.php');
    }
}





if (isset($_POST['updatebtn'])) {
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $password = md5($_POST['edit_password']);
    $permission = $_POST['permission'];

    $query = "UPDATE administrator SET username='$username', password='$password', permission='$permission' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Updated!";
        header('Location: user.php');
    } else {
        $_SESSION['status'] = "Data Update Failed!";
        header('Location: user.php');
    }
}




if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE FROM administrator WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: user.php');
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: user.php');
    }
}

if (isset($_POST['updatearticle_btn'])) {
    $nomer = $_POST['edit_nomer'];
    $judul = $_POST['edit_judul'];
    $subtitle = $_POST['edit_subtitle'];
    $isi = $_POST['edit_isi'];
    $pengirim = $_POST['edit_pengirim'];
    $tanggal = $_POST['edit_tanggal'];

    $query = "UPDATE article SET judul='$judul', subtitle='$subtitle', isi='$isi', pengirim='$pengirim', tanggal='$tanggal' WHERE nomer='$nomer'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Article telah Diupdate!";
        header('Location: article.php');
    } else {
        $_SESSION['status'] = "Article gagal Update!";
        header('Location: article.php');
    }
}
if (isset($_POST['delete_kamar'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM room_type WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: data_kamar.php');
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: data_kamar.php');
    }
}
if (isset($_POST['update_kamar'])) {
    $id = $_POST['id'];
    $title = $_POST['kamar'];
    $paket = $_POST['paket'];
    $isi = $_POST['isi'];

    $query = "UPDATE room_details SET id='$id', title='$title', detail_paket='$paket', isi='$isi' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Terupdate!";
        header('Location: data_kamar.php');
        if (isset($_FILES['foto_kamar'])) {
            $img_name = $_FILES['foto_kamar']['name'];
            $img_size = $_FILES['foto_kamar']['size'];
            $tmp_name = $_FILES['foto_kamar']['tmp_name'];
            $error = $_FILES['foto_kamar']['error'];

            if ($error === 0) {
                if ($img_size > 125000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: error_file_too_large.php");
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png", "jfif");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = '../images/' . $new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into Database
                        $sql = "UPDATE room_details SET image_url='$new_img_name' WHERE id='$id'";
                        mysqli_query($connection, $sql);
                        header("Location: sucessfully_upload.php");
                    } else {
                        $em = "You can't upload files of this type";
                        header("Location: file_error.php");
                    }
                }
            } else {
                $_SESSION['status'] = "Unknown Error Occured!";
                header("Location: data_kamar.php");
            }
        }
    }
}
if (isset($_POST['konfirmasi_pesanan'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];


    $query = "UPDATE guest SET status='$status' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Status Berhasil Dirubah!";
        header('Location: data_pemesanan.php');
    } else {
        $_SESSION['status'] = "Status Gagal Diperbaharui!";
        header('Location: data_pemesanan.php');
    }
}
if (isset($_POST['delete_pemesanan'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM guest WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: data_pemesanan.php');
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: data_pemesanan.php');
    }
}
if (isset($_POST['delete_imgbtn'])) {
    $id = $_POST['delete_image'];

    $query = "DELETE FROM images WHERE image_url='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: slide.php');
        unlink('images_website/' . $id);
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: slide.php');
    }
}
if (isset($_POST['delete_imgaboutbtn'])) {
    $id = $_POST['delete_imageabout'];

    $query = "DELETE FROM imagesabout WHERE image_url='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: aboutimg.php');
        unlink('images_website/about/' . $id);
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: aboutimg.php');
    }
}
if (isset($_POST['delete_gallerybtn'])) {
    require('db/dbconfig.php');
    $id = $_POST['gallery_id'];
    $url = $_POST['delete_gallery'];

    $query = "UPDATE gallery SET id='$id', img_url='' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: gallery.php');
        unlink('images_website/gallery/' . $url);
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: gallery.php');
    }
}
if (isset($_POST['delete_testimonial'])) {
    require('db/dbconfig.php');
    $id = $_POST['testimonial_id'];
    $url = $_POST['testimonial_img'];

    $query = "UPDATE testimonials SET id='$id', sender='', content='', img_url='' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);


    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: testimonials.php');
        unlink('images_website/profile/' . $url);
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: testimonials.php');
    }
}
if (isset($_POST['update_about'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $location = $_POST['location'];
    $isi = $_POST['isi'];
    $address = $_POST['address'];

    $query = "UPDATE about SET id='$id', title='$title', location='$location', isi='$isi', address='$address' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Terupdate!";
        header('Location: about.php');
        if (isset($_FILES['foto_about'])) {
            $img_name = $_FILES['foto_about']['name'];
            $img_size = $_FILES['foto_about']['size'];
            $tmp_name = $_FILES['foto_about']['tmp_name'];
            $error = $_FILES['foto_about']['error'];

            if ($error === 0) {
                if ($img_size > 125000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: error_file_too_large.php");
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png", "jfif");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = '../images/' . $new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into Database
                        $sql = "UPDATE about SET image_url='$new_img_name' WHERE id='$id'";
                        mysqli_query($connection, $sql);
                        header("Location: sucessfully_upload.php");
                    } else {
                        $em = "You can't upload files of this type";
                        header("Location: file_error.php");
                    }
                }
            } else {
                $_SESSION['status'] = "Unknown Error Occured!";
                header("Location: about.php");
            }
        }
    }
}
if (isset($_POST['update_image'])) {
    $id = $_POST['id'];
    $type = $_POST['type'];

    $query = "UPDATE images SET type='$type' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data Terupdate!";
        header('Location: about.php');
        if (isset($_FILES['foto_images'])) {
            $img_name = $_FILES['foto_images']['name'];
            $img_size = $_FILES['foto_images']['size'];
            $tmp_name = $_FILES['foto_images']['tmp_name'];
            $error = $_FILES['foto_images']['error'];

            if ($error === 0) {
                if ($img_size > 125000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: error_file_too_large.php");
                } else {
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);

                    $allowed_exs = array("jpg", "jpeg", "png", "jfif");

                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = '../images/' . $new_img_name;
                        move_uploaded_file($tmp_name, $img_upload_path);

                        // Insert into Database
                        $sql = "UPDATE images SET image_url='$new_img_name' WHERE id='$id'";
                        mysqli_query($connection, $sql);
                        header("Location: sucessfully_upload.php");
                    } else {
                        $em = "You can't upload files of this type";
                        header("Location: file_error.php");
                    }
                }
            } else {
                $_SESSION['status'] = "Unknown Error Occured!";
                header("Location: about.php");
            }
        }
    }
}
if (isset($_POST['delete_about'])) {
    $id = $_POST['delete_id'];

    $query = "UPDATE about SET title='', location='', isi='', address='', image_url='' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: about.php');
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: about.php');
    }
}
if (isset($_POST['update_featured'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $subtitle = $_POST['subtitle'];
    $isi = $_POST['isi'];
    $position = $_POST['position'];

    $query = "UPDATE featured SET judul='$judul', subtitle='$subtitle', isi='$isi', position='$position' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Updated!";
        header('Location: featured.php');
    } else {
        $_SESSION['status'] = "Data Update Failed!";
        header('Location: featured.php');
    }
}
if (isset($_POST['delete_featured'])) {
    $id = $_POST['delete_id'];

    $query = "UPDATE featured SET judul='', subtitle='', isi='', position='' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Data Deleted!";
        header('Location: featured.php');
    } else {
        $_SESSION['status'] = "Data Failed to Deleted!";
        header('Location: featured.php');
    }
}
