<?php
require_once "bank.php";
    $asmali = new Account('C001','asmali',7000000);
    $boby = new Account('C002','boby',8350000);
    $kyle = new Account('C003','kyle',3500000);
    $data = [$asmali, $boby , $kyle];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar  Account Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h3>Daftar Account Bank</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No.Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $asmali->deposit(1000000);
        $asmali->customerTransfer($kyle, 1500000);
        $asmali->customerTransfer($boby, 500000);
        $boby->withdraw(2500000);
        $nomor = 1;
        foreach($data as $account){
            ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $account->nomor; ?></td>
                <td><?= $account->name; ?></td>
                <td><?= $account->cetak(); ?></td>
            </tr>
            <?php
        $nomor++;
        }
        ?>
        </tbody>
    </table>
    <h3>Data Terbaru</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No.Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $nomor = 1;
        foreach($data as $account){
            ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $account->nomor; ?></td>
                <td><?= $account->name; ?></td>
                <td><?= $account->cetak(); ?></td>
            </tr>
            <?php
        $nomor++;
        }
        ?>
        </tbody>
    </table>
    <div class="card-footer text-muted">© 2022 Ja'far Shodiq Asmali</div>
</body>
</html>