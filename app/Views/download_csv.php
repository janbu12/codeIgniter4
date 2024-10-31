<!DOCTYPE html>
<html lang="en">
<?php
// echo("sdjsdfs");
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        // $data = [];
        // $data = array(
        //     'buku' => $this->model->select_all()->getResult()
        // );
        $df = fopen("php://output", 'w');
        foreach ($buku as $b) {
            fwrite($df,$b->kategori);
            fwrite($df,",");
            fwrite($df,$b->nama_buku);
            fwrite($df,",");
            fwrite($df,$b->harga);
            fwrite($df,",");
            fwrite($df,$b->stok);
            fwrite($df,",");
            fwrite($df,$b->nama);
            fwrite($df,",");
            fwrite($df,"\n");
        }
        // fwrite($df,"Aasdiajsdasjd");
        fclose($df);
        // return ob_get_clean();
        // $fp = fopen('php://output', 'wb');
        // fputcsv($fp,$buku);
        // // foreach ( $buku as $line ) {
        // //     $val = explode(",", $line);
        // //     fputcsv($fp, $val);
        // // }
        // fclose($fp);
?>