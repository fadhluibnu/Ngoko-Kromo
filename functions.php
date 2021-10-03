<?php

$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_kamus");

function query($query)
{
    global $koneksi;
    global $row;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function searching_kamus($keyword)
{
    $query = query("SELECT * FROM kamus WHERE
                    ngoko LIKE '%$keyword%' OR
                    kromo LIKE '%$keyword%'");

    return $query;
}
function searching_pocung($keyword)
{
    $query = query("SELECT * FROM pocung WHERE
                    gatraSiji LIKE '%$keyword%' OR
                    gatraLoro LIKE '%$keyword%' OR
                    gatraTelu LIKE '%$keyword%' OR
                    gatraPapat LIKE '%$keyword%' OR
                    gatraLima LIKE '%$keyword%'");

    return $query;
}

function tambahKamus($dNgoko, $dKromo)
{
    global $koneksi;
    $ngoko = htmlspecialchars($dNgoko);
    $kromo = htmlspecialchars($dKromo);
    $query = "INSERT INTO kamus VALUES ('', '$ngoko', '$kromo')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function tambahPocung($gatraSiji, $gatraLoro, $gatraTelu, $gatraPapat, $gatraLima, $tegese)
{
    global $koneksi;
    $siji = htmlspecialchars($gatraSiji);
    $loro = htmlspecialchars($gatraLoro);
    $telu = htmlspecialchars($gatraTelu);
    $papat = htmlspecialchars($gatraPapat);
    $lima = htmlspecialchars($gatraLima);
    $teges = htmlspecialchars($tegese);
    $query = "INSERT INTO pocung VALUES ('', '$siji', '$loro', '$telu', '$papat', '$lima', '$teges')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>

<?php
function alertSucces()
{
?>
    <div class="modal-dialog modal-dialog-centered">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <i class="bi bi-check-square-fill"></i>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
<?php
}
?>