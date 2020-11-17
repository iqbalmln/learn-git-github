<?php 
    $conn = mysqli_connect('localhost','root','','phpdasar');

    if ( !$conn ) {
        echo "Koneksi gagal";        
    }

    function query ( $query ) {
        global $conn;
        
        $result = mysqli_query($conn,$query);

        while ( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }

        return $rows;
    }

    

    function insert ( $data ) {
        global $conn;
        
        $nim = htmlspecialchars( $data["nim"] );
        $nama = htmlspecialchars( $data["nama"] );
        $email = htmlspecialchars( $data["email"] );
        $jurusan = htmlspecialchars( $data["jurusan"]);
        $gambar = htmlspecialchars( $data["gambar"] );

        //query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama','$nim','$email','$jurusan','$gambar')
        ";
        mysqli_query( $conn,$query );
        return mysqli_affected_rows($conn);
    }

    function delete ( $id ) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
?>
